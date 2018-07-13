/* SECTION PROJECTS IMAGE HOVER NEW TAB WARNING */

var linkPreviewList = document.querySelectorAll('.link-preview');

var tabWarningList = document.querySelectorAll('.tab-warning');

for (var i = 0; i < linkPreviewList.length; i++) {
    linkPreviewList[i].addEventListener('mouseover', function() {
        document.querySelector('.tab-warning.' + this.classList[1] + '-show').style.display = 'block';
    });
}

for (var i = 0; i < linkPreviewList.length; i++) {
    linkPreviewList[i].addEventListener('mouseout', function() {
        document.querySelector('.tab-warning.' + this.classList[1] + '-show').style.display = 'none';
    });
}

for (var i = 0; i < tabWarningList.length; i++) {
    tabWarningList[i].addEventListener('mouseover', function() {
        this.style.display = 'block';
    });
}

/* HEADER BUTTONS */

$('.js--scroll-to-contact').click(function() {
    $('html, body').animate({scrollTop:$('.js--section-contact').offset().top}, 1000);
});
    
$('.js--scroll-to-about').click(function() {
    $('html, body').animate({scrollTop:$('.js--section-about').offset().top}, 1000);
});

/* NAV LINKS */

$('.js--scroll-to-yelpcamp').click(function() {
    $('html, body').animate({scrollTop:$('.js--section-yelpcamp').offset().top}, 1000);
});

$('.js--scroll-to-omnifood').click(function() {
    $('html, body').animate({scrollTop:$('.js--section-omnifood').offset().top}, 1000);
});

$('.js--scroll-to-patatap').click(function() {
    $('html, body').animate({scrollTop:$('.js--section-patatap').offset().top}, 1000);
});

/* NAV BAR MINI */



document.querySelector('.js--ion-android').addEventListener('click', function() {
    $('.js--main-nav').slideToggle(200);
    document.querySelector('.js--nav-icon i').classList.toggle('ion-android-menu');
    document.querySelector('.js--nav-icon i').classList.toggle('ion-android-close');
});