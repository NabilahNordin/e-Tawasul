<div class="bg-gray-100 flex flex-col items-center justify-center min-h-screen p-4"> <!-- Modal/Card Container -->

    <div class="p-6 border-b border-gray-100">
        <h1 class="text-2xl font-bold text-gray-900 mb-2">Support Severe Accident</h1>
        <div class="flex items-center text-gray-500 text-sm"> <span>Case ID: CRS-2024-001</span> <span class="mx-2">•</span> <span>Verified Crisis Case</span> </div>
    </div> <!-- Details Section -->
    <div class="p-6 space-y-6"> <!-- Student Information Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="flex justify-between items-center"> <span class="text-gray-600 font-medium">Student ID:</span> <span class="text-gray-900 font-semibold">STU-2024-1234</span> </div>
                <div class="flex justify-between items-center"> <span class="text-gray-600 font-medium">Category:</span> <span class="text-gray-900 font-semibold">Medical Emergency</span> </div>
                <div class="flex justify-between items-center"> <span class="text-gray-600 font-medium">Severity:</span> <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold"> Critical </span> </div>
                <div class="flex justify-between items-center"> <span class="text-gray-600 font-medium">Date Reported:</span> <span class="text-gray-900 font-semibold">15/12/2024</span> </div>
            </div>
        </div> <!-- Situation Details -->
        <div class="space-y-3">
            <h2 class="text-lg font-bold text-gray-900">Situation Details</h2>
            <div class="bg-gray-50 p-4 rounded-lg border">
                <p class="text-gray-700 leading-relaxed"> Student involved in severe motorcycle accident. Currently in ICU with multiple injuries requiring urgent medical procedures and extended hospitalization. </p>
            </div>
        </div> <!-- Donation Progress -->
        <div class="space-y-4">
            <h2 class="text-lg font-bold text-gray-900">Donation Progress</h2>
            <div class="flex justify-between items-center"> <span class="text-gray-600 font-medium">Current Amount:</span> <span class="text-2xl font-bold text-gray-900">RM 32,500.00</span> </div> <!-- Progress Bar -->
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-black h-3 rounded-full" style="width: 65%"></div>
            </div>
            <div class="flex justify-between items-center text-sm"> <span class="text-gray-500">Target: RM 50,000.00</span> <span class="text-gray-700 font-semibold">RM 17,500.00 needed</span> </div>
        </div>
    </div>




    <div class="mx-auto bg-white rounded-lg shadow-sm p-6 space-y-6"> <!-- Header -->
        <h1 class="text-2xl font-bold text-gray-900">Make a Donation</h1> <!-- Donation Amount Section -->
        <div class="space-y-4">
            <h2 class="text-lg font-semibold text-gray-900">Donation Amount (RM)</h2> <!-- Custom Amount Input -->
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"> <span class="text-gray-500 text-lg">$</span> </div> <input type="number" class="w-full pl-10 pr-12 py-4 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent" placeholder="Enter amount">
                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none"> <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4"></path>
                    </svg> </div>
            </div> <!-- Preset Amount Buttons -->
            <div class="flex flex-wrap gap-3"> <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"> RM 50 </button> <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"> RM 100 </button> <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"> RM 250 </button> <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"> RM 500 </button> <button class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg border border-gray-300 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 transition-colors"> RM 1000 </button> </div>
        </div> <!-- Optional Message Section -->
        <div class="space-y-4">
            <h2 class="text-lg font-semibold text-gray-900">Optional Message of Support</h2> <textarea class="w-full px-4 py-4 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent resize-none" rows="4" placeholder="Leave a message of encouragement for the student and family..."></textarea>
        </div> <!-- Note Section -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
            <p class="text-yellow-800 text-sm"> <span class="font-semibold">Note:</span> This is a prototype. In production, donations would be processed through secure payment gateways and logged on blockchain for full transparency. </p>
        </div> <!-- Donate Button --> <button class="w-full bg-gray-600 hover:bg-gray-700 text-white font-semibold py-4 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 flex items-center justify-center gap-2"> <!-- Heart Icon --> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
            </svg> Donate </button>
    </div> <!-- JavaScript for preset amount selection -->

</div>