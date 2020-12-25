$(function() {

    var currentSlide = 0;

    var maxSlide = $('.banner-single').length;

    var delay = 5;

    initSlider();
    changeSlider();

    function initSlider() {
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for (var index = 0; index < maxSlide - 3; index++) {
            var content = $('.bullets').html();
            content += index == 0 ? "<span class='active-slider'></span>" : "<span></span>";
            $('.bullets').html(content);
        }
    }

    function changeSlider() {
        setInterval(function() {
            $('.banner-single').eq(currentSlide).stop().fadeOut(5000);
            console.log(currentSlide)
            currentSlide++;
            if (currentSlide == maxSlide) currentSlide = 0;
            $('.banner-single').eq(currentSlide).stop().fadeIn(5000);
            //trocar bullets de navegação de slide
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currentSlide).addClass('active-slider');
        }, delay * 1000);
    }

    $('body').on('click', '.bullets span', function() {
        var currentBullet = $(this);
        $('.banner-single').eq(currentSlide).stop().fadeOut(1000);
        currentSlide = currentBullet.index();
        $('.banner-single').eq(currentSlide).stop().fadeIn(1000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    })
})