let burger = document.getElementById('burger'),
    nav = document.getElementById('main-nav');


burger.addEventListener('click', function (e) {
    this.classList.toggle('is-open');
    nav.classList.toggle('is-open');
});

$(document).ready(function () {
    $(".text .line span").on('click', function () {

        $(".img .front, .img .back").css({
            "transform": "scale(.3)",
            "transition": "all ease 0.5s"
        })
        var imgSrc = $(this).attr("data-src");

        setTimeout(function () {
            $(".img .front, .img .back").css("transform", "scale(1)")
            $(".img .front, .img .back").attr("src", imgSrc)

        }, 700)
    })
})
//owl Carousel
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        center:true,
        nav:true,
        navText:[
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
            },
            1000:{
                items:3,
            }
        }
    })
})
//sticky navbar
$(window).scroll(function(){
    if ($(window).scrollTop() >= 20) {
        $('.header_container').addClass('sticky-header');
        $('.scroll_up').css('bottom','2rem')
    }
    else {
        $('.header_container').removeClass('sticky-header');
        $('.scroll_up').css('bottom','-10rem')
    }
});
//contact focus input
const inputs = document.querySelectorAll('.input');
function focusFunc(){
    let parent = this.parentNode;
    parent.classList.add('focus');
}
function blurFunc(){
    let parent = this.parentNode;
    if(this.value == ""){
    parent.classList.remove('focus');
    }
}
inputs.forEach(input => {
    input.addEventListener('focus',focusFunc);
    input.addEventListener('blur',blurFunc);
})