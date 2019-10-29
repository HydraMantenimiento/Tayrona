$(document).ready(function () {
    window.scroll(0, 0);
    if(!window.localStorage.getItem('modal')) {
        $('.logo').hide();
        setTimeout(function () {
            $('.container-modal').hide();
        }, 2000);

        $("#img-modal").animate({
            width: "180px",
            height: "100px",
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
    //localStorage.removeItem('modal');
});
