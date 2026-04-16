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
            <div class="flex items-center gap-6">
                <div class="h-16 w-16 rounded-full bg-slate-200 flex items-center justify-center text-xl font-semibold">
                    A
                </div>
                <div>
                    <h2 class="text-lg font-semibold">Aiman Firdaus</h2>
                    <p class="text-sm text-slate-500">Student ID: STU-20491</p>
                    <p class="text-sm text-slate-500">Institution: Universiti Teknologi</p>
                </div>
            </div>
        </section>

        <!-- Death Confirmation -->
        <section class="bg-red-50 border border-red-200 rounded-xl p-6">
            <h3 class="text-lg font-semibold text-red-700 mb-2">
                Death Confirmation
            </h3>

            <p class="text-sm text-red-600 mb-4">
                This action is sensitive and irreversible. Please confirm only if the student has legally passed away.
            </p>

            <div class="flex items-center gap-4">
                <button class="px-5 py-2 rounded-lg bg-red-600 text-white text-sm hover:bg-red-700">
                    Confirm Death
                </button>

                <span class="text-xs text-slate-500">
                    Requires legal documentation verification
                </span>
            </div>
        </section>

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
