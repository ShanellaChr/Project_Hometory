import './bootstrap';
import 'bootstrap';
import '../css/app.css';
import Chart from 'chart.js/auto';

window.Chart = Chart; // supaya bisa diakses di file blade juga

document.addEventListener("DOMContentLoaded", function () {
    const categoryColors = {
        "Personal Care": "#F8C8DC",
        "Beverages": "#CD4361",
        "Household Essentials": "#99D8F0",
        "Foods": "#D29375",
        "Kitchen Needs": "#9CBA7F",
        "Health Supplies": "#E86060",
    };

    const categoryButtons = document.querySelectorAll(".category-btn");
    const hiddenInput = document.getElementById("selectedCategory");

    categoryButtons.forEach(button => {
        button.addEventListener("click", function () {
            categoryButtons.forEach(btn => {
                btn.classList.remove("active");
                btn.style.removeProperty("background-color");
                btn.style.removeProperty("color");
            });

            this.classList.add("active");
            const selectedCategory = this.textContent.trim();
            const color = categoryColors[selectedCategory] || "#ffffff";
            this.style.setProperty("background-color", color, "important");
            this.style.setProperty("color", "#000", "important");

            hiddenInput.value = selectedCategory;
        });
    });
});
