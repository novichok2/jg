$(document).ready(function(){
	$("#hrefContextVipad").click(function(){ 
		if ( $("#ContextVipad").css('display') == 'none' ) {
		 $("#ContextVipad").animate({height: 'show'}, 400);
		 } else {
		 $("#ContextVipad").animate({height: 'hide'}, 200);
		}
	});
});