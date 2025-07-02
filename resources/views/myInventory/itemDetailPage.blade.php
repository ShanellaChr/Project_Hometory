<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <title>Hometory - Item Detail</title>
</head>
<body>
    <div class="container-fluid p-0">
        {{-- Back Button --}}
        <a href="../myInventory">
            <img src="/img/Back Button.svg" alt="Back Button" class="BackButton">
        </a>

        {{-- Content --}}
        <div class="d-flex justify-content-center align-items-center flex-column my-5">
            <img src="{{ asset('img/Beverages - Dairy Products.svg') }}" alt="Beverages - Dairy Products" style="width: 18vw">

            <h1 class="montserrat-semibold text-3xl mt-3">Milo 330ml</h1>

            <div class="d-flex flex-row mt-1">
                <div class="mx-2 py-2 px-3 rounded-2 bg-birucategory shadow">
                    <p class="montserrat-semibold text-center text-lg m-0">Beverages</p>
                </div>

                <div class="mx-2 py-2 px-3 rounded-2 bg-orenpalette shadow">
                    <p class="montserrat-semibold text-center text-lg m-0">Dairy Products</p>
                </div>
            </div>

            <div class="container">
                {{-- Item Details --}}
                <h1 class="mt-5 montserrat-semibold text-2xl">Item Details</h1>
                <hr class="border-2 border-black rounded w-full my-2" style="opacity: 1;">

                <div class="d-flex flex-row mt-3">
                    <div class="bg-abupalette rounded-3 me-3 px-4 py-3 text-center shadow" style="width: fit-content">
                        <h1 class="nunito-bold text-putihpalette text-xl">Total Quantity</h1>
                        <span class="text-xl text-white poppins-bold"><img src="{{ asset('img/quantityIcon.svg') }}" class="me-2 pb-1" alt="Quantity Icon">3</span>
                    </div>

                    <div class="bg-abupalette rounded-3 mx-3 px-4 py-3 text-center shadow" style="width: fit-content">
                        <h1 class="nunito-bold text-putihpalette text-xl">Location Stored</h1>
                        <span class="text-lg text-white poppins-bold"><img src="{{ asset('img/locationIcon.svg') }}" class="me-2 pb-1" alt="Location Icon">Kulkas di dapur, laci kedua</span>
                    </div>
                </div>

                {{-- My Notes --}}
                <h1 class="mt-5 montserrat-semibold text-2xl">My Notes</h1>
                <hr class="border-2 border-black rounded w-full my-2" style="opacity: 1;">
                <p class="nunito-medium text-xl">
                    Susunya bentar lagi expired satu, harus cepet minum. Sisanya masih aman lah.
                    Semuanya ditaro di kulkas dapur biar dingin, laci yang kedua. Kemarin beli di Indomaret, kek biasa.
                </p>

                {{-- Expiration Dates --}}
                <h1 class="mt-5 montserrat-semibold text-2xl">Expiration Dates</h1>
                <hr class="border-2 border-black rounded w-full my-2" style="opacity: 1;">

                <div class="d-flex flex-column">
                    <div class="d-flex flex-row bg-ijopalette rounded-3 mt-3 me-3 px-4 py-2 shadow" style="width: 30vw">
                        <img src="{{ asset('img/expiredButton.svg') }}" alt="Expired Icon" class="mb-1" style="width: 2.5vw">
                        <h1 class="poppins-bold text-putihpalette text-2xl mx-5 mt-1 pt-2">17/05/2025</h1>
                        <p class="poppins-medium text-putihpalette text-base pt-3 ms-auto">1 item</p>
                    </div>

                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 px-4 py-2 shadow" style="width: 30vw">
                        <img src="{{ asset('img/CalendarGreen.svg') }}" alt="Item Dates Icon" class="mb-1" style="width: 2.5vw">
                        <h1 class="poppins-bold text-ijopalette text-2xl mx-5 mt-1 pt-2">05/06/2025</h1>
                        <p class="poppins-medium text-ijopalette text-base pt-3 ms-auto">2 items</p>
                    </div>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="d-flex flex-row ms-auto me-5">
                <div class="mx-4 mb-4 mt-5" style="width: fit-content">
                    <a href = "../crudItemPage" class="btn-dark-blue rounded-3 shadow" style="padding-left: 3.25vw; padding-right: 2vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                        <span class= "nunito-bold text-2xl text-center">Edit Item</span>
                        <img src="{{ asset('img/editButton.svg') }}" alt="Edit Icon" class="pencil-icon mb-1 ms-0 pe-3">
                    </a>
                </div>

                <div class="me-5 mb-4 mt-5" style="width: fit-content%">
                    {{-- nanti pathnya diatur lagi --}}
                    <a href = "../myInventory/expiredItemPage" class="btn-merah rounded-3 shadow" style="padding-left: 3.25vw; padding-right: 2vw; padding-top: 1.5vw; padding-bottom: 1.5vw">
                        <span class= "nunito-bold text-2xl text-center">Delete Item</span>
                        <img src="{{ asset('img/trashbin white icon.svg') }}" alt="Trash Bin Icon" class="pencil-icon mb-1 ms-0 pe-3">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
