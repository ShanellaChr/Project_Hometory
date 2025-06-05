<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Wishlist --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Wishlist</span></div>

    {{-- Slogan My Wishlist --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Plan wisely, shop mindfully!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- Box Wishlist --}}
    <div class="container mt-0 card bg-dark-blue text-white shadow-lg p-3 rounded-4 position-relative bg-abupalette">
        
        {{-- Kondisi Kosong --}}
        {{-- <div class="text-center mb-3 mt-5">
            <img src="{{ asset('img/Wishlist.svg') }}" class="img-fluid" style="width: 17vw; height: auto;">
            <p class="mt-3 fs-4 nunito-semibold">Your Wishlist Is Empty</p>
        </div> --}}

        {{-- Daftar Wishlist --}}
        @if(count($wishlists))
            @foreach ($wishlists as $wishlist)
                <div class="d-flex align-items-center justify-content-between bg-putihpalette text-black px-3 py-3 mb-3 rounded-4">
                    {{-- Warna Strip Kategori --}}
                    <div class="me-3">
                        <div class="rounded-start bg-{{ $wishlist['category_class'] }}" style="width: 1vw; height: 100%;"></div>
                    </div>

                    {{-- Konten Wishlist ada --}}
                    <div class="flex-grow-1">
                        <p class="mb-0 montserrat-bold">{{ $wishlist['name'] }}</p>
                        <p class="mb-0 nunito-medium">{{ $wishlist['description'] }}</p>
                    </div>

                    {{-- Aksi --}}
                    <div class="ms-3 d-flex gap-3">
                        <button class="btn btn-light rounded-circle">
                            <i class="bi bi-pencil-fill"></i>
                        </button>
                        <button class="btn btn-light rounded-circle">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        {{-- ini kondisi kalau kosong --}}
        @else
            <div class="text-center mt-5">
                <img src="{{ asset('img/Wishlist.svg') }}" class="img-fluid" style="width: 17vw; height: auto;">
                <p class="mt-3 fs-4 nunito-semibold">Your Wishlist Is Empty</p>
            </div>
        @endif
        {{-- End --}}

        {{-- Label dan tombol --}}
        <div class = "container position-relative mt-4">
            {{-- Kategori Label --}} 
            <div class = "row mb-1">
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-pinkcategory"> </div>
                    <p class="poppins-semibold mb-0">Personal Care</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-merahtuacategory"> </div>
                    <p class="poppins-semibold mb-0">Foods</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-birucategory"> </div>
                    <p class="poppins-semibold mb-0">Beverages</p>
                </div>
            </div>
            <div class = "row">    
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-coklatcategory"> </div>
                    <p class="poppins-semibold mb-0">Kitchen Needs</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-ijocategory"></div>
                    <p class="poppins-semibold mb-0">Household Essentials</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-merahcategory"></div>
                    <p class="poppins-semibold mb-0">Health Supplies</p>
                </div>
            </div>
            
            {{-- Tombol Tambah --}}
            <div class="position-absolute bottom-0 end-0">
                <a href="{{ route('wishlist.add') }}" class="btn-orange rounded-3 px-4 pe-4 shadow-lg gap-2" style="padding-bottom: 0.8vw; padding-top: 0.8vw; display: flex; align-items: center;">
                    <span  class= "nunito-bold">Add Wishlist</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </div>
        </div> 
    </div>
    {{-- End Box Wishlist --}}

</x-master>