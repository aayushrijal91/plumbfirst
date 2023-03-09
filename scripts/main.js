// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function setTime() {
    const now = new Date();

    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    let period = 'am';
    if (now.getHours() >= 12) {
        period = 'pm';
    }
    if (now.getHours() > 12) {
        hours = now.getHours() - 12;
    } else {
        hours = now.getHours();
    }

    $('#time').text(hours + ':' + padZeroes(minutes) + ':' + padZeroes(seconds) + ' ' + period);

    function padZeroes(num) {
        return ('0' + num).slice(-2);
    }
}

setInterval(setTime, 1000);

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});