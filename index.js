
$(document).ready(function(){
  $('.textDiv').hide();
  $('.imgDiv').on('mouseenter', function(){
    $('.textDiv').slideDown(500);

  });
  $('.imgDiv').on('mouseleave', function(){
    $('.textDiv').slideUp(200);
  });
});
  $(document).ready(function(){
    $('.textDiv1').hide();
    $('.imgDiv1').on('mouseenter', function(){
      $('.textDiv1').slideDown(500);

    });
    $('.imgDiv1').on('mouseleave', function(){
      $('.textDiv1').slideUp(200);
    });
});
  $(document).ready(function(){
    $('.textDiv2').hide();
    $('.imgDiv2').on('mouseenter', function(){
      $('.textDiv2').slideDown(500);

    });
    $('.imgDiv2').on('mouseleave', function(){
      $('.textDiv2').slideUp(200);
    });
});

    $(document).ready(function(){
      $('.textDiv3').hide();
      $('.imgDiv3').on('mouseenter', function(){
        $('.textDiv3').slideDown(500);

      });
      $('.imgDiv3').on('mouseleave', function(){
        $('.textDiv3').slideUp(200);
      });
});

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
