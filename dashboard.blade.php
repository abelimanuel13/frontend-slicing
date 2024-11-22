@extends('layout.master')
@section('content')
    {{-- Chart CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <main class="content flex flex-col items-center bg-slate-100 pt-[3.85rem] pl-[12rem]">
        {{-- Header --}}
        <section class="bg-white w-full">
            <div class="w-full px-4 sm:px-6 lg:px-8 py-8 border-2 shadow-sm">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    {{-- Foto --}}
                    <img src="{{ asset('storage/pengguna.jpg') }}" alt="User Photo" class="w-20 h-20 border-2 rounded-full" />
                    <div class="flex-1">
                        <h1 class="text-2xl font-bold text-sky-500 sm:text-lg">YOHANNES AFFANDY (JOJO)</h1>
                        <!-- Konten Kolom Kiri dan Kanan -->
                        <div class="flex flex-col md:flex-row gap-4 md:gap-6 mt-6">
                            <!-- Kolom Kiri -->
                            <div class="flex flex-col gap-4 md:mr-2">
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-6 h-6 bg-sky-200 rounded-full">
                                        <i class="fa-solid fa-building text-sky-500"></i>
                                    </span>
                                    <p class="text-md font-semibold text-black sm:text-sm">
                                        Loan Market Office Dev
                                    </p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-6 h-6 bg-sky-200 rounded-full">
                                        <i class="fa-solid fa-hashtag text-sky-500"></i>
                                    </span>
                                    <p class="text-md font-semibold text-black sm:text-sm">
                                        LM9990001
                                    </p>
                                </div>
                            </div>
                            <!-- Garis Tengah -->
                            <div class="hidden md:block border-l h-auto border-gray-300 mx-1"></div>
                            <!-- Kolom Kanan -->
                            <div class="flex flex-col gap-4 flex-1 md:ml-2">
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-6 h-6 bg-sky-200 rounded-full">
                                        <i class="fa-solid fa-envelope text-sky-500"></i>
                                    </span>
                                    <p class="text-md font-semibold text-black sm:text-sm">
                                        it@loanmarket.co.id
                                    </p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="flex items-center justify-center w-6 h-6 bg-sky-200 rounded-full">
                                        <i class="fa-solid fa-phone text-sky-500"></i>
                                    </span>
                                    <p class="text-md font-semibold text-black sm:text-sm">
                                        6281234567890
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Item Dashboard 1 -->
        <section>
            <div class="flex mx-10 gap-10 mt-8">
                <!-- Bagian Kiri -->
                <div class="flex flex-col w-2/3 gap-10">
                    <!-- 4 Kartu -->
                    <div class="flex items-center gap-x-10">
                        <div
                            class="w-44 h-24 bg-white rounded-md border shadow-sm flex items-center justify-center gap-x-4">
                            <span class="flex items-center justify-center w-10 h-10 bg-sky-200 text-white rounded-full">
                                <i class="fa-solid fa-id-card text-sky-500"></i>
                            </span>
                            <div class="flex flex-col text-center">
                                <p class="text-md font-semibold text-black">CONTACT</p>
                                <p class="text-xl font-bold text-sky-500">51</p>
                            </div>
                        </div>
                        <div
                            class="w-44 h-24 bg-white rounded-md border shadow-sm flex items-center justify-center gap-x-4">
                            <span class="flex items-center justify-center w-10 h-10 bg-sky-200 text-white rounded-full">
                                <i class="fa-solid fa-file text-sky-500"></i>
                            </span>
                            <div class="flex flex-col text-center">
                                <p class="text-md font-semibold text-black">LOAN</p>
                                <p class="text-xl font-bold text-sky-500">56</p>
                            </div>
                        </div>
                        <div
                            class="w-44 h-24 bg-white rounded-md border shadow-sm flex items-center justify-center gap-x-4">
                            <span class="flex items-center justify-center w-10 h-10 bg-sky-200 text-white rounded-full">
                                <i class="fa-solid fa-shopping-bag text-sky-500"></i>
                            </span>
                            <div class="flex flex-col text-center">
                                <p class="text-md font-semibold text-black">PRODUCT</p>
                                <p class="text-xl font-bold text-sky-500">80</p>
                            </div>
                        </div>
                        <div
                            class="w-44 h-24 bg-white rounded-md border shadow-sm flex items-center justify-center gap-x-4">
                            <span class="flex items-center justify-center w-10 h-10 bg-sky-200 text-white rounded-full">
                                <i class="fa-solid fa-bank text-sky-500"></i>
                            </span>
                            <div class="flex flex-col text-center">
                                <p class="text-md font-semibold text-black">BANK</p>
                                <p class="text-xl font-bold text-sky-500">30</p>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart Card -->
                    <div class="w-full bg-white rounded-md border shadow-sm p-5">
                        <div class="mx-10 my-6 flex justify-between items-center">
                            <div class="relative flex flex-col items-center">
                                <h4 class="font-semibold text-lg text-center mt-2 mb-4">
                                    PINJAMAN DISETUJUI
                                </h4>
                                <div class="relative w-40 h-40">
                                    <canvas id="donutChart1" class="w-full h-full"></canvas>
                                    <p
                                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold">
                                        40%
                                    </p>
                                </div>
                                <p class="font-semibold text-sm text-center mt-4">
                                    2/5 Pinjaman telah disetujui
                                </p>
                            </div>

                            <div class="border-l h-60 border-gray-300 mx-5"></div>

                            <div class="relative flex flex-col items-center">
                                <h4 class="font-semibold text-lg text-center mt-2 mb-4">
                                    TARGET
                                </h4>
                                <div class="relative w-40 h-40">
                                    <canvas id="donutChart2" class="w-full h-full"></canvas>
                                    <p
                                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold">
                                        280%
                                    </p>
                                </div>
                                <p class="font-semibold text-sm text-center mt-4">
                                    Rp14.000.000.000,00 - Rp15.000.000.000,00
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart 2 Card -->
                    <div class="w-full bg-white rounded-md border shadow-sm p-5 mb-10">
                        <h2 class="text-xl font-semibold text-black text-center w-full mb-10">
                            Top 5 Bank Approval Tertinggi
                        </h2>

                        <div class="flex justify-center mb-4">
                            <canvas id="donutChart" width="250" height="250"></canvas>
                        </div>
                        <!-- Desc Label -->
                        <div class="flex justify-center mt-10 space-x-4" id="donut-chart-labels"></div>
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="w-1/3 h-full bg-white rounded-md border shadow-sm p-4">
                    <h4 class="font-semibold text-lg text-left mt-2 mb-4">NOTIFICATIONS</h4>
                    <div class="container max-w-5xl px-4 py-4 mx-auto">
                        <div class="grid gap-4 sm:grid-cols-12">
                            <div class="relative col-span-12 sm:col-span-10 mx-auto">
                                <div class="space-y-12 relative px-4">
                                    <!-- Event 1 -->
                                    <div
                                        class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-sky-500">
                                        <h3 class="text-md font-semibold tracking-wide">
                                            admin_branch has updated
                                        </h3>
                                        <p class="text-[0.85rem] text-gray-500">
                                            Harry Handoko - Contact|MYCRM
                                        </p>
                                    </div>

                                    <!-- Event 2 -->
                                    <div
                                        class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-gray-600">
                                        <h3 class="text-md font-semibold tracking-wide">
                                            admin_branch has updated
                                        </h3>
                                        <p class="text-[0.85rem] text-gray-500">
                                            Harry Handoko - Application|MYCRM
                                        </p>
                                    </div>

                                    <!-- Event 3 -->
                                    <div
                                        class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-sky-500">
                                        <h3 class="text-md font-semibold tracking-wide">
                                            admin_branch has updated
                                        </h3>
                                        <p class="text-[0.85rem] text-gray-500">
                                            Harry Handoko - Application|MYCRM
                                        </p>
                                    </div>

                                    <!-- Event 4 -->
                                    <div
                                        class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-gray-600">
                                        <h3 class="text-md font-semibold tracking-wide">
                                            admin_branch has updated
                                        </h3>
                                        <p class="text-[0.85rem] text-gray-500">
                                            Harry Handoko - Contact|MYCRM
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Donut Chart 1 Script -->
    <script>
        const ctx1 = document.getElementById("donutChart1").getContext("2d");
        const donutChart1 = new Chart(ctx1, {
            type: "doughnut",
            data: {
                labels: ["Sky", "Transparent"],
                datasets: [{
                    data: [40, 60],
                    backgroundColor: ["#38bdf8", "#e5e7eb"],
                    borderWidth: 2,
                    borderColor: "#e5e7eb",
                    hoverOffset: 4,
                }, ],
            },
            options: {
                responsive: true,
                cutout: "70%",
                plugins: {
                    tooltip: {
                        enabled: false,
                    },
                    legend: {
                        display: false,
                    },
                    datalabels: {
                        display: true,
                        color: "#000",
                        font: {
                            weight: "bold",
                            size: 24,
                        },
                        formatter: function(value) {
                            return value + "%";
                        },
                    },
                },
            },
        });

        const ctx2 = document.getElementById("donutChart2").getContext("2d");
        const donutChart2 = new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ["Sky", "Transparent"],
                datasets: [{
                    data: [280],
                    backgroundColor: ["#38bdf8", "transparent"],
                    borderWidth: 2,
                    borderColor: "#e5e7eb",
                    hoverOffset: 4,
                }, ],
            },
            options: {
                responsive: true,
                cutout: "70%",
                plugins: {
                    tooltip: {
                        enabled: false,
                    },
                    legend: {
                        display: false,
                    },
                    datalabels: {
                        display: true,
                        color: "#000",
                        font: {
                            weight: "bold",
                            size: 24,
                        },
                        formatter: function(value) {
                            return value + "%";
                        },
                    },
                },
            },
        });
    </script>

    <!-- Donut Chart 2 Script -->
    <script>
        const ctx = document.getElementById("donutChart").getContext("2d");

        const donutChart = new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["BRI", "Artha Graha", "BTN", "Mandiri", "KEB Hana Bank"],
                datasets: [{
                    data: [30, 25, 20, 15, 10],
                    backgroundColor: [
                        "#4A3764",
                        "#1DF2D6",
                        "#51C4E9",
                        "#146C94",
                        "#6150C1",
                    ],
                    borderWidth: 4,
                    borderColor: "#e5e7eb",
                    hoverOffset: 10,
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: "60%",
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            label: (context) => {
                                const label = context.label || "";
                                const value = context.raw || 0;
                                return `${value}%`;
                            },
                        },
                        backgroundColor: "#333",
                        titleFont: {
                            size: 14,
                            weight: "bold"
                        },
                        bodyFont: {
                            size: 20
                        },
                        cornerRadius: 4,
                    },
                },
            },
        });

        // Dynamically create the labels under the chart
        const labelsContainer = document.getElementById("donut-chart-labels");
        const labels = donutChart.data.labels;
        const colors = donutChart.data.datasets[0].backgroundColor;

        labels.forEach((label, index) => {
            const labelWrapper = document.createElement("div");
            labelWrapper.classList.add("flex", "items-center", "space-x-2");

            const colorBox = document.createElement("div");
            colorBox.classList.add("w-4", "h-4", "rounded-full");
            colorBox.style.backgroundColor = colors[index];

            const labelText = document.createElement("span");
            labelText.classList.add("text-sm", "text-black");
            labelText.textContent = label;

            labelWrapper.appendChild(colorBox);
            labelWrapper.appendChild(labelText);

            labelsContainer.appendChild(labelWrapper);
        });
    </script>

    </html>
@endsection
