<style>
.star{display: inline-block;color: #F0F0F0;text-shadow: 0 0 1px #666666;font-size:30px;}
.highlight, .selected {color:#F4B30A;text-shadow: 0 0 1px #F48F0A;}
	
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function highlightStar(obj) {
	removeHighlight();		
	$('.star').each(function(index) {
		$(this).addClass('highlight');
		if(index == $(".star").index(obj)) {
			return false;	
		}
	});
}

function removeHighlight() {
	$('.star').removeClass('selected');
	$('.star').removeClass('highlight');
}

function addRating(obj) {
	$('.star').each(function(index) {
		$(this).addClass('selected');
		$('#rating').val((index+1));
		if(index == $(".star").index(obj)) {
			return false;	
		}
	});
}

function resetRating() {
	if($("#rating").val()) {
		$('.star').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $("#rating").val()) {
				return false;	
			}
		});
	}
}
</script>
<input type="hidden" name="rating" id="rating" />
<ul onMouseOut="resetRating();">
  <li class="star" onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
  <li class="star" onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
  <li class="star" onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
  <li class="star" onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
  <li class="star" onmouseover="highlightStar(this);" onmouseout="removeHighlight();" onClick="addRating(this);">&#9733;</li>
</ul>
<?php

?>