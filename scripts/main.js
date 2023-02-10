document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

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

let formSlick = $(".multi-step-form-slider").slick({
    slidesToScroll: 1,
    slidesToShow: 1,
    arrows: false,
    dots: false,
    autoplay: false,
    infinite: false,
    draggable: false,
    adaptiveHeight: true,
});

$('.multi-step-form input.required').after('<div class="invalid-feedback">Please fill in this field.</div>');

var currentTab = 0;

showTab(currentTab);

function showTab(n) {
    formSlick.slick('slickGoTo', n);

    var x = document.getElementsByClassName("tab");

    if (n == 0) {
        $("#prevBtn").css('display', 'none');
    } else {
        $("#prevBtn").css('display', 'inline');
    } if (n == (x.length - 1)) {
        $("#nextBtn").html('Submit');
        $("#nextBtn").addClass('form-submit');
    } else {
        $("#nextBtn").html('Next');
        $("#nextBtn").removeClass('form-submit');
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;

    if (currentTab >= x.length - 1) {
        return false;
    } else {
        currentTab = currentTab + n;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, z, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].querySelectorAll('input[type="text"], input[type="tel"], input[type="email"]');
    z = x[currentTab].getElementsByClassName("invalid-feedback");

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            valid = false;
        }

        if (!valid) {
            z[i].className += " d-block";
        } else {
            z[i].classList.remove('d-block');
        }
    }

    return valid;
}

$(".ddmenu .menui").on('click', function () {
    console.log('hit');
    $(".ddmenu .menui").removeClass("active");
    $(this).addClass("active");
    var e = $(this).attr("key");
    $(".ddmenu .submenu").removeClass("active");
    $(".ddmenu .submenu[key=" + e + "]").addClass("active");
    $(".ddmenu .submenu[key=" + e + "]").fadeTo("fast", 1);
});
