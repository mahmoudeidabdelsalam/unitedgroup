$(document).ready(function () {

  $(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 100,
    items: 3,
    loop: true,
    nav: true,
    responsive: {
      0: {
        items: 1,
        dots: false
      },
      485: {
        items: 2,
        dots: false
      },
      728: {
        items: 3,
        dots: false
      },
      960: {
        items: 3,
        dots: false
      },
      1200: {
        items: 3,
        dots: true
      },
    }
  });
  /** */
  const currentlocation = location.href;
  const menuitem = document.querySelectorAll('.navbar-nav .nav-link');
  const menulength = menuitem.length
  for (let i = 0; i < menulength; i++) {
    if (menuitem[i].href === currentlocation) {
      menuitem[i].className = "active"
    }
  }

  $('.multi-item-carousel').carousel({
    interval: false
  });

});

/*nav*/
$(window).on('scroll', function () {
  if ($(window).scrollTop()) {
    $('.navbar-index').addClass('chang');



  } else {
    $('.navbar-index').removeClass('chang');

  }
})
// ******************VIDEO*****************************

var myVideo = document.getElementById('exampleVideo');

$(".wrap-video").on('click', function () {
  // debugger;
  if (myVideo.paused) {
    $("#video-play").hide();
    myVideo.play();
    console.log('Video Playing');
  } else {
    myVideo.pause();
    $("#video-play").show();
    console.log('Video Paused');
  }
});
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
/*** */
//     var slideIndex = 1;
$('.dropdown-menu a.dropdown-togglee').on('click', function (e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
    $('.dropdown-submenu .show').removeClass("show");
  });

  return false;
});


/****file-uploud */
var input = document.getElementById('file-upload');
var infoArea = document.getElementById('file-upload-filename');

// input.addEventListener( 'change', showFileName );

// function showFileName( event ) {

//   // the change event gives us the input it occurred in 
//   var input = event.srcElement;

//   // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
//   var fileName = input.files[0].name;

//   // use fileName however fits your app best, i.e. add it into a div
//   infoArea.textContent = 'File name: ' + fileName;
// }


// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.



document.addEventListener("DOMContentLoaded", function () {
  // make it as accordion for smaller screens
  if (window.innerWidth > 992) {

    document.querySelectorAll('.navbar-nav .nav-item').forEach(function (everyitem) {

      everyitem.addEventListener('mouseover', function (e) {

        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.add('show');
          nextEl.classList.add('show');
        }

      });
      everyitem.addEventListener('mouseleave', function (e) {
        let el_link = this.querySelector('a[data-bs-toggle]');

        if (el_link != null) {
          let nextEl = el_link.nextElementSibling;
          el_link.classList.remove('show');
          nextEl.classList.remove('show');
        }


      })
    });

  }
  // end if innerWidth
});
// DOMContentLoaded  end

