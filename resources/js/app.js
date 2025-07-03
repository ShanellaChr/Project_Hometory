import './bootstrap';
import 'bootstrap';
import '../css/app.css';
import Chart from 'chart.js/auto';

window.Chart = Chart;

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

    // Tombol kategori
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

    // Validasi sebelum submit
    form?.addEventListener("submit", function (e) {
        if (!hiddenInput.value) {
            e.preventDefault();
            errorText.style.display = "block";
            window.scrollTo({ top: errorText.offsetTop - 100, behavior: "smooth" });
        }
    });
});

// Fungsi checkbox dengan cancel
window.handleCheckboxChange = function (checkbox, url) {
    const confirmed = confirm('Apakah item ini sudah selesai?');
    if (confirmed) {
        window.location.href = url;
    } else {
        checkbox.checked = false;
    }
};
