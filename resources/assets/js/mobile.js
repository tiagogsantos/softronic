const axios = require('axios');
const menu = $("#mainmenu-mobile");
const submenu = $("#submenu-mobile");
const buttonReturn = $('<button>',{
    text: "Retornar",
    class: "btn-back",
    type: "button",
    "data-back": "product"
});




$('#product-menu').on('click', function () {
    
    const url = $(this).data('url');
    getCompany(url);

    menu.css("display", "none");
    submenu.css("display", "block");
});


function hideSubmenuMobile() {
    document.getElementById("mainmenu-mobile").style.display = "block";
    document.getElementById("submenu-mobile").style.display = "none";
}

function backMenu(buttonElement){
    let typeReturn = buttonElement.data('back'); 
    if(typeReturn === 'product'){
        menu.css("display", "block");
        submenu.css("display", "none");
    }else {
        getCompany(typeReturn);
    }
}

function getCompany(url) {
    axios.get(url)
        .then((response) => {
            submenu.html(buttonReturn);
            $(document).on('click', '.btn-back', function(){
                backMenu($(this));
            });
            
            const { data } = response;
            data.forEach((company, index) => {
                createMenuCompany(company);
            });
        })
        .catch((error) => {
            console.log(error);
        });
}

function getCategory(element) {
    const url = element.data('url');
    companySlug = element.data('slug');
    axios.get(`${url}?company_slug=${companySlug}`)
        .then((response) => {
            // buttonReturn.attr('data-back',`${url}?company_slug=${companySlug}`);

            submenu.html(buttonReturn);
            $(document).on('click', '.btn-back', function(){
                backMenu($(this));
            });

            const { data: { subcategories, categories } } = response;
            categories.forEach((category, index) => {
                category.subcategories = subcategories.filter((subcategory) =>{
                    return subcategory.category_id == category.id;
                });
                createMenuCategory(category,companySlug);
            });
        })
        .catch((error) => {
            console.log(error);
        });
}

function createMenuCompany(company) {
    const submenu = $('#submenu-mobile');
    const buttonElement = $('<button>', {
        class: 'w-submenu company',
        text: company.name,
        "data-id": company.id,
        "data-url": company.url,
        "data-slug": company.slug
    });
    buttonElement.bind({
        click: function () {
            getCategory($(this));
        }
    });
    submenu.append(buttonElement);
}
function createMenuCategory(category, companySlug) {
    const submenu = $('#submenu-mobile');
    const hasSubcategory = category.subcategories.length !== 0; 
    const clazz = hasSubcategory ? "w-submenu category" : "category";
    const buttonElement = $('<button>', {
        class: clazz,
        text: category.name,
        "data-id": category.id,
    });
    if(hasSubcategory){
        buttonElement.bind({
            click: function () {
                createMenuSubCategory(category.subcategories, companySlug);
            }
        });
    }else{
        buttonElement.bind({
            click: function () {
                window.location.href=`${category.links.main}/pt-br/${companySlug}/${category.links.category}/`;
            }
        });
    }
    submenu.append(buttonElement);
}
function createMenuSubCategory(subcategories, companySlug) {
    const submenu = $('#submenu-mobile');
    submenu.html(buttonReturn);

    subcategories.forEach((subcategory) => {
        const buttonElement = $('<button>', {
            class: 'subcategory',
            text: subcategory.name,
            "data-id": subcategory.id,
        });
        buttonElement.bind({
            click: function () {
                window.location.href=`${subcategory.links.main}/pt-br/${companySlug}/${subcategory.links.category}/`;
            }
        });
        submenu.append(buttonElement);
    });
}