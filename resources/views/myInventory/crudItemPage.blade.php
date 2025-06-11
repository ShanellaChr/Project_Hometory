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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Hometory</title>
</head>

<body style="height: 100%; margin-bottom: 5vh">
    <!-- Header -->
    <div class="bg-birupalette py-3 px-4 d-flex align-items-center" style="height: 5vw;">
        <a href="../myInventory">
            <img src="{{ asset('img/White Back Button.svg') }}" alt="Back" class="BackButton" style="width: 40px; height: 40px;">
        </a>
    </div>

    <div class="text-center mt-5">
        <h1 class="montserrat-bold text-5xl">Add <span class="text-orenyedija">Item</span></h1>
    </div>

    <div class="container mt-4 p-4 ps-5 pe-5 rounded-4 bg-abupalette text-white mb-0" style="max-width: 92%; max-height:100%; min-height: 100%;">
        <form id="itemForm">
            @csrf
            <!-- Item Name -->
            <div class="mb-4">
                <label for="itemName" class="form-label nunito-bold text-2xl">Item Name</label>
                <input type="text" name="name" class="form-control" id="itemName" placeholder="Enter the name of your item..." required>
            </div>

            <!-- Item Category -->
            <div class="mb-4">
                <label class="form-label nunito-bold text-2xl">Item Category</label>
                <div class="row gy-2">
                    @foreach (['Personal Care', 'Foods', 'Beverages', 'Kitchen Needs', 'Household Essentials', 'Health Supplies'] as $category)
                        <div class="col-6 col-md-4">
                            <button type="button" class="w-100 btn bg-putihpalette montserrat-semibold category-btn text-dark p-2" data-category="{{ $category }}">
                                {{ $category }}
                            </button>
                        </div>
                    @endforeach
                </div>
                <input type="hidden" name="category" id="selectedCategory">
                <div id="categoryError" class="text-danger mt-2" style="display: none;">
                    Please select an item category
                </div>
            </div>

            <!-- Item Sub-Category (Initially Hidden) -->
            <div class="mb-4" id="subcategoryContainer" style="display: none;">
                <label for="itemSubCategory" class="form-label nunito-bold text-2xl">Item Sub-Category</label>
                <select class="form-control" name="subcategory" id="subcategoryList">
                    <option value="" disabled selected>Select item sub-category</option> <!-- Placeholder -->
                    <!-- Sub-category options will be added dynamically -->
                </select>
            </div>

            <!-- Item Details -->
            <div class="mb-4">
                <label for="itemDetails" class="form-label nunito-bold text-2xl">Item Details</label>

                <div id="dateContainer"> <!-- Tempat untuk menambah input tanggal -->
                    <!-- Date 1 -->
                    <div class="date-item mb-4">
                        <div class="d-flex flex-row align-items-center rounded border border-dark shadow-sm p-3 bg-putih pe-5" style="opacity: 1; max-width: 500px;">
                            <!-- Icon Kalender -->
                            <img src="{{ asset('img/CalendarGreen.svg') }}" alt="Calendar Icon" class="me-3" style="width: 85px; height: 85px;">
                            
                            <div class="d-flex flex-column w-100">
                                <!-- Judul -->
                                <div class="d-flex justify-content-between align-items-center text-dark">
                                    <h1 class="montserrat-semibold text-xl pt-2">Date 1</h1>

                                    <!-- Tombol +/- -->
                                    <div class="d-flex align-items-center">
                                        <button type="button" class="btn btn-sm btn-outline-dark px-2 py-0 decreaseBtn">-</button>
                                        <span class="mx-2 poppins-semibold text-sm text-center" id="quantity" style="min-width: 30px">1</span>
                                        <button type="button" class="btn btn-sm btn-outline-dark px-2 py-0 increaseBtn">+</button>
                                    </div>
                                </div>

                                <!-- Input tanggal -->
                                <div class="mt-2">
                                    <div class="input-group shadow-sm rounded border">
                                        <input type="date" name="date[]" class="form-control border-0 bg-putihpalette nunito-medium" placeholder="dd/mm/yyyy" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Add More Dates -->
                <button type="button" class="btn btn-putih px-4 p-2 shadow-lg mt-1" id="addMoreBtn">
                    <span class="nunito-bold">Add More Dates</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus pb-1" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </button>
            </div>

            <!-- Item Location -->
            <div class="mb-4">
                <label for="itemLocation" class="form-label nunito-bold text-2xl">Item Stored Location</label>
                <input type="text" name="location" class="form-control" id="itemLocation" placeholder="Enter the item stored location..." required>
            </div>

            <!-- Notes -->
            <div class="mb-4">
                <label for="itemNotes" class="form-label nunito-bold text-2xl">Add Notes</label>
                <textarea name="notes" class="form-control" id="itemNotes" rows="4" placeholder="Enter notes about the item..."></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-orange px-4 p-2 shadow-lg nunito-bold">Submit</button>
        </form>
    </div>

    <script>
    // INI SCRIPT UNTUK SUB-CATEGORIES
        const categories = {
            "Personal Care": ["Make Up & Cosmetics", "Body Care", "Facial Care", "Hair Care", "Fragrances", "Feminine Hygiene & Diapers", "Oral Care", "Others"],
            "Foods": ["Instant Food", "Snacks", "Canned Food", "Spreads & Cereals", "Others"],
            "Beverages": ["Dairy Products", "Soft Drinks", "Instant Beverages", "Others"],
            "Kitchen Needs": ["Kitchen & Dining Utensils", "Seasonings & Spices", "Baking Ingredients", "Cooking Ingredients", "Others"],
            "Household Essentials": ["Cleaning & Care Products", "Home Utilities", "Air Fresheners & Dehumidifiers", "Pest Control", "Others"],
            "Health Supplies": ["Medicines", "Vitamins & Supplements", "Medical Devices", "Hygiene Products", "Others"]
        };

        const categoryButtons = document.querySelectorAll('.category-btn');
        const subCategoryContainer = document.getElementById('subcategoryContainer');
        const subCategoryList = document.getElementById('subcategoryList');
        const categoryError = document.getElementById('categoryError');
        const selectedCategoryInput = document.getElementById('selectedCategory');

        // Initially, subcategory section should be hidden and placeholder displayed
        subCategoryContainer.style.display = 'none';

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.dataset.category;
                selectedCategoryInput.value = category;
                categoryError.style.display = 'none';

                // Clear previous subcategories and show new ones
                subCategoryList.innerHTML = '<option value="" disabled selected>Select item sub-category</option>'; // Reset placeholder
                const subCategories = categories[category];

                // Populate subcategory dropdown
                subCategories.forEach(subCategory => {
                    const option = document.createElement('option');
                    option.value = subCategory;
                    option.textContent = subCategory;
                    subCategoryList.appendChild(option);
                });

                // Show the subcategory section
                subCategoryContainer.style.display = 'block';
            });
        });

        // Show category error if no category selected
        document.getElementById('itemForm').addEventListener('submit', (event) => {
            if (!selectedCategoryInput.value) {
                event.preventDefault();
                categoryError.style.display = 'block';
            }
        });

    // INI SCRIPT UNTUK ADD MORE DATES & YANG QUANTITY
        document.addEventListener("DOMContentLoaded", function() {
            let addMoreBtn = document.getElementById('addMoreBtn');
            let dateContainer = document.getElementById('dateContainer');

            addMoreBtn.addEventListener('click', function() {
                // Membuat container baru untuk input tanggal
                let newDateItem = document.createElement('div');
                newDateItem.classList.add('date-item', 'mb-4');
                
                // Menambahkan HTML untuk Date Baru
                newDateItem.innerHTML = `
                    <div class="d-flex flex-row align-items-center rounded border border-dark shadow-sm p-3 bg-putih pe-5" style="opacity: 1; max-width: 500px;">
                        <!-- Icon Kalender -->
                        <img src="{{ asset('img/CalendarGreen.svg') }}" alt="Calendar Icon" class="me-3" style="width: 85px; height: 85px;">
                        
                        <div class="d-flex flex-column w-100">
                            <!-- Judul -->
                            <div class="d-flex justify-content-between align-items-center text-dark">
                                <h1 class="montserrat-semibold text-xl pt-2">Date ${dateContainer.children.length + 1}</h1>

                                <!-- Tombol +/- -->
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-sm btn-outline-dark px-2 py-0 decreaseBtn">-</button>
                                    <span class="mx-2 poppins-semibold text-sm text-center" id="quantity" style="min-width: 30px">1</span>
                                    <button type="button" class="btn btn-sm btn-outline-dark px-2 py-0 increaseBtn">+</button>
                                </div>
                            </div>

                            <!-- Input tanggal -->
                            <div class="mt-2">
                                <div class="input-group shadow-sm rounded border">
                                    <input type="date" name="date[]" class="form-control border-0 bg-putihpalette nunito-medium" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                // Menambahkan container baru ke dalam dateContainer
                dateContainer.appendChild(newDateItem);
            });

            // Gunakan event delegation untuk menangani klik tombol +/- pada semua date-item
            dateContainer.addEventListener('click', function(event) {
                if (event.target.classList.contains('decreaseBtn')) {
                    let quantityElement = event.target.nextElementSibling; // Ambil elemen quantity
                    let currentQuantity = parseInt(quantityElement.innerText);
                    if (currentQuantity > 1) {
                        quantityElement.innerText = currentQuantity - 1;
                    }
                } else if (event.target.classList.contains('increaseBtn')) {
                    let quantityElement = event.target.previousElementSibling; // Ambil elemen quantity
                    let currentQuantity = parseInt(quantityElement.innerText);
                    quantityElement.innerText = currentQuantity + 1;
                }
            });
        });
    </script>
</body>
</html>
