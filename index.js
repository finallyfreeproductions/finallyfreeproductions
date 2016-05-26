//
//
// $(document).on('mouseenter', '.boris1', function(){$(this).addClass('underline')})
// $(document).on('mouseleave', '.boris1', function(){$(this).removeClass('underline')})
//
//
// //==============================================================================================
//
// $(document).on('mouseenter', '.carousel', function(){$(this).addClass('hover')})
// $(document).on('mouseleave', '.carousel', function(){$(this).removeClass('hover')})
//
// // ==================================

$('#myCarousel').carousel({
  interval: 4000
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
