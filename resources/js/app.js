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
                btn.classList.remove("active");
                btn.style.removeProperty("background-color");
                btn.style.removeProperty("color");
            });

            // Aktifkan tombol yang diklik
            this.classList.add("active");
            const selectedCategory = this.textContent.trim();
            const color = categoryColors[selectedCategory] || "#ffffff";
            this.style.setProperty("background-color", color, "important");
            this.style.setProperty("color", "#000", "important");

            hiddenInput.value = selectedCategory;

            // Sembunyikan pesan error jika sebelumnya muncul
            errorText.style.display = "none";
        });
    });

    form.addEventListener("submit", function (e) {
        if (!hiddenInput.value) {
            e.preventDefault(); // Hentikan submit
            errorText.style.display = "block"; // Tampilkan pesan error
            window.scrollTo({ top: errorText.offsetTop - 100, behavior: "smooth" }); // Scroll ke atas
        }
    });
});
