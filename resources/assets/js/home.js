

$(() => {
    let options = $('.showcase-titles').find('.options');
    options.on('click', function (e) {
        e.preventDefault();
        let box = $(this).data('box');
        showBox(box);
        options.removeClass('active');
        $(this).addClass('active');
    });
});

function showBox(box){
    if(box === 'new') {
        $('#new').css("display", "block");
        $("#featured").css("display", "none");
    }else{
        $('#new').css("display", "none");
        $("#featured").css("display", "block");
    }
}