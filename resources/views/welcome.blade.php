<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>e-Tawassul</title>

    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3l7 4v5c0 5-3.5 8-7 9-3.5-1-7-4-7-9V7l7-4z" />
                    </svg>
                </div>
                <div>
                    <h1 class="font-semibold text-lg">e-Tawassul</h1>
                    <p class="text-sm text-gray-500">Student Crisis & Digital Legacy System</p>
                </div>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm text-slate-600">
                <a href="#" class="hover:text-slate-900 transition">About</a>
                <a href="#" class="hover:text-slate-900 transition">Features</a>
                <a href="#" class="hover:text-slate-900 transition">How It Works</a>
                <a href="#" class="hover:text-slate-900 transition">Resources</a>
                <a href="#" class="hover:text-slate-900 transition">Contact</a>
            </nav>

            <a href="{{ url('/admin') }}"
                class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2.5 rounded-xl font-medium hover:bg-blue-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 17l5-5-5-5m4 5H3" />
                </svg>
                Login
            </a>
        </div>
    </header>

    <!-- TOP HERO -->
    <section class="bg-slate-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="relative overflow-hidden rounded-[3rem] bg-white shadow-[0_30px_90px_rgba(15,23,42,0.08)]">
                <div class="absolute left-0 top-0 h-72 w-72 rounded-full bg-sky-200/60 blur-3xl -translate-x-1/3 -translate-y-1/3"></div>
                <div class="absolute right-0 bottom-0 h-72 w-72 rounded-full bg-sky-100/80 blur-3xl translate-x-1/4 translate-y-1/4"></div>

                <div class="relative grid gap-10 lg:grid-cols-[0.95fr_1.4fr_0.95fr] items-center px-6 py-16 md:px-10 lg:px-14">
                    <div class="flex flex-col items-center gap-8 xl:items-end">
                        <button data-category="flood" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/flood.png') }}" alt="Flood" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">Flood</span>
                        </button>

                        <button data-category="coma" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/coma.png') }}" alt="Coma" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">Coma</span>
                        </button>

                        <button data-category="housefire" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/housefire.png') }}" alt="House Fire" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">House Fire</span>
                        </button>
                    </div>

                    <div class="space-y-10 text-center">
                        <div class="space-y-6">
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-slate-950">
                                When crisis strikes, support is already here
                            </h1>
                            <p class="mx-auto max-w-3xl text-lg text-slate-600">
                                A unified emergency and legacy system that responds fast, restores trust, and keeps student care at the center.
                            </p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-4">
                            <div class="rounded-[2rem] bg-slate-100 px-5 py-6 shadow-sm">
                                <p class="text-4xl font-semibold text-slate-950">64</p>
                                <p class="mt-2 text-sm uppercase tracking-[0.45em] text-slate-500">Days</p>
                            </div>
                            <div class="rounded-[2rem] bg-slate-100 px-5 py-6 shadow-sm">
                                <p class="text-4xl font-semibold text-slate-950">12</p>
                                <p class="mt-2 text-sm uppercase tracking-[0.45em] text-slate-500">Hours</p>
                            </div>
                            <div class="rounded-[2rem] bg-slate-100 px-5 py-6 shadow-sm">
                                <p class="text-4xl font-semibold text-slate-950">26</p>
                                <p class="mt-2 text-sm uppercase tracking-[0.45em] text-slate-500">Mins</p>
                            </div>
                            <div class="rounded-[2rem] bg-slate-100 px-5 py-6 shadow-sm">
                                <p class="text-4xl font-semibold text-slate-950">47</p>
                                <p class="mt-2 text-sm uppercase tracking-[0.45em] text-slate-500">Seconds</p>
                            </div>
                        </div>

                        <div class="mx-auto max-w-4xl rounded-[3rem] bg-slate-100 p-1 shadow-[0_25px_80px_rgba(15,23,42,0.1)]">
                            <div class="relative overflow-hidden rounded-[3rem] bg-sky-100">
                                <div id="fundraising-fill" class="absolute inset-y-0 left-0 w-[64%] bg-slate-900 transition-[width] duration-500"></div>
                                <div class="relative grid h-full grid-cols-[1.3fr_1fr] items-center px-10 py-14 text-white">
                                    <div class="text-center">
                                        <p class="text-sm uppercase tracking-[0.75em] text-slate-200">Fund Raised</p>
                                        <div class="mt-3 flex items-end justify-center gap-3 text-5xl font-bold tracking-tight sm:text-6xl">
                                            <span class="text-base font-medium text-slate-200">RM</span>
                                            <span id="progress-current" class="text-white">490,001.53</span>
                                        </div>
                                        <p class="mt-4 text-sm text-slate-200/80">Fundraising Goal: <span id="progress-goal" class="font-semibold text-white">RM 759,801.00</span></p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center gap-4 rounded-[2rem] bg-sky-100/80 p-6 text-center shadow-inner md:ml-auto">
                                        <p class="text-sm uppercase tracking-[0.45em] text-slate-600">Progress</p>
                                        <p id="progress-percent" class="text-4xl font-semibold text-slate-950">64%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-8 xl:items-start">
                        <button data-category="accident" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/accident.png') }}" alt="Accident" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">Accident</span>
                        </button>

                        <button data-category="support" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/support.png') }}" alt="Student Support" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">Student Support</span>
                        </button>

                        <button data-category="lastmes" type="button" class="category-item group relative flex h-44 w-44 items-center justify-center rounded-full border-8 border-sky-300/80 bg-white p-1 shadow-[0_20px_45px_rgba(15,23,42,0.16)] transition-transform duration-300 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-sky-200">
                            <img src="{{ asset('assets/lastmes.png') }}" alt="Last Message" class="h-full w-full rounded-full object-cover" />
                            <span class="pointer-events-none absolute inset-x-0 bottom-0 mx-auto mb-3 hidden rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-lg transition-opacity duration-300 group-hover:block">Last Message</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DONATION SECTION -->
    <section class="max-w-6xl mx-auto px-6 -mt-16">
        <div class="bg-white rounded-3xl shadow-sm p-10">

            <!-- Title -->
            <div class="text-center mb-10">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center">
                        ❤️
                    </div>
                </div>

                <h3 class="text-3xl font-bold mb-3">
                    Crisis Cases Open for Donation
                </h3>

                <p class="text-gray-600 max-w-3xl mx-auto">
                    Support verified students and families in crisis. All cases have been verified by our staff
                    and all donations are tracked transparently on the blockchain.
                </p>
            </div>

            <!-- STATS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Active Cases -->
                <div class="border rounded-2xl p-6 flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Active Cases</p>
                        <p class="text-3xl font-bold mt-1">4</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center">
                        !
                    </div>
                </div>

                <!-- Total Raised -->
                <div class="border rounded-2xl p-6 flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Raised</p>
                        <p class="text-3xl font-bold mt-1">RM 95,050.00</p>
                    </div>
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">
                        ↗
                    </div>
                </div>

                <!-- Total Donors -->
                <div class="border rounded-2xl p-6 flex items-center justify-between">
                    <div>
                        <p class="text-gray-500 text-sm">Total Donors</p>
                        <p class="text-3xl font-bold mt-1">342</p>
                    </div>
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center">
                        ❤
                    </div>
                </div>
            </div>

            <!-- card  -->
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">

                <!-- CARD 1 -->
                <div class="bg-white rounded-3xl border p-8 flex flex-col gap-6">

                    <!-- Badges -->
                    <div class="flex items-center justify-between">
                        <span class="px-4 py-1 text-sm rounded-full bg-red-100 text-red-600 font-medium">
                            Critical Priority
                        </span>
                        <span class="px-4 py-1 text-sm rounded-full bg-green-100 text-green-600 font-medium">
                            Verified ✓
                        </span>
                    </div>

                    <!-- Title -->
                    <div>
                        <h3 class="text-xl font-semibold">Severe Accident</h3>
                        <p class="text-gray-500 text-lg">Medical Emergency</p>
                    </div>

                    <!-- Meta -->
                    <div class="flex items-center gap-4 text-gray-600 text-sm">
                        <div class="flex items-center gap-2">
                            👤 <span>STU-2024-1234</span>
                        </div>
                        <div class="flex items-center gap-2">
                            📅 <span>15/12/2024</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-700 leading-relaxed">
                        Student involved in severe motorcycle accident. Currently in ICU with multiple injuries
                        requiring urgent medical procedures and extended hospitalization.
                    </p>

                    <!-- Raised -->
                    <div class="flex items-center justify-between font-medium">
                        <span>RM 32,500.00 raised</span>
                        <span>65%</span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-2 rounded-full bg-gray-200 overflow-hidden">
                        <div class="h-full bg-black" style="width:65%"></div>
                    </div>

                    <!-- Target -->
                    <div class="flex items-center justify-between text-gray-600 text-sm">
                        <span>Target: RM 50,000.00</span>
                        <span>127 donors</span>
                    </div>

                    <!-- Button -->
                    <button
                        class="mt-4 w-full bg-gradient-to-r from-black to-gray-800 text-white py-4 rounded-xl
                   flex items-center justify-center gap-3 text-lg font-medium hover:opacity-90 transition">
                        ♡ Donate Now →
                    </button>
                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-3xl border p-8 flex flex-col gap-6">

                    <!-- Badges -->
                    <div class="flex items-center justify-between">
                        <span class="px-4 py-1 text-sm rounded-full bg-orange-100 text-orange-600 font-medium">
                            High Priority
                        </span>
                        <span class="px-4 py-1 text-sm rounded-full bg-green-100 text-green-600 font-medium">
                            Verified ✓
                        </span>
                    </div>

                    <!-- Title -->
                    <div>
                        <h3 class="text-xl font-semibold">Family Bereavement</h3>
                        <p class="text-gray-500 text-lg">Bereavement Support</p>
                    </div>

                    <!-- Meta -->
                    <div class="flex items-center gap-4 text-gray-600 text-sm">
                        <div class="flex items-center gap-2">
                            👤 <span>STU-2024-5678</span>
                        </div>
                        <div class="flex items-center gap-2">
                            📅 <span>18/12/2024</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-700 leading-relaxed">
                        Student's parent passed away unexpectedly. Family facing financial hardship
                        for funeral expenses and ongoing educational support.
                    </p>

                    <!-- Raised -->
                    <div class="flex items-center justify-between font-medium">
                        <span>RM 28,750.00 raised</span>
                        <span>96%</span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-2 rounded-full bg-gray-200 overflow-hidden">
                        <div class="h-full bg-black" style="width:96%"></div>
                    </div>

                    <!-- Target -->
                    <div class="flex items-center justify-between text-gray-600 text-sm">
                        <span>Target: RM 30,000.00</span>
                        <span>95 donors</span>
                    </div>

                    <!-- Button -->
                    <button
                        class="mt-4 w-full bg-gradient-to-r from-black to-gray-800 text-white py-4 rounded-xl
                   flex items-center justify-center gap-3 text-lg font-medium hover:opacity-90 transition">
                        ♡ Donate Now →
                    </button>
                </div>

                   <!-- CARD 1 -->
                <div class="bg-white rounded-3xl border p-8 flex flex-col gap-6">

                    <!-- Badges -->
                    <div class="flex items-center justify-between">
                        <span class="px-4 py-1 text-sm rounded-full bg-red-100 text-red-600 font-medium">
                            Critical Priority
                        </span>
                        <span class="px-4 py-1 text-sm rounded-full bg-green-100 text-green-600 font-medium">
                            Verified ✓
                        </span>
                    </div>

                    <!-- Title -->
                    <div>
                        <h3 class="text-xl font-semibold">Severe Accident</h3>
                        <p class="text-gray-500 text-lg">Medical Emergency</p>
                    </div>

                    <!-- Meta -->
                    <div class="flex items-center gap-4 text-gray-600 text-sm">
                        <div class="flex items-center gap-2">
                            👤 <span>STU-2024-1234</span>
                        </div>
                        <div class="flex items-center gap-2">
                            📅 <span>15/12/2024</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-700 leading-relaxed">
                        Student involved in severe motorcycle accident. Currently in ICU with multiple injuries
                        requiring urgent medical procedures and extended hospitalization.
                    </p>

                    <!-- Raised -->
                    <div class="flex items-center justify-between font-medium">
                        <span>RM 32,500.00 raised</span>
                        <span>65%</span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-2 rounded-full bg-gray-200 overflow-hidden">
                        <div class="h-full bg-black" style="width:65%"></div>
                    </div>

                    <!-- Target -->
                    <div class="flex items-center justify-between text-gray-600 text-sm">
                        <span>Target: RM 50,000.00</span>
                        <span>127 donors</span>
                    </div>

                    <!-- Button -->
                    <button
                        class="mt-4 w-full bg-gradient-to-r from-black to-gray-800 text-white py-4 rounded-xl
                   flex items-center justify-center gap-3 text-lg font-medium hover:opacity-90 transition">
                        ♡ Donate Now →
                    </button>
                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-3xl border p-8 flex flex-col gap-6">

                    <!-- Badges -->
                    <div class="flex items-center justify-between">
                        <span class="px-4 py-1 text-sm rounded-full bg-orange-100 text-orange-600 font-medium">
                            High Priority
                        </span>
                        <span class="px-4 py-1 text-sm rounded-full bg-green-100 text-green-600 font-medium">
                            Verified ✓
                        </span>
                    </div>

                    <!-- Title -->
                    <div>
                        <h3 class="text-xl font-semibold">Family Bereavement</h3>
                        <p class="text-gray-500 text-lg">Bereavement Support</p>
                    </div>

                    <!-- Meta -->
                    <div class="flex items-center gap-4 text-gray-600 text-sm">
                        <div class="flex items-center gap-2">
                            👤 <span>STU-2024-5678</span>
                        </div>
                        <div class="flex items-center gap-2">
                            📅 <span>18/12/2024</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-700 leading-relaxed">
                        Student's parent passed away unexpectedly. Family facing financial hardship
                        for funeral expenses and ongoing educational support.
                    </p>

                    <!-- Raised -->
                    <div class="flex items-center justify-between font-medium">
                        <span>RM 28,750.00 raised</span>
                        <span>96%</span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="w-full h-2 rounded-full bg-gray-200 overflow-hidden">
                        <div class="h-full bg-black" style="width:96%"></div>
                    </div>

                    <!-- Target -->
                    <div class="flex items-center justify-between text-gray-600 text-sm">
                        <span>Target: RM 30,000.00</span>
                        <span>95 donors</span>
                    </div>

                    <!-- Button -->
                    <button
                        class="mt-4 w-full bg-gradient-to-r from-black to-gray-800 text-white py-4 rounded-xl
                   flex items-center justify-center gap-3 text-lg font-medium hover:opacity-90 transition">
                        ♡ Donate Now →
                    </button>
                </div>

            </div>
        </div>



    </section>

    <script>
        const categoryData = {
            accident: {
                label: 'Accident',
                current: '490,001.53',
                goal: '759,801.00',
                percent: 64,
            },
            coma: {
                label: 'Coma',
                current: '374,802.44',
                goal: '759,801.00',
                percent: 49,
            },
            flood: {
                label: 'Flood',
                current: '403,216.90',
                goal: '759,801.00',
                percent: 53,
            },
            housefire: {
                label: 'House Fire',
                current: '312,456.12',
                goal: '759,801.00',
                percent: 41,
            },
            support: {
                label: 'Student Support',
                current: '365,990.75',
                goal: '759,801.00',
                percent: 48,
            },
            lastmes: {
                label: 'Last Message',
                current: '248,690.62',
                goal: '759,801.00',
                percent: 33,
            },
        };

        const buttons = document.querySelectorAll('.category-item');
        const progressCurrent = document.getElementById('progress-current');
        const progressGoal = document.getElementById('progress-goal');
        const progressPercent = document.getElementById('progress-percent');
        const progressBar = document.getElementById('fundraising-fill');

        function updateCategory(category) {
            const data = categoryData[category];
            if (!data) return;

            progressCurrent.textContent = data.current;
            progressGoal.textContent = data.goal;
            progressPercent.textContent = `${data.percent}%`;
            progressBar.style.width = `${data.percent}%`;

            buttons.forEach(btn => {
                const active = btn.dataset.category === category;
                btn.classList.toggle('scale-105', active);
                btn.classList.toggle('ring-4', active);
                btn.classList.toggle('ring-sky-300/60', active);
                if (active) {
                    btn.classList.add('shadow-[0_25px_70px_rgba(2,132,199,0.18)]');
                } else {
                    btn.classList.remove('shadow-[0_25px_70px_rgba(2,132,199,0.18)]');
                }
            });
        }

        buttons.forEach(btn => {
            btn.addEventListener('click', () => updateCategory(btn.dataset.category));
            btn.addEventListener('keydown', event => {
                if (event.key === 'Enter' || event.key === ' ') {
                    event.preventDefault();
                    updateCategory(btn.dataset.category);
                }
            });
        });

        updateCategory('accident');
    </script>

</body>

</html>
