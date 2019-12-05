$(document).ready(function () {
    window.scroll(0, 0);
    if(!window.localStorage.getItem('modal')) {
        $('.logo').hide();
        setTimeout(function () {
            $('.container-modal').hide();
        }, 2000);

        $("#img-modal").animate({
            width: "280px",
            height: "200px",
        }, 1000, ()  => {
            $("#img-modal").animate({
                left: "0px",
                top: "10px",
            },1000, ()  => {
                window.localStorage.setItem('modal', '1');
                $('.logo').show();
            });
        })
    }else {
        $('.container-modal').hide();
        $('.logo').show();
    }
    

    $("#img-first").mlens(
        {
            imgSrc: $("#img-first").attr("data-big"),   // path of the hi-res version of the image
            lensShape: "square",                // shape of the lens (circle/square)
            lensSize: 180,                  // size of the lens (in px)
            borderSize: 0,                  // size of the lens border (in px)
            borderColor: "#fff",                // color of the lens border (#hex)
            borderRadius: 0,                // border radius (optional, only if the shape is square)
            overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
        });

    $('.img-option').click(function () {
        var img = $(this).attr('src');
        console.log(img);
        $('#img-first').attr('src', img);
        $('#img-first').attr('data-big', img);
        $('#img-first').attr('data-overlay', img);
        $("#img-first").mlens(
            {
                imgSrc: $("#img-first").attr("data-big"),   // path of the hi-res version of the image
                lensShape: "square",                // shape of the lens (circle/square)
                lensSize: 180,                  // size of the lens (in px)
                borderSize: 0,                  // size of the lens border (in px)
                borderColor: "#fff",                // color of the lens border (#hex)
                borderRadius: 0,                // border radius (optional, only if the shape is square)
                overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
            });

    })
    var scroll = 0;
    $('.arrow-img-down').click(function() {
        scroll += 50;
        console.log(scroll);
        $('.content-imgs').scrollTop($('.content-imgs').offset().top  - scroll);

    });

    $('.arrow-img-up').click(function() {
        scroll += 50;
        console.log(scroll);
        $('.content-imgs').scrollTop($('.content-imgs').offset().top  + scroll);

    });
});


