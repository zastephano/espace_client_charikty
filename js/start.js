 $(document).ready(function () {



         
        var w = $(window).width();

        if (w<435) {
           $(".wrapperr").css("width", "95%");
           $(".wrapperr").css("margin", "auto"); 
           $(".right_side").css("float", "none"); 
           $(".right_side").css("display", "block"); 
           $(".right_side").css("margin-left", "20px");  
         
          }        



         var getUrlParameter = function getUrlParameter(sParam) {
          var sPageURL = decodeURIComponent(window.location.search.substring(1)),
          sURLVariables = sPageURL.split('&'),
          sParameterName,
          i;

           for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
                }
           }
        };


        if (getUrlParameter('choice')!=undefined )
        {   
        	var ch=getUrlParameter('choice').replace(/\+/g, ' ');
        	
        	if (ch==="SARL AU") 
        	{

        		window.location.replace("sarl-au.php");
        	}
        }

	    });