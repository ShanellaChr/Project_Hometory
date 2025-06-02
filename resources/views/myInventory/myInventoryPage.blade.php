<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Inventory --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Inventory</span></div>

    {{-- Slogan My Inventory --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Keep your items neatly managed!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- START OF SECTION MY INVENTORY --}}
    <div class="d-flex flex-row bg-merahcategory overflow-hidden w-full">
        {{-- Bagian Kiri (Sidebar) Section START --}}
        <div class="w-1/2 bg-ijocategory min-h-full">
            <h1 class="">TEST</h1>
        </div>
        {{-- Bagian Kiri (Sidebar) END --}}

        {{-- Bagian Kanan (Konten) Start --}}
        <div class="d-flex w-1/2 flex-column bg-pinkcategory">
            <nav class="navbar navbar-expand-lg bg-light border-2">
                <div class="container-fluid">
                    <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            {{-- Card Item --}}
            <div class="rounded-2 bg-light shadow-lg hover:bg-secondary">
                {{-- Gambar Item --}}
                <img src="/img/Personal Care - Default.svg" alt="Personal Care Default">

                {{-- Nama Item --}}
                <p class="nunito-bold text-2xl">Milo 330ml</p>

                {{-- Quantity Item --}}
                <p class="poppins-medium">Item Quantity: 3</p>

                {{-- Expired Item --}}
                <p class="poppins-medium">Expired Date: 05/06/2025</p>
            </div>
        </div>
        {{-- Bagian Kanan (Konten) End --}}
    </div>
    {{-- END OF SECTION MY INVENTORY --}}
</x-master>