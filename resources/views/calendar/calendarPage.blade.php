<x-master>

    {{-- Title Section --}}
    <div class="d-flex justify-content-center align-items-center pt-7">
        <h3 class="montserrat-bold justify-content-center align-items-center fs-1">My</h3>
        <h3 class="montserrat-bold justify-content-center align-items-center ms-2 fs-1 title-color">Calendar</h3>
    </div>

    <div class="nunito-regular d-flex justify-content-center align-items-center">Track your expires, track smarter!</div>

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