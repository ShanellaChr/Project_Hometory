<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul Article --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">Articles to<span class="ms-3 text-orenyedija">Read</span></div>

    {{-- Slogan Article --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Read more, be smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- div gede, ini untuk nampung semua article --}}
    <div class="container mb-5">
        {{-- div baris pertama, dia yang nampung per tiga tiga artikel --}}
        <div class="container align-items-center d-flex flex-row justify-content">
            {{-- first article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Zero_Waste.svg') }}" alt="Article 1 - Zero Waste">
            </div>
            {{-- second article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Freezing_Food.svg') }}" alt="Article 2 - Freezing Food">
            </div>
            {{-- third article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Storage.svg') }}" alt="Article 3 - Storage">
            </div>
        </div>

        {{-- div untuk teks article baris pertama --}}
        <div class="container d-flex  mb-4">
            <div class="container col-3 ">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Mengenal Konsep Zero Waste dalam Rumah Tangga</p>
            </div>
            <div class="container col-3">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Panduan Membekukan Makanan yang Benar untuk Mengurangi Food Waste</p>
            </div>
            <div class="container col-3">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Sistem Inventory Sederhana untuk Kebutuhan Rumah Tangga</p>
            </div>
        </div>

        {{-- untuk tanggal rilis --}}
        <div class="container d-flex mb-4">
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
        </div>


        {{-- div baris kedua, dia yang nampung per tiga tiga artikel --}}
        <div class="container align-items-center d-flex flex-row justify-content">
            {{-- fourth article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Purchase_No_Waste.svg') }}" alt="Article 4 - Purchase No Waste">
            </div>
            {{-- fifth article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Create_Compost.svg') }}" alt="Article 5 - Create Compost">
            </div>
            {{-- sixth article --}}
            <div class="container col-4">
                {{-- image dari thumbnail dalam articles --}}
                <img src="{{ asset('img/Article_Choose_Quality_Label.svg') }}" alt="Article 6 - Choose Quality Label">
            </div>
        </div>

        {{-- div untuk teks article baris kedua --}}
        <div class="container d-flex  mb-4">
            <div class="container col-3 ">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Tips Berbelanja Bahan Makanan Tanpa Pemborosan</p>
            </div>
            <div class="container col-3">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Panduan Membuat Kompos dari Sisa Makanan</p>
            </div>
            <div class="container col-3">
                {{-- replace dengan kolom title di tabel articles --}}
                <p class="nunito-extrabold text-xl">Cara Memilih Produk Private Label yang Berkualitas</p>
            </div>
        </div>

        {{-- untuk tanggal rilis --}}
        <div class="container d-flex mb-4">
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
            <div class="container col-3 ">
                {{-- ambil dari database articles created_at --}}
                <p class="poppins-medium text-lg">tanggal</p>
            </div>
        </div>
    </div>
</x-master>