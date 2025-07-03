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
    <title>Hometory - Expired Item</title>
</head>
<body>
    <div class="container-fluid p-0">
        {{-- Back Button --}}
        <a href="../myInventory">
            <img src="/img/Back Button.svg" alt="Back Button" class="BackButton">
        </a>

        {{-- Content --}}
        <div class="container d-flex flex-column p-5 bg-putih shadow rounded-3 border" style="max-height: 80vh; margin-top: 12vh; overflow-y: auto;">
            <h1 class="montserrat-semibold text-3xl">Expired Items</h1>

            {{-- KALO GA ADA ITEM EXPIRED --}}
            {{-- <div class="d-flex justify-content-center align-items-center flex-column h-100" style="margin-top: 5vh">
                <img src="{{ asset('img/Calendar For No Items.svg') }}" class="img-fluid w-25" alt="No Item Icon">
                <h1 class="nunito-semibold w-25 text-center text-3xl mt-3">You Had No Expired Items</h1>
            </div> --}}

            {{-- KALO ADA ITEM --}}
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Beverages - Dairy Products.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Milo 330ml</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">2 items</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Household Essentials - Pest Control.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Baygon 600ml</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Personal Care - Oral Care.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Pepsodent 160gr</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Foods - Snacks.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Oreo 137gr</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Health Supplies - Medicines.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">FG Troches</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">2 items</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Beverages - Soft Drinks.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Coca Cola 300ml</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">4 items</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Beverages - Soft Drinks.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Coca Cola 300ml</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">4 items</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Health Supplies - Medicines.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">FG Troches</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">2 items</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Foods - Snacks.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Oreo 137gr</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Personal Care - Oral Care.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Pepsodent 160gr</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="d-flex flex-row bg-putihpalette rounded-3 mt-3 me-3 pe-4 shadow border" style="width: 35vw">
                        <img src="{{ asset('img/Household Essentials - Pest Control.svg') }}" alt="Item Image" class="p-0 m-0 rounded-start-3" style="width: 5vw">
                        <h1 class="nunito-bold text-black text-2xl ms-4 w-50 me-auto pb-1 pt-4">Baygon 600ml</h1>
                        <p class="poppins-medium text-black text-base pt-4 ms-auto me-0">1 item</p>
                        <img src="{{ asset('img/trashbin black.svg') }}"
                             alt="Delete"
                             class="icon-trash mt-4 ms-auto"
                             style="width: 3.5vw; height: 3.5vh; cursor: pointer;"
                             data-bs-toggle="modal"
                             data-bs-target="#deleteConfirmationModal">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL UNTUK DELETE --}}
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 1rem;">

                <!-- Header -->
                <div class="modal-header bg-merahbutton text-putihpalette d-flex flex-column align-items-center" style="border-bottom: none;">
                    <img src="/img/warning icon.svg" alt="Warning" width="80" height="80" class="mb-2">
                </div>

                <!-- Footer -->
                <div class="modal-footer d-flex justify-content-center gap-3 pt-2 mb-3">
                    <h3 class="modal-title w-100 text-center montserrat-bold" id="deleteConfirmationLabel">
                        Are You Sure Want <br> To Delete?
                    </h3>
                    <button type="button" class="btn btn-abu d-flex align-items-center gap-2 px-4" data-bs-dismiss="modal">
                        Cancel
                        <img src="/img/cancel icon.svg" alt="Cancel" width="20" height="20">
                    </button>

                    <form action="{{ route('profile.delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-merah d-flex align-items-center gap-2 px-4">
                            Delete
                            <img src="/img/trashbin white icon.svg" alt="Delete" width="20" height="20">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
