<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Calendar --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-6xl">My<span class="ms-3 text-orenyedija">Calendar</span></div>

    {{-- Slogan My Calendar --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-2xl">Track your expires, track smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- Div ini untuk nampung semuanya; calendar, items to expire, edit item expiration date button --}}
    <div class="container d-inline-flex">
        {{-- Div ini untuk nampung bagian kiri dari container, isinya Kalender dan Button --}}
        <div class="width-50 d-flex flex-column justify-content-center align-items-center">
            {{-- Kalender --}}
            <div class="calendar">
                {{-- jesus how do i make a dynamic table? --}}
            </div>
            {{-- Edit Item Expiration Date Button --}}
            <div class="d-inline">
                {{-- INI CARA NGE LINKNYA KAYAKNYA HARUS BERUBAH SESUAI LOKASI MYINVENTORYPAGE DI ROUTE, TUNGGU ROUTENYA ADA--}}
                {{-- harus customize margin left dan margin right nya. kurang panjang bro --}}
                <a href="../myInventory/myInventoryPage.blade.php" class="nunito-bold btn-dark-blue text-white rounded-3 ps-5 pe-5 pt-3 pb-3">
                    Edit Item Expiration Date
                    {{-- gambar masih harus di resize woi --}}
                    <img src="{{ asset('img/editButton.svg') }}" alt="Edit Button" class="ms-2">
                </a>
            </div>
        </div>
        {{-- Items to Expire --}}
        <div class="items-to-expire">
            
        </div>

    </div>

</x-master>