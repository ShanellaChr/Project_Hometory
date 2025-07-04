@section('title', 'Hometory - My Inventory')
<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Inventory --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span
            class="ms-3 text-orenyedija">Inventory</span></div>

    {{-- Slogan My Inventory --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Keep your items neatly
        managed!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- START OF SECTION MY INVENTORY --}}
    <div class="d-flex flex-row overflow-hidden w-100 pb-5">
        {{-- Bagian Kiri (Sidebar) Section START --}}
        <div class="w-25 min-h-full">
            {{-- Button Add New Item --}}
            <div class="mt-3 mb-4 mx-4" style="width: 88%">
                <a href = "../crudItemPage" class="btn-orange rounded-3 shadow"
                    style="padding-left: 4.2vw; padding-right: 4.5vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                    <span class= "nunito-bold text-2xl text-center">Add New Item</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-plus mb-2" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </a>
            </div>

            {{-- Button Expired Products --}}
            <div class="mx-4 mb-4 mt-5" style="width: 88%">
                <a href = "../expiredItemPage" class="btn-dark-blue rounded-3 shadow"
                    style="padding-left: 3.25vw; padding-right: 2vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                    <span class= "nunito-bold text-2xl text-center">Expired Products</span>
                    <img src="{{ asset('img/expiredButton.svg') }}" alt="Expired Icon"
                        class="pencil-icon mb-1 ms-0 pe-3">
                </a>
            </div>

            {{-- Category Start --}}
            <div class="d-flex flex-column justify-content-center justify-start bg-putih shadow-lg border rounded-4 p-4 m-4"
                style="width: 88%">
                <div>
                    <h4 class="montserrat-bold text-2xl">Items Category</h4>

                    <hr class="border-4 border-orenyedija rounded w-full my-2" style="opacity: 1;">
                </div>

                @php
                    $currentSlug = request()->route('slug'); // slug dari route kategori
                @endphp

                <!-- PERSONAL CARE CATEGORY -->
                <a href="{{ route('item.category', 'personal-care') }}"
                    class="category-btn bg-putih gradient-pinkcategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'personal-care' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Personal_Care.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;"
                        alt="Personal Care Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-pinkcategory montserrat-semibold text-2xl text-start ps-3 pb-0 mb-0 mt-4">
                            Personal Care</p>
                        <hr class="category-line border-4 border-pinkcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>

                <!-- FOODS CATEGORY -->
                <a href="{{ route('item.category', 'foods') }}"
                    class="category-btn bg-putih gradient-merahtuacategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'foods' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Foods.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;"
                        alt="Foods Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-merahtuacategory montserrat-semibold text-2xl text-start ps-3 pb-0 mb-0 mt-4">
                            Foods</p>
                        <hr class="category-line border-4 border-merahtuacategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>

                <!-- BEVERAGES CATEGORY -->
                <a href="{{ route('item.category', 'beverages') }}"
                    class="category-btn bg-putih gradient-birucategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'beverages' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Beverages.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;"
                        alt="Beverages Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-birucategory montserrat-semibold text-2xl text-start ps-3 pb-0 mb-0 mt-4">
                            Beverages</p>
                        <hr class="category-line border-4 border-birucategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>

                <!-- KITCHEN NEEDS CATEGORY -->
                <a href="{{ route('item.category', 'kitchen-needs') }}"
                    class="category-btn bg-putih gradient-coklatcategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'kitchen-needs' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Kitchen_Needs.svg') }}" class="rounded-3 ms-0 ps-0"
                        style="width: 5vw;" alt="Kitchen Needs Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-coklatcategory montserrat-semibold text-2xl text-start ps-3 pb-0 mb-0 mt-4">
                            Kitchen Needs</p>
                        <hr class="category-line border-4 border-coklatcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>

                <!-- HOUSEHOLD ESSENTIALS CATEGORY -->
                <a href="{{ route('item.category', 'household-essentials') }}"
                    class="category-btn bg-putih gradient-ijocategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'household-essentials' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Household_Essentials.svg') }}" class="rounded-3 ms-0 ps-0"
                        style="width: 5vw;" alt="Household Essentials Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-ijocategory montserrat-semibold text-2xl text-start ps-3 pb-0 my-0">
                            Household Essentials</p>
                        <hr class="category-line border-4 border-ijocategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>

                <!-- HEALTH SUPPLIES CATEGORY -->
                <a href="{{ route('item.category', 'health-supplies') }}"
                    class="category-btn bg-putih gradient-merahcategory my-3 ps-0 w-100 d-flex flex-row rounded-3 {{ $currentSlug === 'health-supplies' ? 'active' : '' }}"
                    style="border: 0; text-decoration: none">
                    <img src="{{ asset('img/Health_Supplies.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;"
                        alt="Health Supplies Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p
                            class="category-title text-merahcategory montserrat-semibold text-2xl text-start ps-3 pb-0 my-0">
                            Health Supplies</p>
                        <hr class="category-line border-4 border-merahcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </a>
            </div>
            {{-- Category End --}}
        </div>
        {{-- Bagian Kiri (Sidebar) END --}}

        {{-- Bagian Kanan (Konten) Start --}}
        <div class="d-flex w-75 pe-5 flex-column">
            {{-- Search Bar Start --}}
            <div class="container mb-2">
                <form method="GET" action="{{ route('item.index') }}"
                    class="d-flex align-items-center p-2 pe-4 shadow bg-putih search-form" style="margin: auto;">
                    <!-- Ikon Search -->
                    <span class="px-2">
                        <img src="{{ asset('img/esearchIcon.svg') }}" alt="Search Icon" class="pencil-icon m-1">
                    </span>

                    <!-- Input -->
                    <input class="form-control border-0 shadow-none bg-putih" type="search" name="search"
                        placeholder="Search here..." value="{{ request('search') }}" aria-label="Search">

                    <!-- Tombol -->
                    <button class="btn-orange nunito-bold rounded-3 px-4 py-2 shadow ms-2"
                        type="submit">Search</button>
                </form>
            </div>
            {{-- Search Bar End --}}

            {{-- Card Item Start --}}
            <div class="container mt-4">
                <div class="row">
                    @if ($items->count() == 0 && request('search'))
                        {{-- TAMPILAN SAAT SEARCH TIDAK DITEMUKAN --}}
                        <div class="d-flex justify-content-center align-items-center flex-column h-100"
                            style="margin-top: 15vh">
                            <img src="{{ asset('img/Not Found.svg') }}" class="img-fluid w-25" alt="No Found Icon">
                            <h1 class="nunito-semibold w-25 text-center text-3xl mt-3">Item Not Found.</h1>
                            <h1 class="nunito-semibold text-center text-3xl" style="width: 30vw">
                                Try A Different Keyword Or Check Your Category Filters.
                            </h1>
                        </div>
                    @elseif ($items->count() == 0)
                        {{-- TAMPILAN SAAT INVENTORY MASIH KOSONG --}}
                        <div class="d-flex justify-content-center align-items-center flex-column h-100"
                            style="margin-top: 15vh">
                            <img src="{{ asset('img/Inventory Icon Home.svg') }}" class="img-fluid w-25"
                                alt="No Item Icon">
                            <h1 class="nunito-semibold w-25 text-center text-3xl mt-3">You Had No Item On Your
                                Inventory</h1>
                        </div>
                    @else
                        {{-- LOOPING ITEM JIKA ADA DATA --}}
                        @foreach ($items as $item)
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <a href="{{ route('item.detail', ['slug' => $item->slug]) }}"
                                    class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none border">
                                    <img src="{{ asset($item->subCategory->img) }}" class="img-fluid"
                                        alt="{{ $item->category->category . ' - ' . $item->subCategory->subcategory }}">
                                    <div class="my-3 py-2 rounded-2 bg-{{ $item->category->color }} shadow">
                                        <p class="montserrat-semibold text-center text-lg m-0">
                                            {{ $item->category->category }}
                                        </p>
                                    </div>

                                    <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                        <p class="montserrat-semibold text-center text-lg m-0">
                                            {{ $item->subCategory->subcategory }}</p>
                                    </div>

                                    <p class="d-flex align-items-center mb-2 nunito-bold text-2xl"
                                        style="min-height: 10vh; max-width: 80%">{{ $item->name }}</p>
                                    <p class="mb-2 poppins-medium text-sm">Item Quantity:
                                        {{ $item->expirationDates->sum('qty') }}</p>
                                    <p class="mb-1 poppins-medium text-sm">Expired Date:
                                        {{ optional($item->expirationDates->sortBy('expiration_date')->first())->expiration_date
                                            ? \Carbon\Carbon::parse($item->expirationDates->sortBy('expiration_date')->first()->expiration_date)->format(
                                                'd/m/Y',
                                            )
                                            : '-' }}
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>

                {{ $items->links('vendor.pagination.bootstrap-custom') }}
            </div>
            {{-- Card Item End --}}
        </div>
        {{-- Bagian Kanan (Konten) End --}}
    </div>
    {{-- END OF SECTION MY INVENTORY --}}

    {{-- START OF SCRIPT SECTION untuk CATEGORY --}}
    {{-- <script>
        document.querySelectorAll('.category-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                // Jika tombol yang diklik sudah aktif, matikan
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                } else {
                    // Nonaktifkan semua tombol dulu
                    document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove(
                        'active'));
                    // Aktifkan tombol yang diklik
                    this.classList.add('active');
                }
            });
        });
    </script> --}}
    {{-- END OF SCRIPT SECTION --}}
</x-master>
