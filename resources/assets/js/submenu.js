const axios = require('axios');
const loading = $('.loading');

$(() => {
    const submenuCompanies = $('#submenu-companies');
    const active = submenuCompanies.find('.active');
    data = getData(active);
    getCategories(data);

    const submenu = $('#submenu-companies').find('.submenu');
    submenu.on('click', function () {
        configureLoading();
        data = getData($(this))
        submenu.removeClass('active');
        $(this).addClass('active');
        getCategories(data);
    });
});

function configureLoading() {
    axios.interceptors.request.use((config) => {
        let subMenu = $("#submenu-categories");
        let row = subMenu.find('.row');
        row.html('');
        subMenu.css('diplay', 'none');

        loading.css('display', 'block');
        return config;
    });
}

function getData(element) {
    data = {};
    const url = element.data('url');
    const company_slug = element.data('company_slug');

    return data = { url, company_slug };
}


function getCategories(data) {
    axios.get(`${data.url}?company_slug=${data.company_slug}`)
        .then((response) => {
            const {
                data: {
                    categories,
                    subcategories
                }
            } = response;

            const row = $("#submenu-categories").find('.row');
            row.html('');

            categories.forEach(category => {
                createListCategory(category, row);
            });
            subcategories.forEach(subcategory => {
                createListSubCategory(subcategory);
            });
            loading.css('display', 'none');

        })
        .catch((error) => {
            console.log(error);
        });
}

function createListCategory(category, row) {
    let linkElement = $('<a>', {
        href: `${category.links.main}/pt-br/${category.companySlug}/${category.links.category}/`,
        text: category.name
    });
    let liElement = $('<li>');
    let ulElement = $('<ul>');
    let colElement = $('<div>', {
        id: `category_${category.id}`,
        class: 'col',
    });

    liElement.append(linkElement);
    ulElement.append(liElement);
    colElement.append(ulElement);
    row.append(colElement);
}

function createListSubCategory(subcategory) {
    let ulElement = $(`#category_${subcategory.category_id}`).find('ul');
    let linkElement = $('<a>');
    linkElement.attr('href', `${subcategory.links.main}/pt-br/${subcategory.companySlug}/${subcategory.links.category}`);

    let liElement = $('<li>');
    linkElement.text(subcategory.name);
    liElement.append(linkElement);
    ulElement.append(liElement);
}