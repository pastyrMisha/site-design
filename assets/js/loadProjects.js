document.addEventListener("DOMContentLoaded", function (event) {

    let categories = document.getElementById('categoryTabs'),
        pane = document.querySelectorAll('.category-pane'),
        tab = document.querySelectorAll('.category-tab');

    // Ajax категорий в портфолио
    categories.addEventListener('click', (event) => {
        let target = event.target;
        if (target && target.classList.contains('category-tab') && !target.classList.contains('disable')) {

            fetch(`/Views/ajax-template.php?id=${target.dataset.categoryNumber}`)
                .then((res) => res.text())
                .then((template) => {
                    for (let i = 0; i < tab.length; i++) {
                        if (target === tab[i]) {
                            pane[i].innerHTML = template;
                            tab[i].classList.add('disable');
                        }
                    }
                });
        }
    });
});