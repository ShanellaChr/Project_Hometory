@section('title', 'Hometory - My Wishlist')
<x-master>
    {{-- Judul --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">
        My <span class="ms-3 text-orenyedija">Wishlist</span>
    </div>

    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">
        Plan wisely, shop mindfully!
    </div>

    {{-- Box --}}
    <div class="container mt-0 mb-5 card bg-dark-blue text-white shadow-lg p-3 rounded-4 position-relative bg-abupalette">

        {{-- Isi Wishlist --}}
        @if($wishlists->count())
            @foreach ($wishlists as $wishlist)
                <div class="position-relative bg-putihpalette text-black py-3 ps-4 pe-3 mb-3 rounded-4 d-flex align-items-center" style="overflow: hidden;">
                    
                    {{-- Strip warna dari kategori --}}
                    <div class="position-absolute top-0 bottom-0 start-0 rounded-start bg-{{ $wishlist->category->color ?? 'pinkcategory' }}" style="width: 1.2vw;"></div>

                    {{-- Checkbox --}}
                    <form action="{{ route('wishlist.check', $wishlist->id) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin wishlist ini sudah selesai dan ingin menghapusnya?');">
                        @csrf
                        <label class="custom-checkbox-wrapper ms-1 me-3" style="cursor: pointer;">
                            <input
                                type="checkbox"
                                class="custom-checkbox"
                                onchange="handleCheckboxChange(this, '{{ route('wishlist.check', $wishlist->id) }}')"
                            />
                            <span class="checkmark"></span>
                        </label>
                    </form>

                    {{-- Konten --}}
                    <div class="flex-grow-1">
                        <p class="mb-0 montserrat-bold">{{ $wishlist->items_name }}</p>
                        <p class="mb-0 nunito-medium">{{ $wishlist->items_description }}</p>
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="position-absolute top-0 end-0 me-3 mt-2 d-flex gap-2">
                        <a href="{{ route('wishlist.edit', $wishlist->id) }}" class="btn bg-transparent p-0">
                            <img src="{{ asset('img/pencil black.svg') }}" alt="Edit" width="26" height="26">
                        </a>
                        <form action="{{ route('wishlist.delete', $wishlist->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this wishlist item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-transparent p-0">
                                <img src="{{ asset('img/trashbin black.svg') }}" alt="Delete" width="26" height="26">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        @else
            <div class="text-center mt-5">
                <img src="{{ asset('img/Wishlist.svg') }}" class="img-fluid" style="width: 17vw;">
                <p class="mt-3 fs-4 nunito-semibold">Your Wishlist Is Empty</p>
            </div>
        @endif


        {{-- Label Kategori --}}
        <div class="container position-relative mt-4">
            <div class="row mb-1">
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-pinkcategory"></div>
                    <p class="poppins-semibold mb-0">Personal Care</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-merahtuacategory"></div>
                    <p class="poppins-semibold mb-0">Foods</p>
                </div>
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-birucategory"></div>
                    <p class="poppins-semibold mb-0">Beverages</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 d-flex align-items-center gap-2">
                    <div class="color-box-wishlist rounded-1 bg-coklatcategory"></div>
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
                    <span class="nunito-bold">Add Wishlist</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</x-master>
