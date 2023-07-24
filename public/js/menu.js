// function toggle() {
//   const hamburger = document.querySelector(".hamburger");
//   const anchorLink = document.querySelector(".js-anchor-link");
//   const globalMenuSp = document.querySelector(".globalMenuSp");

//   if(hamburger) {
//     hamburger.addEventListener("click", function () {
//       hamburger.classList.toggle("active");

//       if (hamburger.classList.contains("active")) {
//         globalMenuSp.classList.add("active");
//       } else {
//         globalMenuSp.classList.remove("active");
//       }
//     });
//   }

//   if(anchorLink) {
//     anchorLink.addEventListener("click", function () {
//       if (hamburger.classList.contains("active")) {
//         hamburger.classList.remove("active");
//         globalMenuSp.classList.remove("active");
//       }
//     });
//   }
// }
// toggle();

// // toggle menu
// function toggle() {
//   const globalMenuSp = document.querySelector(".globalMenuSp");
//   const hamburger = document.querySelector(".hamburger");
//   const anchorLinks = document.querySelectorAll(".js-anchor-link");

//   function toggleMenu() {
//     hamburger.classList.toggle("active");
//     globalMenuSp.classList.toggle("active");
//   }

//   function removeMenu() {
//     hamburger.classList.remove("active");
//     globalMenuSp.classList.remove("active");
//   }

//   if (hamburger) {
//     hamburger.addEventListener("click", toggleMenu);
//     alert("hit")
//   }

//   if (anchorLinks) {
//     for (let anchorLink of anchorLinks) {
//       anchorLink.addEventListener("click", removeMenu);
//     }
//   }
// }
// toggle();

// smooth js
// $('.js-anchor-link').click(function (e) {
//     e.preventDefault();
//     var target = $($(this).attr('href'));
//     if (target.length) {
//         var scrollTo = tar္get.offset().top;
//         $('body, html').animate({ scrollTop: scrollTo + 'px' }, 800);
//     }
// });
// function smoothScroll() {
//   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//       e.preventDefault();

//       document.querySelector(this.getAttribute('href')).scrollIntoView({
//         behavior: 'smooth'
//       });
//     });
//   });
// };
// smoothScroll();

// wow animation
new WOW().init();

$(document).ready(function () {
  // experiences slide
  $('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    dots: true,
    arrows: false,
    responsive: [{
      breakpoint: 1230,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 640,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: '40px',
        slidesToShow: 1,
        dots: false
      }
    }
    ]
  });
});

// dropdown menu
window.onclick = function (event) {
  if (!event.target.matches('.dropdown-btn')) {
    var dropdowns = document.getElementsByClassName('dropdown-menu');
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.style.maxHeight === '300px') { // Make sure this value matches the max-height set in the CSS
        openDropdown.style.maxHeight = '0';
      }
    }
  }
};

// modal box 
$('.modal-toggle').on('click', function (e) {
  e.preventDefault();
  $('.modal').toggleClass('is-visible');
});
// $('.modal-toggle').on('click', function (e) {
//   e.preventDefault();
//   var targetModalId = $(this).data('target');
//   $('#' + targetModalId).toggleClass('is-visible');
// });
// $('.modal-toggle').on('click', function (e) {
//   e.preventDefault();
//   const targetModalId = $(this).data('target');
//   $(`.modal[data-modal-id="${targetModalId}"]`).toggleClass('is-visible');
// });

// preview image
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#image-preview').attr('src', e.target.result).show();
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$('#image-input').change(function () {
  readURL(this);
  $(".select-txt").addClass("txt-remove");
});




