import { chromium } from 'playwright';

const user_id = process.argv[2];
const user_pass = process.argv[3];



(async () => {

    // console.log("start");
    // console.log("Debug User:", user_id);
    // Check if variables are undefined before using them
    if (!user_id || !user_pass) {
        console.error(JSON.stringify({ 
            status: 'error', 
            message: 'Environment variables CRAWL_USER or CRAWL_PASS are missing' 
        }));
        process.exit(1);
    }

    // 1. Launch Browser
    const browser = await chromium.launch({ headless: true });
    const context = await browser.newContext();
    const page = await context.newPage();

    // 2. Navigate to the page
    await page.goto('https://cas.iium.edu.my:8448/cas/login?service=https%3a%2f%2fimaluum.iium.edu.my%2fhome');

    // 3. Fill the form
    await page.fill('#username', user_id);
    await page.fill('#password', user_pass);

    // 4. Submit
    await page.click('input[name="submit"]');

    // 5. Verify Login
    // Note: Make sure '.welcome-message' actually exists on the IIUM dashboard
    // If it doesn't, this line will timeout.

    await page.goto('https://imaluum.iium.edu.my/home'); // Or the specific dashboard URL

    // 1. Wait for the dashboard to load
    await page.waitForURL('**/home');

    // 2. CRITICAL: Click the user menu to ensure the dropdown is rendered/visible
    await page.click('li.user-menu > a');

    // 3. Wait for the dropdown content to appear
    await page.waitForSelector('.user-header p');

    // 4. Use a more precise extraction method
    const userData = await page.evaluate(() => {
        const pTag = document.querySelector('.user-header p');
        if (!pTag) return { status: 'error', message: 'Element not found' };

        // Get all text nodes and filter out empty ones
        // This is safer than .innerText because it handles <br> better
        const textContent = pTag.innerText.split('\n')
            .map(line => line.trim())
            .filter(line => line.length > 0);

        // Based on your HTML:
        // textContent[0] -> "UG | 2225498"
        // textContent[1] -> "nabilahnordin20082002@gmail.com"

        return {
            name: document.querySelector('.hidden-xs')?.innerText.trim(),
            matric_no: textContent[0]?.split('|')[1]?.trim() || 'N/A',
            email: textContent[1] || 'N/A',
            status: 'success'
        };
    });

    // 3. Send the JSON to PHP
    console.log(JSON.stringify(userData));

    await browser.close();

})();