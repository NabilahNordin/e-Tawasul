<div class="bg-gray-50 min-h-screen">
    <!-- Back Button -->
    <div class="p-4">
        <a href="{{ url('/admin/welcome') }}" class="inline-flex items-center text-gray-600 hover:text-gray-800">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Welcome
        </a>
    </div>

    <!-- Main Container -->
    <div class="flex justify-center items-start pt-8 px-4">
        <div class="w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8 flex justify-center">
                <img alt="logo" src="{{ url('assets/logo2.png') }}" style="width: 300px;height: auto;" class="fi-logo p-1">
            </div>

            <!-- Login Card -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <!-- Login Header -->
                <div class="flex items-start mb-6">
                    <div class="flex-shrink-0 w-10 h-10 bg-blue-50 rounded-lg flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Login to e-Tawassul</h2>
                        <p class="text-sm text-gray-600">Access your secure account</p>
                    </div>
                </div>

                <!-- Demo Mode Banner -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6" x-data="{ open: true }" x-show="open">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="flex-1" >
                            <p class="text-sm text-blue-900">
                                <span class="font-semibold">Demo Mode:</span> Try the system with these accounts
                                <button class="text-blue-600 hover:text-blue-700 ml-1 text-xs" @click="open = !open">Hide</button>
                            </p>
                            <div class="grid grid-cols-3 gap-2 mt-3">
                                <button class="bg-white border border-blue-200 rounded-lg p-2 text-left hover:border-blue-400 transition-colors">
                                    <div class="text-xs font-semibold text-blue-600">Student</div>
                                    <div class="text-xs text-gray-600 truncate">student@utm...</div>
                                </button>
                                <button class="bg-white border border-pink-200 rounded-lg p-2 text-left hover:border-pink-400 transition-colors">
                                    <div class="text-xs font-semibold text-pink-600">Admin</div>
                                    <div class="text-xs text-gray-600 truncate">admin@utm.my</div>
                                </button>
                                <button class="bg-white border border-green-200 rounded-lg p-2 text-left hover:border-green-400 transition-colors">
                                    <div class="text-xs font-semibold text-green-600">Next of Kin</div>
                                    <div class="text-xs text-gray-600 truncate">Father</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login As Tabs -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Login As</label>
                    <div class="grid grid-cols-3 gap-3">
                        <button wire:click="loginAs('student')" class="flex flex-col items-center justify-center p-4 border-2  transition-colors rounded-lg 
                                {{ $typelogin === 'student'
                                ? 'border-blue-500 bg-blue-50 hover:bg-blue-100'
                                : 'border-gray-200 hover:bg-gray-50' }}">
                            <svg class="w-6 h-6 text-blue-600 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-900">Student</span>
                        </button>
                        <button wire:click="loginAs('admin')" class="flex flex-col items-center justify-center p-4 border-2  transition-colors rounded-lg 
                                {{ $typelogin === 'admin'
                                ? 'border-blue-500 bg-blue-50 hover:bg-blue-100'
                                : 'border-gray-200 hover:bg-gray-50' }}">
                            <svg class="w-6 h-6 text-gray-600 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-900">Admin</span>
                        </button>
                        <button wire:click="loginAs('next-kin')" class="flex flex-col items-center justify-center p-4 border-2 transition-colors rounded-lg 
                                {{ $typelogin === 'next-kin'
                                ? 'border-blue-500 bg-blue-50 hover:bg-blue-100'
                                : 'border-gray-200 hover:bg-gray-50' }}
                                ">
                            <svg class="w-6 h-6 text-gray-600 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-900">Next of Kin</span>
                        </button>
                    </div>
                </div>

                <!-- Login Form -->
                {{ $this->content }}

                <!-- Footer -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">
                            Contact your faculty administrator
                        </a>
                    </p>
                </div>
            </div>

             <!-- Security Info -->
            <div class="bg-white rounded-lg shadow-sm p-6 mt-4">
                <div class="flex items-start gap-2 mb-3">
                    <svg class="w-5 h-5 text-gray-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <h3 class="text-sm font-semibold text-gray-900">Secure Login</h3>
                </div>
                <ul class="space-y-2 text-sm text-gray-600 ml-7">
                    <li>• All connections are encrypted with SSL/TLS</li>
                    <li>• Two-factor authentication required for next of kin</li>
                    <li>• Your credentials are never stored in plain text</li>
                    <li>• Audit trail logs all access attempts</li>
                </ul>
            </div>

        </div>
    </div>
</div>