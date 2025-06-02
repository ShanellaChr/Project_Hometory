<x-master>

    {{-- Title Section --}}
    <div class="d-flex justify-content-center align-items-center pt-7">
        <h3 class="montserrat-bold justify-content-center align-items-center fs-1">My</h3>
        <h3 class="montserrat-bold justify-content-center align-items-center ms-2 fs-1 title-color">Calendar</h3>
    </div>

    <div class="nunito-regular d-flex justify-content-center align-items-center">Track your expires, track smarter!</div>

    {{-- Div ini untuk nampung semuanya; calendar, items to expire, edit item expiration date button --}}
    <div class="d-flex">
        {{-- Div ini untuk nampung bagian kiri dari container, isinya Kalender dan Button --}}
        <div class="col-6 d-flex flex-column justify-content-center align-items-center mt-5">
            {{-- Kalender --}}
            <div class="container rounded-3 bg-orenpalette mb-5 col-10 p-4">
                {{-- Ini khusus untuk header kalendernya --}}
                {{-- Header Kalender --}}
                <div class="d-flex align-items-center justify-content-center mb-3 mt-3 calendar-line">
                    {{-- Bulan sebelumnya --}}
                    <div class="me-5 mb-3">
                        <img src="{{ asset('img/White Back Button.svg') }}" alt="Previous Month" />
                    </div>
                    {{-- Bulan dan Tahun --}}
                    <div class="ms-5 me-5 mb-3">
                        <div class="text-center montserrat-bold text-2xl text-white">
                            {{-- REPLACE WITH BACKEND LOGIC TO SHOW MONTH AND YEAR --}}
                            May 2025
                        </div>
                    </div>
                    {{-- Bulan setelahnya --}}
                    <div class="ms-5 mb-3">
                        <img src="{{ asset('img/White Back Button.svg') }}" alt="Next Month" class="rotate-180"/>
                    </div>
                </div>
                {{-- Ini khusus untuk penamaan hari harinya --}}
                <div class="d-flex justify-content-between w-100 mb-2 px-4">
                    <div class="nunito-bold text-white">Su</div>
                    <div class="nunito-bold text-white">Mo</div>
                    <div class="nunito-bold text-white">Tu</div>
                    <div class="nunito-bold text-white">We</div>
                    <div class="nunito-bold text-white">Th</div>
                    <div class="nunito-bold text-white">Fr</div>
                    <div class="nunito-bold text-white">Sa</div>
                </div>
                {{-- Ini untuk isi kalendernya, harus diisi dengan backend logic --}}
                <table class="table table-bordered text-center">
                    <tbody>

                    </tbody>
                </table>
            </div>
            {{-- Edit Item Expiration Date Button --}}
            <div class="d-flex mt-5">
                {{-- INI CARA NGE LINKNYA KAYAKNYA HARUS BERUBAH SESUAI LOKASI MYINVENTORYPAGE DI ROUTE, TUNGGU ROUTENYA ADA--}}
                {{-- harus customize margin left dan margin right nya. kurang panjang bro --}}
                <a href="../myInventory/myInventoryPage.blade.php" class="nunito-bold btn-dark-blue text-white rounded-3 text-decoration-none">
                    Edit Item Expiration Date
                    {{-- gambar masih harus di resize woi --}}
                    <img src="{{ asset('img/editButton.svg') }}" alt="Edit Button" class="pencil-icon">
                </a>
            </div>
        </div>
        {{-- Items to Expire --}}
        <div class="col-6 border">
            
        </div>

    </div>

</x-master>