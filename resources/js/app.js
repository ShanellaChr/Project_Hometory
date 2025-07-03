import './bootstrap';
import 'bootstrap';
import '../css/app.css';
import Chart from 'chart.js/auto';

window.Chart = Chart; // supaya bisa diakses di file blade juga

document.addEventListener("DOMContentLoaded", function () {
    const categoryColors = {
        "Personal Care": "#F8C8DC",
        "Foods": "#CD4361",
        "Beverages": "#99D8F0",
        "Kitchen Needs": "#D29375",
        "Household Essentials": "#9CBA7F",
        "Health Supplies": "#E86060",
    };

    const categoryButtons = document.querySelectorAll(".category-btn");
    const hiddenInput = document.getElementById("selectedCategory");
    const form = document.getElementById("wishlistForm");
    const errorText = document.getElementById("categoryError");

    categoryButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Reset semua tombol
            categoryButtons.forEach(btn => {
                btn.classList.remove("active", "selected", "border", "border-dark");
                btn.style.removeProperty("background-color");
                btn.style.removeProperty("color");
            });

            // Ambil ID dan Nama Kategori
            const categoryId = this.getAttribute("data-category-id");
            const categoryName = this.textContent.trim();
            const color = categoryColors[categoryName] || "#ffffff";

            // Simpan ID ke input hidden
            hiddenInput.value = categoryId;

            // Highlight tombol
            this.classList.add("active", "selected", "border", "border-dark");
            this.style.setProperty("background-color", color, "important");
            this.style.setProperty("color", "#000", "important");

            // Sembunyikan pesan error
            errorText.style.display = "none";
        });
    });

    // Validasi saat submit
    form.addEventListener("submit", function (e) {
        if (!hiddenInput.value) {
            e.preventDefault(); // Stop kirim form
            errorText.style.display = "block"; // Tampilkan error
            window.scrollTo({ top: errorText.offsetTop - 100, behavior: "smooth" });
        }
    });
});

// document.addEventListener("DOMContentLoaded", function () {
//     const categoryColors = {
//         "Personal Care": "#F8C8DC",
//         "Foods": "#CD4361",
//         "Beverages": "#99D8F0",
//         "Kitchen Needs": "#D29375",
//         "Household Essentials": "#9CBA7F",
//         "Health Supplies": "#E86060",
//     };

//     const categoryButtons = document.querySelectorAll(".category-btn");
//     const hiddenInput = document.getElementById("selectedCategory");
//     const form = document.getElementById("wishlistForm");
//     const errorText = document.getElementById("categoryError");

//     categoryButtons.forEach(button => {
//         button.addEventListener("click", function () {
//             // Reset semua tombol
//             categoryButtons.forEach(btn => {
//                 btn.classList.remove("active");
//                 btn.style.removeProperty("background-color");
//                 btn.style.removeProperty("color");
//             });

//             // Aktifkan tombol yang diklik
//             this.classList.add("active");
//             const selectedCategory = this.textContent.trim();
//             const color = categoryColors[selectedCategory] || "#ffffff";
//             this.style.setProperty("background-color", color, "important");
//             this.style.setProperty("color", "#000", "important");

//             hiddenInput.value = selectedCategory;

//             // Sembunyikan pesan error jika sebelumnya muncul
//             errorText.style.display = "none";
//         });
//     });

//     form.addEventListener("submit", function (e) {
//         if (!hiddenInput.value) {
//             e.preventDefault(); // Hentikan submit
//             errorText.style.display = "block"; // Tampilkan pesan error
//             window.scrollTo({ top: errorText.offsetTop - 100, behavior: "smooth" }); // Scroll ke atas
//         }
//     });

//     const selectedCategoryInput = document.getElementById('selectedCategory');

//     categoryButtons.forEach(button => {
//         button.addEventListener('click', () => {
//             categoryButtons.forEach(btn => btn.classList.remove('selected'));
//             button.classList.add('selected');
//             selectedCategoryInput.value = button.getAttribute('data-category-id');
//         });
//     });

//     document.querySelectorAll('.category-btn').forEach(button => {
//         button.addEventListener('click', function () {
//             const id = this.getAttribute('data-id');
//             document.getElementById('selectedCategory').value = id;

//             // Highlight button
//             document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('border', 'border-dark'));
//             this.classList.add('border', 'border-dark');
//         });
//     });

//     // Optional: validasi sebelum submit jika ingin
//     document.getElementById('wishlistForm').addEventListener('submit', function (e) {
//         const catId = document.getElementById('selectedCategory').value;
//         if (!catId) {
//             e.preventDefault();
//             document.getElementById('categoryError').style.display = 'block';
//         }
//     });

    
// });
