
$(document).ready(function(){
  $('.textDiv').hide();
  $('.imgDiv').on('mouseenter', function(){
    $('.textDiv').show(400);

  });
  $('.imgDiv').on('mouseleave', function(){
    $('.textDiv').hide  (400);
  });
});
  $(document).ready(function(){
    $('.textDiv1').hide();
    $('.imgDiv1').on('mouseenter', function(){
      $('.textDiv1').show(400);

    });
    $('.imgDiv1').on('mouseleave', function(){
      $('.textDiv1').hide  (400);
    });
});
  $(document).ready(function(){
    $('.textDiv2').hide();
    $('.imgDiv2').on('mouseenter', function(){
      $('.textDiv2').show(400);

    });
    $('.imgDiv2').on('mouseleave', function(){
      $('.textDiv2').hide  (400);
    });
});

    $(document).ready(function(){
      $('.textDiv3').hide();
      $('.imgDiv3').on('mouseenter', function(){
        $('.textDiv3').show(400);

      });
      $('.imgDiv3').on('mouseleave', function(){
        $('.textDiv3').hide  (400);
      });
});


// $(document).ready(function(){
//   $('.textDiv').hide();
//   $('.imgDiv').on('mouseenter', function(){
//     // $('.textDiv').show(400);
//     run();
//   });
//   $('.imgDiv').on('mouseleave', function(){
//     $('.textDiv').hide  (400);
//   });

// });
// $(document).ready(function(){
//   $('.textDiv1').hide();
//   $('.imgDiv1').on('mouseenter', function(){
//     // $('.textDiv1').show(400);
//     run1();
//   });
//   $('.imgDiv1').on('mouseleave', function(){
//     $('.textDiv1').hide  (400);
//   });
// });
//
// $(document).ready(function(){
//   $('.textDiv2').hide();
//   $('.imgDiv2').on('mouseenter', function(){
//     // $('.textDiv2').show(400);
//     run2();
//   });
//   $('.imgDiv2').on('mouseleave', function(){
//     $('.textDiv2').hide  (400);
//   });
// });
//
// $(document).ready(function(){
//   $('.textDiv3').hide();
//   $('.imgDiv3').on('mouseenter', function(){
//     // $('.textDiv3').show(400);
//     run3();
//   });
//   $('.imgDiv3').on('mouseleave', function(){
//     $('.textDiv3').hide  (400);
//   });
// });
// // =========this is the first one below========
// function run (){
//   fadeout = setInterval(fade,600);
// }
//
// function fade(){
// $('.textDiv').show(400);
//   stop();
// }
//
// function stop(){
//   clearInterval(fadeout);
// }
// // =========this is the 2nd one below========
// function run1(){
//   fadeout1 = setInterval(fade1,600);
// }
//
// function fade1(){
// $('.textDiv1').show(400);
//   stop1();
// }
//
//
// function stop1(){
//   clearInterval(fadeout1);
// }
// // =========this is the third one below========
// function run2(){
//   fadeout2 = setInterval(fade2,600);
// }
//
// function fade2(){
// $('.textDiv2').show(400);
//   stop2();
// }
//
// function stop2(){
//   clearInterval(fadeout2);
// }
// // =========this is the fourth one below==========
// function run3(){
//   fadeout3 = setInterval(fade3,600);
// }
//
// function fade3(){
// $('.textDiv3').show(400);
//   stop3();
// }
//
// function stop3(){
//   clearInterval(fadeout3);
// }
// ========this is for the mouseenter on works page

$('#myCarousel').carousel({
  interval: 8000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});

// EVERYTHING BELOW THIS LINE IS THE JAVASCRIPT FOR THE MODAL IMAGE POPUP THINGY
$(document).on('click', '#myImg', function(){
  $('#myModal').modal();
});
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


$(document).on('click', '#myImg', function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  modalImg.alt = this.alt;
  captionText.innerHTML = this.alt;
  return false;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
