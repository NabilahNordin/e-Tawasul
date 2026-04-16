<div class="bg-gray-50 text-gray-800">

    <!-- HEADER -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Logo -->
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

            <!-- Login -->
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

    <!-- HERO -->
    <section class="bg-blue-50 py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Supporting Our Student Community
            </h2>

            <p class="text-lg text-gray-600 leading-relaxed">
                A compassionate platform designed to support students through crisis situations and preserve
                their digital legacy with the utmost care and security.
            </p>
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
                   
                        {{ ($this->donatenowAction)(['post' => 1]) }}
                   
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
                       <!-- Button -->
                   
                        {{ ($this->donatenowAction)(['post' => 2]) }}
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
                       <!-- Button -->
                   
                        {{ ($this->donatenowAction)(['post' => 3]) }}
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
                       <!-- Button -->
                   
                        {{ ($this->donatenowAction)(['post' => 4]) }}
                </div>

            </div>
        </div>



    </section>
      <x-filament-actions::modals />
</div>