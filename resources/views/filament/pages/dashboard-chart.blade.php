<x-filament-panels::page>


    <!-- Content -->
<main class="px-8 py-6">

    <!-- Filters -->
    <div class="flex flex-wrap items-center gap-4 mb-6">
        <div class="text-gray-500">
            Viewing: <span class="text-red-600 font-semibold">BICS1305 - 2</span>
        </div>

        <div class="flex gap-2">
            <button class="px-4 py-1.5 rounded bg-red-600 text-white font-medium">BICS1305</button>
            <button class="px-4 py-1.5 rounded bg-white shadow text-gray-600">BICS2301</button>
            <button class="px-4 py-1.5 rounded bg-white shadow text-gray-600">INFO214</button>
        </div>

        <div class="ml-auto flex gap-3">
            <select class="px-4 py-2 rounded shadow bg-white">
                <option>All Time</option>
            </select>
            <button class="px-4 py-2 rounded shadow bg-white flex items-center gap-2">⬇ CSV</button>
            <button class="px-4 py-2 rounded shadow bg-white flex items-center gap-2">⬇ PDF Report</button>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="grid grid-cols-4 gap-6 mb-6">

        <!-- Average Donations -->
        <div class="rounded-xl shadow bg-white overflow-hidden">
            <div class="bg-red-600 text-white px-5 py-3 font-semibold flex items-center gap-2">
                ❤️ Average Donations
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold">81%</div>
                <div class="text-gray-400">Target 90%</div>
            </div>
        </div>

        <!-- Student Cases -->
        <div class="rounded-xl shadow bg-white overflow-hidden">
            <div class="bg-blue-600 text-white px-5 py-3 font-semibold flex items-center gap-2">
                👥 Student Cases
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold">91%</div>
                <div class="text-gray-400">Ongoing & New</div>
            </div>
        </div>

        <!-- Total Deaths -->
        <div class="rounded-xl shadow bg-white overflow-hidden">
            <div class="bg-red-600 text-white px-5 py-3 font-semibold flex items-center gap-2">
                ☠️ Total Deaths
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold">3</div>
                <div class="text-gray-400">Active Students</div>
            </div>
        </div>

        <!-- Weekly Trend -->
        <div class="rounded-xl shadow bg-white overflow-hidden">
            <div class="bg-blue-600 text-white px-5 py-3 font-semibold flex items-center gap-2">
                📈 Weekly Trend
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold text-green-600">+25%</div>
                <div class="text-gray-400">vs last week</div>
            </div>
        </div>

    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-3 gap-6">

        <!-- Donation Trend -->
        <div class="col-span-2 rounded-xl shadow bg-white p-6">
            <h3 class="font-semibold text-lg mb-4">
                <span class="text-red-600">Donation Trend</span> – This Month
            </h3>

            <!-- Fake chart (pixel-style) -->
           
                    <div class="relative h-80"> <canvas id="attendanceChart"></canvas> </div>
                    <div class="mt-4 flex items-center justify-center">
                        <div class="flex items-center space-x-4 text-sm">
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-teal-500 rounded-full mr-2"></div> <span class="text-gray-600">Donation</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-3 h-3 bg-gray-300 rounded-full mr-2"></div> <span class="text-gray-600">Goal (90%)</span>
                            </div>
                        </div>
                    </div>
        </div>

        <!-- At-Risk Summary -->
        <div class="rounded-xl shadow bg-white p-6">
            <h3 class="font-semibold text-lg mb-4">At-Risk Summary</h3>

            <div class="space-y-5">
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-red-600 font-medium">Death (6+)</span>
                        <span class="font-semibold">0</span>
                    </div>
                    <div class="h-3 rounded bg-red-100">
                        <div class="h-3 rounded bg-red-600 w-0"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-orange-500 font-medium">Accidents (3+)</span>
                        <span class="font-semibold">0</span>
                    </div>
                    <div class="h-3 rounded bg-orange-100">
                        <div class="h-3 rounded bg-orange-500 w-1/4"></div>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-red-600 font-medium">Death (6+)</span>
                        <span class="font-semibold">0</span>
                    </div>
                    <div class="h-3 rounded bg-red-100">
                        <div class="h-3 rounded bg-red-600 w-0"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <script>
            // Initialize the attendance trend chart        
            const ctx = document.getElementById('attendanceChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                    datasets: [{
                        label: 'Attendance',
                        data: [75, 78, 72, 100],
                        borderColor: 'red',
                        backgroundColor: 'rgba(239, 68, 68, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4
                    }, {
                        label: 'Goal (90%)',
                        data: [90, 90, 90, 90],
                        borderColor: 'blue',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        }
                    },
                    elements: {
                        point: {
                            radius: 4,
                            hoverRadius: 6
                        }
                    }
                }
            });
        </script>

</main>

</x-filament-panels::page>