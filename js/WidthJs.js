
	    $(document).ready(function () {

	     $(".mn1").css("display", "none");
         $(".mn2").css("display", "none");
         
        var w = $(window).width();


        if (w<435) {
           $(".wrapper").css("width", "95%");
           $(".wrapper").css("margin", "auto"); 
           $(".right_side").css("float", "none"); 
           $(".right_side").css("display", "block"); 
           $(".right_side").css("margin-left", "20px");  
         
          }    


          if (w<660) { 
           $(".menu ul li").css("width", "80%");
           $(".menu ul").css("padding", "25px");
           $(".menu").css("padding", "0px");
           $(".menu").css("height", "40px");
           $(".menu").css("overflow", "hidden");
           
           $(".mn1").css("display", "block");
           

           var mh=$(".menu").height();

           $(".mn1").click(function(){
           
           $(".mn1").css("display","none");
           $(".mn2").css("display","block");

 
           	$(".menu").css("height", "200px");
            });

           $(".mn2").click(function(){
           
           $(".mn2").css("display","none");
           $(".mn1").css("display","block");

           $(".menu").css("height", "40px");

            });

    
           $(".menu ul li").css("display", "block"); 
           $(".menu ul li").css("margin-bottom", "10px");
           $(".menu ul li").css("margin-top", "10px");
           $(".menu ul li").css("text-align", "left");  
           $(".menu ul li").css("padding-left", "15px"); 

        } 
    


	    });
