<x-filament-panels::page>

<div class="min-h-screen bg-slate-50 text-slate-800">

    <!-- Header -->
    <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-xl font-semibold text-slate-700">
                Student Legacy Dashboard
            </h1>
            <span class="text-sm text-slate-500">
                Role: Next of Kin
            </span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-6 py-10 space-y-8">

        <!-- Student Summary -->
        <section class="bg-white rounded-xl shadow-sm p-6">
            @if($this->student)
            <div class="flex items-center gap-6">
                <div class="h-16 w-16 rounded-full bg-slate-200 flex items-center justify-center text-xl font-semibold">
                    {{ strtoupper(substr($this->student->Last_Name ?? 'S', 0, 1)) }}
                </div>
                <div>
                    <h2 class="text-lg font-semibold">
                        {{ trim(($this->student->First_Name ?? '') . ' ' . $this->student->Last_Name) }}
                    </h2>
                    <p class="text-sm text-slate-500">Student ID: {{ $this->student->Student_id }}</p>
                    <p class="text-sm text-slate-500">Status: {{ $this->student->Status ?? 'N/A' }}</p>
                </div>
            </div>
            @else
            <p class="text-sm text-slate-500">No student linked to this account.</p>
            @endif
        </section>

        <!-- Crisis Reporting + Death Confirmation (side by side) -->
        <div class="grid md:grid-cols-2 gap-6">

            <!-- Crisis Reporting -->
            <section class="bg-white rounded-2xl shadow-sm p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-start gap-4 mb-6">
                        <div class="bg-orange-100 p-4 rounded-2xl">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">Crisis Reporting & Notifications</h2>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Report accidents, illness, or emergencies regarding the student. Your report will be securely verified and processed by university staff.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 rounded-xl font-medium transition-colors">
                    Report Crisis
                </button>
            </section>

            <!-- Death Confirmation -->
            <section class="bg-red-50 border border-red-200 rounded-2xl shadow-sm p-8 flex flex-col justify-between">
                <div>
                    <div class="flex items-start gap-4 mb-6">
                        <div class="bg-red-100 p-4 rounded-2xl">
                            <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-red-700 mb-2">Death Confirmation</h2>
                            <p class="text-red-600 leading-relaxed text-sm">
                                This action is sensitive and irreversible. Please confirm only if the student has legally passed away. Requires legal documentation verification.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-medium transition-colors">
                    Confirm Death
                </button>
            </section>

        </div>

        <!-- Encrypted Legacy Content -->
        <section class="space-y-4">
            <h3 class="text-lg font-semibold text-slate-700">
                Encrypted Legacy Content
            </h3>

            <!-- Message -->
            <div class="bg-white rounded-xl shadow-sm p-6 flex justify-between items-center">
                <div>
                    <h4 class="font-medium">Final Message</h4>
                    <p class="text-sm text-slate-500">
                        Encrypted personal message from the student
                    </p>
                </div>
                <button class="px-4 py-2 rounded-lg bg-slate-700 text-white text-sm hover:bg-slate-800">
                    Decrypt & View
                </button>
            </div>

            <!-- Media -->
            <div class="bg-white rounded-xl shadow-sm p-6 flex justify-between items-center">
                <div>
                    <h4 class="font-medium">Media Gallery</h4>
                    <p class="text-sm text-slate-500">
                        Photos and videos preserved securely
                    </p>
                </div>
                <button class="px-4 py-2 rounded-lg bg-slate-700 text-white text-sm hover:bg-slate-800">
                    Unlock Media
                </button>
            </div>

            <!-- Audio -->
            <div class="bg-white rounded-xl shadow-sm p-6 flex justify-between items-center">
                <div>
                    <h4 class="font-medium">Audio Recording</h4>
                    <p class="text-sm text-slate-500">
                        Voice messages left by the student
                    </p>
                </div>
                <button class="px-4 py-2 rounded-lg bg-slate-700 text-white text-sm hover:bg-slate-800">
                    Play Audio
                </button>
            </div>
        </section>

        <!-- Consent Reminder -->
        <section class="bg-slate-100 rounded-xl p-6 text-sm text-slate-600">
            <p>
                All legacy content is encrypted and accessible only to verified next of kin,
                in accordance with the student’s prior consent and data protection laws.
            </p>
        </section>

    </main>

</div>
</x-filament-panels::page>
