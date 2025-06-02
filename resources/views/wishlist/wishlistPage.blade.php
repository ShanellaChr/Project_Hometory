<x-master>
    {{-- Judul My Wishlist--}}
    <div class="d-flex justify-content-center align-items-center pt-7">
        <h3 class="montserrat-bold justify-content-center align-items-center fs-1">My</h3>
        <h3 class="montserrat-bold justify-content-center align-items-center ms-2 fs-1 title-color">Wishlist</h3>
    </div>

    {{-- Slogan My Wishlist --}}
    <div class="nunito-regular d-flex justify-content-center align-items-center">Plan wisely, shop mindfully!</div>

    {{-- Kondisi Kosong --}}
    {{-- Box Wishlist --}}
    <div class="container mt-4 card bg-dark-blue text-white shadow-lg p-4 rounded-4 position-relative" style="background-color: #364156;">

        {{-- Ikon Scroll Heart --}}
        <div class="text-center mb-3 mt-5">
            <img src="{{ asset('img/Wishlist.svg') }}" class="img-fluid" style="width: 17vw; height: auto;">
            <p class="mt-3 fs-4 nunito-semibold">Your Wishlist Is Empty</p>
        </div>

        {{-- Kategori Label --}} 
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-7">
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-personal-care"></div>
                <p class="poppins-semibold">Personal Care</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-foods"></div>
                <p class="poppins-semibold">Foods</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-beverages"></div>
                <p class="poppins-semibold">Beverages</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-kitchen-needs"></div>
                <p class="poppins-semibold">Kitchen Needs</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-household-essentials"></div>
                <p class="poppins-semibold">Household Essentials</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="color-box-wishlist bg-health-supplies"></div>
                <p class="poppins-semibold">Health Supplies</p>
            </div>
        </div>

        {{-- Tombol Tambah --}}
        <div class="position-absolute bottom-0 end-0 m-3">
            <button class="btn btn-orange btn-orange-hover text-black rounded-3 ps-4 pe-4 shadow-lg" style="padding-bottom: 0.8vw; padding-top: 0.8vw; display: flex; align-items: center;">
                <span  class= "nunito-bold">Add Wishlist</span> 
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
            </button>
        </div>
        
    </div>

</x-master>