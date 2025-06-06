<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Inventory --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Inventory</span></div>

    {{-- Slogan My Inventory --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Keep your items neatly managed!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- START OF SECTION MY INVENTORY --}}
    <div class="d-flex flex-row overflow-hidden w-100 pb-5">
        {{-- Bagian Kiri (Sidebar) Section START --}}
        <div class="w-25 min-h-full">
            {{-- Button Add New Item --}}
            <div class="mt-3 mb-4 mx-4" style="width: 88%">
                <a href = "../myInventory/crudItemPage.blade.php" class="btn-orange rounded-3 shadow" style="padding-left: 4.2vw; padding-right: 4.5vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                    <span  class= "nunito-bold text-2xl text-center">Add New Item</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus mb-2" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </div>

            {{-- Button Expired Products --}}
            <div class="mx-4 mb-4 mt-5" style="width: 88%">
                <a href = "../myInventory/expiredItemPage.blade.php" class="btn-dark-blue rounded-3 shadow" style="padding-left: 3.25vw; padding-right: 2vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                    <span  class= "nunito-bold text-2xl text-center">Expired Products</span> 
                    <img src="{{ asset('img/expiredButton.svg') }}" alt="Expired Icon" class="pencil-icon mb-1 ms-0 pe-3">
                </a>
            </div>
            
            {{-- Category Start --}}
            <div class="d-flex flex-column justify-content-center justify-start bg-putih shadow-lg rounded-4 p-4 m-4" style="width: 88%">
                <div>
                    <h4 class="montserrat-bold text-2xl">Items Category</h4>
                    
                    <hr class="border-4 border-orenyedija rounded w-full my-2" style="opacity: 1;">
                </div>
                
                <!-- PERSONAL CARE CATEGORY -->
                <button class="category-btn bg-putih gradient-pinkcategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Personal_Care.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Personal Care Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-pinkcategory montserrat-semibold text-2xl text-left ps-3 pb-0 mb-0 mt-4">Personal Care</p>
                        <hr class="category-line border-4 border-pinkcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button>    
                
                <!-- FOODS CATEGORY -->
                <button class="category-btn bg-putih gradient-merahtuacategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Foods.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Foods Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-merahtuacategory montserrat-semibold text-2xl text-left ps-3 pb-0 mb-0 mt-4">Foods</p>
                        <hr class="category-line border-4 border-merahtuacategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button> 
                 
                <!-- BEVERAGES CATEGORY -->
                <button class="category-btn bg-putih gradient-birucategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Beverages.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Beverages Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-birucategory montserrat-semibold text-2xl text-left ps-3 pb-0 mb-0 mt-4">Beverages</p>
                        <hr class="category-line border-4 border-birucategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button>

                <!-- KITCHEN NEEDS CATEGORY -->
                <button class="category-btn bg-putih gradient-coklatcategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Kitchen_Needs.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Kitchen Needs Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-coklatcategory montserrat-semibold text-2xl text-left ps-3 pb-0 mb-0 mt-4">Kitchen Needs</p>
                        <hr class="category-line border-4 border-coklatcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button> 

                <!-- HOUSEHOLD ESSENTIALS CATEGORY -->
                <button class="category-btn bg-putih gradient-ijocategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Household_Essentials.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Household Essentials Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-ijocategory montserrat-semibold text-2xl text-start ps-3 pb-0 my-0">Household Essentials</p>
                        <hr class="category-line border-4 border-ijocategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button> 

                <!-- HEALTH SUPPLIES CATEGORY -->
                <button class="category-btn bg-putih gradient-merahcategory my-3 ps-0 w-100 d-flex flex-row rounded-3" style="border: 0;">
                    <img src="{{ asset('img/Health_Supplies.svg') }}" class="rounded-3 ms-0 ps-0" style="width: 5vw;" alt="Health Supplies Category">
                    <div class="w-75 d-flex flex-column align-items-start">
                        <p class="category-title text-merahcategory montserrat-semibold text-2xl text-start ps-3 pb-0 my-0">Health Supplies</p>
                        <hr class="category-line border-4 border-merahcategory ms-3 mt-1" style="opacity: 1;">
                    </div>
                </button> 
            </div>
            {{-- Category End --}}
        </div>
        {{-- Bagian Kiri (Sidebar) END --}}

        {{-- Bagian Kanan (Konten) Start --}}
        <div class="d-flex w-75 pe-5 flex-column">
            {{-- Search Bar Start --}}
            <div class="container mb-2">
              <form class="d-flex align-items-center p-2 pe-4 shadow bg-putih search-form" style="margin: auto;">
                <!-- Ikon Search -->
                <span class="px-2">
                    <img src="{{ asset('img/esearchIcon.svg') }}" alt="Search Icon" class="pencil-icon m-1">
                </span>

                <!-- Input -->
                <input class="form-control border-0 shadow-none bg-putih" type="search" placeholder="Search here..." aria-label="Search">

                <!-- Tombol -->
                <button class="btn-orange nunito-bold rounded-3 px-4 py-2 shadow ms-2" type="submit">Search</button>
             </form>
            </div>
            {{-- Search Bar End --}}

            {{-- Card Item Start --}}
            <div class="container mt-4">
                {{-- KALO GA ADA ITEM --}}
                {{-- <div class="d-flex justify-content-center align-items-center flex-column h-100" style="margin-top: 15vh">
                    <img src="{{ asset('img/Inventory Icon Home.svg') }}" class="img-fluid w-25" alt="No Item Icon">
                    <h1 class="nunito-semibold w-25 text-center text-3xl mt-3">You Had No Item On Your Inventory</h1>
                </div> --}}

                {{-- KALO ADA ITEM --}}
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Beverages - Dairy Products.svg') }}" class="img-fluid" alt="Beverages - Dairy Products">
            
                            <div class="my-3 py-2 rounded-2 bg-birucategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Beverages</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Dairy Products</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Milo 330ml</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 3</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 05/06/2025</p>
                        </a>
                    </div>
    
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Foods - Snacks.svg') }}" class="img-fluid" alt="Foods - Snacks">
            
                            <div class="my-3 py-2 rounded-2 bg-merahtuacategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Foods</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Snacks</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Oreo 137gr</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 23/06/2025</p>
                        </a>
                    </div>
    
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Personal Care - Oral Care.svg') }}" class="img-fluid" alt="Personal Care - Oral Care">
            
                            <div class="my-3 py-2 rounded-2 bg-pinkcategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Personal Care</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Oral Care</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Pepsodent 160gr</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 07/07/2025</p>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Kitchen Needs - Baking Ingredients.svg') }}" class="img-fluid" alt="Kitchen Needs - Baking Ingredients">

                            <div class="my-3 py-2 rounded-2 bg-coklatcategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Kitchen Needs</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Baking Ingredients</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Tepung Segitiga</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 17/08/2025</p>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Household Essentials - Cleaning & Care Products.svg') }}" class="img-fluid" alt="Household Essentials - Cleaning & Care Products">
            
                            <div class="my-3 py-2 rounded-2 bg-ijocategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Household Essentials</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Cleaning & Care Products</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Baygon 600ml</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 02/02/2025</p>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Health Supplies - Medicines.svg') }}" class="img-fluid" alt="Health Supplies - Medicines">
            
                            <div class="my-3 py-2 rounded-2 bg-merahcategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Health Supplies</p>
                            </div>
            
                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Medicines</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">FG Troches</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 3</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 02/09/2025</p>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Beverages - Soft Drinks.svg') }}" class="img-fluid" alt="Beverages - Soft Drinks">

                            <div class="my-3 py-2 rounded-2 bg-birucategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Beverages</p>
                            </div>

                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Soft Drinks</p>
                            </div> 
            
                            <p class="mb-2 nunito-bold text-2xl">Coca Cola 300ml</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 4</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 01/01/2026</p>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Personal Care - Oral Care.svg') }}" class="img-fluid" alt="Personal Care - Oral Care">

                            <div class="my-3 py-2 rounded-2 bg-pinkcategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Personal Care</p>
                            </div>

                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Oral Care</p>
                            </div> 

                            <p class="mb-2 nunito-bold text-2xl">Pepsodent 160gr</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 07/07/2025</p>
                        </a>
                    </div>
    
                    <div class="col-12 col-sm-6 col-md-4 mb-4 mb-4">
                        <a href="../itemDetailPage.blade" class="custom-card d-block p-4 h-100 rounded-4 shadow text-black text-decoration-none">
                            <img src="{{ asset('img/Kitchen Needs - Baking Ingredients.svg') }}" class="img-fluid" alt="Kitchen Needs - Baking Ingredients">

                            <div class="my-3 py-2 rounded-2 bg-coklatcategory shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Kitchen Needs</p>
                            </div>

                            <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow">
                                <p class="montserrat-semibold text-center text-lg m-0">Baking Ingredients</p>
                            </div> 

                            <p class="mb-2 nunito-bold text-2xl">Tepung Segitiga</p>
                            <p class="mb-2 poppins-medium text-sm">Item Quantity: 1</p>
                            <p class="mb-1 poppins-medium text-sm">Expired Date: 17/08/2025</p>
                        </a>
                    </div>
                </div>

                {{-- KALO SEARCH NOT FOUND --}}
                {{-- <div class="d-flex justify-content-center align-items-center flex-column h-100" style="margin-top: 15vh">
                    <img src="{{ asset('img/Inventory Icon Home.svg') }}" class="img-fluid w-25" alt="No Item Icon">
                    <h1 class="nunito-semibold w-25 text-center text-3xl mt-3">Item Not Found.</h1>
                    <h1 class="nunito-semibold text-center text-3xl" style="width: 30vw">Try A Different Keyword Or Check Your Category Filters.</h1>
                </div> --}}
            </div>
            {{-- Card Item End --}}
        </div>
        {{-- Bagian Kanan (Konten) End --}}
    </div>
    {{-- END OF SECTION MY INVENTORY --}}

    {{-- START OF SCRIPT SECTION untuk CATEGORY --}}
    <script>
        document.querySelectorAll('.category-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                // Jika tombol yang diklik sudah aktif, matikan
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                } else {
                    // Nonaktifkan semua tombol dulu
                    document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
                    // Aktifkan tombol yang diklik
                    this.classList.add('active');
                }
            });
        });
    </script>

    {{-- END OF SCRIPT SECTION --}}
    
</x-master>