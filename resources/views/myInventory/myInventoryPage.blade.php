<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Inventory --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Inventory</span></div>

    {{-- Slogan My Inventory --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Keep your items neatly managed!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- START OF SECTION MY INVENTORY --}}
    <div class="d-flex flex-row overflow-hidden w-100">
        {{-- Bagian Kiri (Sidebar) Section START --}}
        <div class="w-25 bg-pinkcategory min-h-full">
            {{-- Button Add New Item --}}
            <div class="mb-4 mx-4">
                <a href = "../myInventory/crudItemPage.blade.php" class="btn-orange rounded-3 shadow-lg w-100">
                    <span  class= "nunito-bold text-2xl">Add New Item</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus mb-2" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </div>

            {{-- Button Expired Products --}}
            <div class="m-4">
                <a href = "../myInventory/expiredItemPage.blade.php" class="btn-dark-blue rounded-3 shadow-lg w-100">
                    <span  class= "nunito-bold text-2xl">Expired Products</span> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus mb-2" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            </div>
            
            {{-- Category Start --}}
            <div class="m-4 bg-light shadow-lg rounded-4 p-4">
                <div class="ps-2">
                    <h4 class="montserrat-bold text-2xl">Items Category</h4>
                    
                    <hr class="border-4 border-orenyedija rounded w-full my-2" style="opacity: 1;">
                </div>
                
                <!-- PERSONAL CARE CATEGORY -->
                <button class="w-100 d-flex flex-row rounded-1 bg-light" style="border: 0;">
                    <img src="{{ asset('img/Personal Care - Default.svg') }}" class="w-25 p-0 m-0 rounded-5" alt="Personal Care - Default">
                    <div class="flex-row w-75 ms-2">
                        <p class="montserrat-semibold text-2xl text-left mt-3 pt-5">Personal Care</p>
                        <hr class="border-4 border-pinkcategory w-50 ms-2 pt-5" style="opacity: 1;">
                    </div>
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category personal care -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-orenmuda">
                    <p class="text-xl font-semibold mt-2 text-left text-white">All Category</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>           -->
                
                <!-- DOG CATEGORY -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-kuning">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Dog</p>
                    <hr class="border-kuning border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>                              -->
                
                <!-- nyalain komen di bawah ini kalo lagi di category dog -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-kuning">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Dog</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>                                     

                <!-- CAT CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-greencat">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Cat</p>
                    <hr class="border-greencat border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>    
                
                <!-- nyalain komen di bawah ini kalo lagi di category cat -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-greencat">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Cat</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>      -->
                
                <!-- REPTILE CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-bluereptile">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Reptile</p>
                    <hr class="border-bluereptile border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>     
                
                <!-- nyalain komen di bawah ini kalo lagi di category reptile -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-bluereptile">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Reptile</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>      -->
                
                <!-- OTHER PET CATEGORY -->
                <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group hover:bg-oren">
                    <p class="text-xl font-semibold mt-2 text-left group-hover:text-white transition-colors duration-500 ease-in-out">Other Pet</p>
                    <hr class="border-oren border-1/2 w-3/6 my-2 group-hover:w-full group-hover:border-white transition-all duration-500 ease-in-out">
                </button>  

                <!-- nyalain komen di bawah ini kalo lagi di category other pet -->
                <!-- <button class="pl-2 pr-2 w-full transition duration-500 ease-in-out rounded-xl group bg-oren">
                    <p class="text-xl font-semibold mt-2 text-left text-white">Other Pet</p>
                    <hr class="border-1/2 my-2 w-full border-white">
                </button>                              -->
            </div>
            {{-- Category End --}}
        </div>
        {{-- Bagian Kiri (Sidebar) END --}}

        {{-- Bagian Kanan (Konten) Start --}}
        <div class="d-flex w-75 flex-column">
            <nav class="navbar navbar-expand-lg bg-light border-2">
                <div class="container-fluid">
                    <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>
                        <form class="max-w-md w-5/6 mt-4">
                <label for="default-search" class="mb-2 text-sm text-gray-900 sr-only !font-overpass font-semibold">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 !font-overpass font-semibold text-slate-400 border-1/2 border-gray-400 rounded-lg bg-white shadow-md" placeholder="Search Here..." required>
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-greentipis hover:bg-greentua rounded-lg px-2 py-2 !font-overpass">Search</button>
                </div>
            </form>

            {{-- Card Item Start --}}
            <div class="d-flex flex-column m-5 p-4 w-25 rounded-4 bg-light shadow-lg hover:bg-secondary">
                {{-- Gambar Item --}}
                <img src="{{ asset('img/Personal Care - Default.svg') }}" class="img-fluid" alt="Personal Care - Default">

                {{-- Category Item --}}
                <div class="my-3 py-2 rounded-2 bg-birucategory shadow-sm">
                    <p class="montserrat-semibold text-center text-lg m-0">Beverages</p>
                </div>

                {{-- Sub-Category Item --}}
                <div class="mb-3 py-2 rounded-2 bg-putihpalette shadow-sm">
                    <p class="montserrat-semibold text-center text-lg m-0">Dairy Products</p>
                </div> 

                {{-- Nama Item --}}
                <p class="mb-2 nunito-bold text-2xl">Milo 330ml</p>

                {{-- Quantity Item --}}
                <p class="mb-2 poppins-medium text-sm">Item Quantity: 3</p>

                {{-- Expired Item --}}
                <p class="mb-1 poppins-medium text-sm">Expired Date: 05/06/2025</p>
            </div>
            {{-- Card Item End --}}
        </div>
        {{-- Bagian Kanan (Konten) End --}}
    </div>
    {{-- END OF SECTION MY INVENTORY --}}
</x-master>