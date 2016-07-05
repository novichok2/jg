var h_hght = 150; // высота шапки
var h_mrg = 10;    // отступ когда шапка уже не видна    

       
                 
$(function(){ 
    var elem = $('#menuScroll');
    var top = $(this).scrollTop();    
    var h_max = $(document).outerHeight(true) - $('footer').height() - $('#addFoter').height();
    var h_menu = $('#menuScroll').height();
    var left = $(this).scrollLeft();
    //alert(h_max);  
    //alert($(document).outerHeight(true));      
     
    if(top > h_hght){        
        elem.css('top', h_mrg);
    }           
     
    $(window).scroll(function(){
        top = $(this).scrollTop();
        left = $(this).scrollLeft();         
        if (top+h_mrg < h_hght) {
            elem.css('top', (h_hght-top));
            elem.css('left', (-left));
        } else{
            elem.css('top', h_mrg);
            elem.css('left', (-left));
        };
    
	//var clientHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
	//var documentHeight = document.documentElement.scrollHeight ? document.documentElement.scrollHeight : document.body.scrollHeight;
	//var scrollTop = window.pageYOffset ? window.pageYOffset : (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);

    //if((documentHeight - clientHeight) <= scrollTop)
	if( h_max - h_menu - h_mrg - 100 <= $(this).scrollTop())
     {
	 elem.hide();
	 }
	else{
		elem.show();
	 };

    });


});