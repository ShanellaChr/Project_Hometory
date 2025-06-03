<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Statistic --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Statistic</span></div>

    {{-- Slogan My Statistic --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Track your storage, plan smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- Tabel Statistik --}}
    <div class = "container mt-0">
        {{-- Header Tabel --}}
        <div class="d-flex justify-content-between align-items-center text-white p-4 rounded-4 position-relative" style="background-color: #364156; z-index: 2;">
            <button class="btn btn-sm text-white montserrat-semibold fs-5">&lt; April</button>
            <h4 class="m-0 montserrat-bold fs-2">May 2025</h4>
            <button class="btn btn-sm text-white-50 montserrat-semibold border-0 disabled fs-5">June &gt;</button>
        </div>
        {{-- End Header Tabel --}}
        
        {{-- Main Content --}}
        <div class="rounded-bottom-4 shadow-lg p-4" style="background: linear-gradient(to bottom, #FFCE93, #EEA144); margin-top: -0.85vw;">
            <div class="row m-4">
                {{-- PIE CHART --}}
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <canvas id="inventoryPieChart" style="width:100%; max-width:38vw"></canvas>
                </div>

                {{-- DESKRIPSI --}}
                <div class="col-md-6">
                    <div class="row g-3">
                        {{-- Card 1 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Personal Care</strong>
                                <div class="text-purple text-4xl fw-bold nunito-extrabold">21%</div>
                                <p class="nunito-reguler text-xs">Makeup, body care, hair care, and others.</p>
                            </div>
                        </div>
                        {{-- Card 2 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Foods</strong>
                                <div class="text-danger text-4xl fw-bold nunito-extrabold">17.8%</div>
                                <p class="nunito-reguler text-xs">Instant foods, snacks, canned foods, and others.</p>
                            </div>
                        </div>
                        {{-- Card 3 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Beverages</strong>
                                <div class="text-primary text-4xl fw-bold nunito-extrabold">15.4%</div>
                                <p class="nunito-reguler text-xs">Dairy products, soft drinks, and others.</p>
                            </div>
                        </div>
                        {{-- Card 4 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Kitchen Needs</strong>
                                <div class="text-warning text-4xl fw-bold nunito-extrabold">22.8%</div>
                                <p class="nunito-reguler text-xs">Spices, cooking tools, baking ingredients, etc.</p>
                            </div>
                        </div>
                        {{-- Card 5 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Household Essentials</strong>
                                <div class="text-success text-4xl fw-bold nunito-extrabold">12.5%</div>
                                <p class="nunito-reguler text-xs">Cleaning, home supplies, air fresheners, etc.</p>
                            </div>
                        </div>
                        {{-- Card 6 --}}
                        <div class="col-6">
                            <div class="bg-ijomuda_bgstat rounded-5 p-3 shadow-lg h-100 text-center">
                                <strong class="montserrat-semibold text-xl">Health Supplies</strong>
                                <div class="text-danger text-4xl fw-bold nunito-extrabold">10.5%</div>
                                <p class="nunito-reguler text-xs">Medicines, vitamins, hygiene products, etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Note --}}
            <div class="mt-4 text-black fs-6 nunito-semibold m-4">
                <strong>Note:</strong><br>
                • Statistics are based only on data recorded by users this month<br>
                • Please make sure that used or discarded items are updated for accurate results.
            </div>
        </div>
    </div>
    {{-- END OF TABEL STATISTIK --}}

    {{-- Script Chart --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Load images
        const segmentImages = [
            { src: '/img/Personal_Care.svg', img: new Image() },
            { src: '/img/Foods.svg', img: new Image() },
            { src: '/img/Beverages.svg', img: new Image() },
            { src: '/img/Kitchen_Needs.svg', img: new Image() },
            { src: '/img/Household_Essentials.svg', img: new Image() },
            { src: '/img/Health_Supplies.svg', img: new Image() }
        ];

        segmentImages.forEach(item => item.img.src = item.src);

        const segmentImagePlugin = {
            id: 'segmentImagePlugin',
            afterDatasetDraw(chart, args) {
                const { ctx } = chart;
                const dataset = args.meta.data;

                dataset.forEach((arc, index) => {
                    const angle = (arc.startAngle + arc.endAngle) / 2;
                    const radius = (arc.outerRadius + arc.innerRadius) / 2;
                    const x = arc.x + Math.cos(angle) * radius;
                    const y = arc.y + Math.sin(angle) * radius;

                    const img = segmentImages[index]?.img;
                    if (img && img.complete) {
                        ctx.save();
                        ctx.drawImage(img, x - 40, y - 40, 80, 80);
                        ctx.restore();
                    }
                });
            }
        };

        // Inisialisasi Chart
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('inventoryPieChart').getContext('2d');
            function getCssColor(variable) {
                return getComputedStyle(document.documentElement).getPropertyValue(variable).trim();
            }
            new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: [
                        'Personal Care', 'Foods', 'Beverages',
                        'Kitchen Needs', 'Household Essentials', 'Health Supplies'
                    ],
                    datasets: [{
                        data: [21, 17.8, 15.4, 22.8, 12.5, 10.5],
                        backgroundColor: [
                            getCssColor('--pinkcategory'),
                            getCssColor('--merahtuacategory'),
                            getCssColor('--birucategory'),
                            getCssColor('--orenpalette'),
                            getCssColor('--ijocategory'),
                            getCssColor('--merahcategory') // atau warna lain yang sesuai
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    cutout: '30%',
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw !== undefined ? context.raw : '';
                                    return `${label}: ${value}%`;
                                }
                            }
                        }
                    },
                    elements: {
                        arc: { borderWidth: 0 }
                    }
                },
                plugins: [segmentImagePlugin]
            });
        });
    </script>
    {{-- END OF SCRIPT CHART --}}

</x-master>