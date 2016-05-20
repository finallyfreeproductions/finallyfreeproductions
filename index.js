// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
// var btn = document.getElementById("boris1");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
// $('#boris1').on('click', function(){
//    modal.style.display = "block";
// });
// btn.onclick = function() {
//     modal.style.display = "block";
// }
$(document).on('click', '#boris1', function(){
    modal.style.display = "block";
})
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


$(document).on('mouseenter', '#boris1', function(){$(this).addClass('underline')})
$(document).on('mouseleave', '#boris1', function(){$(this).removeClass('underline')})

$(document).on('mouseenter', '#boris2', function(){$(this).addClass('underline')})
$(document).on('mouseleave', '#boris2', function(){$(this).removeClass('underline')})

$(document).on('mouseenter', '#boris3', function(){$(this).addClass('underline')})
$(document).on('mouseleave', '#boris3', function(){$(this).removeClass('underline')})
//==============================================================================================
$(document).on('click', ".carousel-button-right",function(){
	var carusel = $(this).parents('.carousel');
	right_carusel(carusel);
	return false;
});
$(document).on('click',".carousel-button-left",function(){
	var carusel = $(this).parents('.carousel');
	left_carusel(carusel);
	return false;
});
function left_carusel(carusel){
   var block_width = $(carusel).find('.carousel-block').outerWidth();
   $(carusel).find(".carousel-items .carousel-block").eq(-1).clone().prependTo($(carusel).find(".carousel-items"));
   $(carusel).find(".carousel-items").css({"left":"-"+block_width+"px"});
   $(carusel).find(".carousel-items .carousel-block").eq(-1).remove();
   $(carusel).find(".carousel-items").animate({left: "0px"}, 200);

}
function right_carusel(carusel){
   var block_width = $(carusel).find('.carousel-block').outerWidth();
   $(carusel).find(".carousel-items").animate({left: "-"+ block_width +"px"}, 200, function(){
	  $(carusel).find(".carousel-items .carousel-block").eq(0).clone().appendTo($(carusel).find(".carousel-items"));
      $(carusel).find(".carousel-items .carousel-block").eq(0).remove();
      $(carusel).find(".carousel-items").css({"left":"0px"});
   });
}

$(function() {
	auto_right('.carousel:first');
})

function auto_right(carusel){
	setInterval(function(){
		if (!$(carusel).is('.hover'))
			right_carusel(carusel);
	}, 3000)
}
$(document).on('mouseenter', '.carousel', function(){$(this).addClass('hover')})
$(document).on('mouseleave', '.carousel', function(){$(this).removeClass('hover')})
