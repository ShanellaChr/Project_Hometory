<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hometory</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    
    <p class=" text-4xl montserrat-bold m-5 mb-0">Helo, <span class="text-orenyedija">Good Afternoon!</span></p>
    <p class=" text-2xl montserrat-bold ms-5">__________________</p>

    <p class=" montserrat-semibold text-2xl m-5">Article List</p>

    <div class="" style="margin:5vw">

        <div class="row" style="">
{{-- 
            <div class="col-6 p-3 bg-white article-card d-flex justify-content-between align-items-start shadow rounded-2">
                <div>
                    <div class="fw-semibold">Sistem Inventory Sederhana untuk Kebutuhan Rumah Tangga</div>
                    <div class="text-muted small">2 days ago</div>
                </div>
                <i class="bi bi-trash delete-icon"></i>
            </div>

                <div class="shadow rounded-3 col-6 p-3 bg-white article-card d-flex justify-content-between align-items-start">
                    <div>
                        <div class="fw-semibold">Sistem Inventory Sederhana untuk Kebutuhan Rumah Tangga</div>
                        <div class="text-muted small">2 days ago</div>
                    </div>
                    <i class="bi bi-trash delete-icon"></i>
                </div> --}}

            <div class="col-6">
                <div class="p-3 bg-white d-flex justify-content-between align-items-start shadow">
                    <div>
                        <div class="fw-semibold">Sistem Inventory Sederhana untuk Kebutuhan Rumah Tangga</div>
                        <div class="text-muted small">2 days ago</div>
                    </div>
                    <i class="bi bi-trash delete-icon"></i>
                </div>
            </div>

            <div class="col-6">
                <div class="p-3 bg-white d-flex justify-content-between align-items-start shadow">
                    <div>
                        <div class="fw-semibold">Sistem Inventory Sederhana untuk Kebutuhan Rumah Tangga</div>
                        <div class="text-muted small">2 days ago</div>
                    </div>
                    <i class="bi bi-trash delete-icon"></i>
                </div>
            </div>

            
            <!-- Ulangi col-md-6 di atas sesuai jumlah artikel -->
            <!-- Bisa copy-paste 6x sesuai gambar -->
        </div>

    </div>

</div>


</body>
</html>
