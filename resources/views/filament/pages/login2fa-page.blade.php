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

            <!-- Progress Steps -->
            <div class="">
                <div class="flex items-center justify-between mb-8 px-15">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-semibold text-sm">1</div>
                        <span class="text-sm font-medium text-gray-700">Login</span>
                    </div>
                    <div class="flex-1 h-1 bg-green-500 mx-3"></div>
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">2</div>
                        <span class="text-sm font-medium text-gray-700">2FA</span>
                    </div>
                </div>

            </div>

            <!-- 2FA Form -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <!-- Title -->
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-green-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Two-Factor Authentication</h2>
                        <p class="text-sm text-gray-600">Enter the 6-digit code sent to your device</p>
                    </div>
                </div>

                <!-- Demo Code Notice -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                    <div class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-semibold text-blue-900">Demo Code:</p>
                            <p class="text-lg font-bold text-blue-900">123456</p>
                            <p class="text-xs text-blue-700 mt-1">In production, this would be sent to your phone</p>
                        </div>
                    </div>
                </div>

                <!-- Verification Method -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Verification Method</label>
                    <div class="grid grid-cols-2 gap-3">
                        <button wire:click="selectverificationmode('email')" class="px-4 py-3 border-2 
                        
                         transition-colors flex items-center justify-center gap-2
                        
                        {{ $verificationmode === 'email'
                                 ? 'border-green-500 rounded-lg bg-green-50'
                                : 'border-gray-200 rounded-lg hover:border-gray-300' }}
                                
                                ">
                            <svg class="w-5 h-5 {{ $verificationmode === 'email'
                                ? 'text-green-600'
                                : 'text-gray-600' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm font-medium {{ 
                            $verificationmode === 'email'
                                ? 'text-green-700'
                                : 'text-gray-700'
                                
                                }}">Email</span>
                        </button>
                        <button wire:click="selectverificationmode('sms')" class="px-4 py-3 border-2 
                        
                         rounded-lg flex items-center justify-center gap-2
                        
                        {{ $verificationmode === 'sms'
                                ? 'border-green-500 rounded-lg bg-green-50'
                                : 'border-gray-200 rounded-lg hover:border-gray-300' }}
                                
                                ">
                            <svg class="w-5 h-5 
                             {{ $verificationmode === 'sms'
                                ? 'text-green-600'
                                : 'text-gray-600' }}
                                
                                " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm font-medium  {{ 
                            $verificationmode === 'sms'
                                ? 'text-green-700'
                                : 'text-gray-700'
                                
                                }}">SMS</span>
                        </button>
                    </div>
                </div>

                <!-- Code Input -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Enter 6-Digit Code</label>
                    <div class="flex gap-2 justify-between mb-3">
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                        <input type="text" maxlength="1" class="w-12 h-14 text-center text-xl font-semibold border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none" />
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-700">Didn't receive the code? Resend</a>
                </div>

                <!-- Buttons -->
                <button wire:click="verify2fa" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg mb-3 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Verify & Login
                </button>

                <a href="{{ url('/admin/login') }}" class="w-full bg-white hover:bg-gray-50 text-gray-700 font-medium py-3 rounded-lg border border-gray-300 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Login
                </a>
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