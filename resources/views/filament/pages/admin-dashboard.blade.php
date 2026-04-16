<x-filament-panels::page>
    
<!-- Main -->
    <main class="max-w-7xl mx-auto px-6 py-8 space-y-8">

        <!-- System Overview -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-sm text-slate-500">Total Students</p>
                <p class="text-2xl font-semibold">1,248</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-sm text-slate-500">Active Crisis Cases</p>
                <p class="text-2xl font-semibold text-amber-600">12</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-sm text-slate-500">Pending Death Verification</p>
                <p class="text-2xl font-semibold text-red-600">3</p>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-sm text-slate-500">Encrypted Legacies Stored</p>
                <p class="text-2xl font-semibold text-emerald-600">96</p>
            </div>
        </section>

        <!-- Student Audit Table -->
        <section class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h2 class="text-lg font-semibold">
                    Student Records Audit
                </h2>
                <p class="text-sm text-slate-500">
                    Review and verify all student-related lifecycle data
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-slate-50 text-slate-600">
                        <tr>
                            <th class="px-4 py-3 text-left">Student</th>
                            <th class="px-4 py-3 text-left">Status</th>
                            <th class="px-4 py-3 text-left">Next of Kin</th>
                            <th class="px-4 py-3 text-left">Death Verified</th>
                            <th class="px-4 py-3 text-left">Legacy Encryption</th>
                            <th class="px-4 py-3 text-left">Last Audit</th>
                            <th class="px-4 py-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">

                        <tr>
                            <td class="px-4 py-3">
                                <p class="font-medium">Aiman Firdaus</p>
                                <p class="text-xs text-slate-500">STU-20491</p>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">
                                    Deceased
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                Nur Hidayah (Mother)
                            </td>
                            <td class="px-4 py-3">
                                <span class="text-emerald-600 font-medium">
                                    Yes
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="text-emerald-600">
                                    Encrypted ✔
                                </span>
                            </td>
                            <td class="px-4 py-3 text-slate-500">
                                12 Dec 2025
                            </td>
                            <td class="px-4 py-3">
                                <button class="text-blue-600 hover:underline">
                                    Review
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-3">
                                <p class="font-medium">Siti Aisyah</p>
                                <p class="text-xs text-slate-500">STU-21783</p>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded bg-amber-100 text-amber-700">
                                    Crisis
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                —
                            </td>
                            <td class="px-4 py-3 text-slate-400">
                                N/A
                            </td>
                            <td class="px-4 py-3 text-slate-400">
                                Locked
                            </td>
                            <td class="px-4 py-3 text-slate-500">
                                18 Dec 2025
                            </td>
                            <td class="px-4 py-3">
                                <button class="text-blue-600 hover:underline">
                                    Monitor
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>

        <!-- Compliance & Ethics -->
        <section class="bg-slate-50 border border-slate-200 rounded-xl p-6">
            <h3 class="font-semibold text-slate-700 mb-2">
                Compliance & Ethical Safeguards
            </h3>
            <ul class="text-sm text-slate-600 space-y-1 list-disc list-inside">
                <li>All legacy data is end-to-end encrypted</li>
                <li>Next-of-kin access requires administrator verification</li>
                <li>Every action is logged with timestamp and administrator ID</li>
                <li>No legacy content is visible to administrators</li>
            </ul>
        </section>

    </main>
</x-filament-panels::page>
