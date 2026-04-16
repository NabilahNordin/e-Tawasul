<x-filament-panels::page>

    <div class="bg-gray-50 min-h-screen pt-0 p-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Card -->
            <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                        <h1 class="text-2xl font-semibold text-gray-900">Welcome to e-Tawassul</h1>
                    </div>
                    <a href="{{ url('/admin/profile') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl flex items-center gap-2 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        View Profile
                    </a>
                </div>
                <p class="text-gray-600 text-lg leading-relaxed">
                    A compassionate and secure platform for managing digital legacy messages and crisis reporting. All data is encrypted and handled with the utmost care and privacy.
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Last Digital Message System -->
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="bg-blue-100 p-4 rounded-2xl">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">Last Digital Message System</h2>
                            <p class="text-gray-600 leading-relaxed">
                                Create a secure farewell message (wasiat) to be delivered to designated recipients only upon verified confirmation of death.
                            </p>
                        </div>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-xl font-medium transition-colors">
                        Create Message
                    </button>
                </div>

                <!-- Crisis Reporting & Notifications -->
                <div class="bg-white rounded-2xl shadow-sm p-8">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="bg-orange-100 p-4 rounded-2xl">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">Crisis Reporting & Notifications</h2>
                            <p class="text-gray-600 leading-relaxed">
                                Report accidents, illness, or emergencies. Your report will be securely verified and processed by university staff.
                            </p>
                        </div>
                    </div>
                    <button class="w-full bg-orange-600 hover:bg-orange-700 text-white py-4 rounded-xl font-medium transition-colors">
                        Report Crisis
                    </button>
                </div>


            </div>


            <div class="bg-white rounded-2xl shadow-sm p-8 mt-5">


               
                   
                        <div class="flex items-start gap-4">
                            <svg class="w-6 h-6 text-gray-700 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <div class="flex-1">
                                <h1 class="text-2xl font-semibold text-gray-900 mb-6">Privacy & Security Notice</h1>

                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start gap-3">
                                        <span class="text-blue-600 mt-1">•</span>
                                        <span>All messages and reports are encrypted end-to-end</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-blue-600 mt-1">•</span>
                                        <span>LDMS messages are activated ONLY upon verified death confirmation</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-blue-600 mt-1">•</span>
                                        <span>Crisis reports are handled with strict confidentiality</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-blue-600 mt-1">•</span>
                                        <span>Full compliance with PDPA and GDPR regulations</span>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <span class="text-blue-600 mt-1">•</span>
                                        <span>Audit trail maintained on secure blockchain infrastructure</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                  
             


            </div>
        </div>
    </div>
</x-filament-panels::page>