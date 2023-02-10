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
    /*  if (n == (x.length - 1)) {          $('.form .title').removeClass('d-block').addClass('d-none');          $('.buttons').removeClass('d-flex').addClass('d-none');      } else {          $('.form .title').removeClass('d-none').addClass('d-block');          $('.buttons').removeClass('d-none').addClass('d-flex');      }*/

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

    // A loop that checks every input form-control field in the current tab: 

    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            // y[i].className += "invalid ";
            // and set the current valid status to false
            valid = false;
        }

        if (!valid) {
            z[i].className += " d-block";
        } else {
            z[i].classList.remove('d-block');
        }
    }

    return valid; // return the valid status
}

