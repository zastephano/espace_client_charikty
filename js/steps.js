

	    $(document).ready(function () {
          var w = $(window).width();
	        

        if (w<740) {
           
           $(".wrapper").css("width", "93%"); 
           $(".wrapper").css("margin-left", "5px");
          
           /*
           $(".right_side").css("float", "none"); 
           $(".right_side").css("display", "block"); 
           $(".right_side").css("margin-left", "20px");*/ 
           
          }  

          if (w<500) {
           
           $(".messgeTXT").css("width", "80%");
           $(".messgeTXT").css("padding", "10px"); 
           $(".messgeTXT").css("font-size", "13px"); 
            

           $(".right_side").css("float", "none"); 
           $(".right_side").css("display", "block"); 
           $(".right_side").css("margin-left", "20px");  	

           $(".nextBTN").css("position", "relative");
           $(".nextBTN").css("right", "0px");
           $(".nextBTN").css("top", "19px");

           $(".prevBTN").css("position", "relative");
           $(".prevBTN").css("left", "0px");
           $(".prevBTN").css("top", "15px");
           $(".prevBTN").css("bottom", "15px");


           $(".wrapper").css("width", "93%"); 
           $(".wrapper").css("margin-left", "5px");
          
           
           $(".container td").css("display", "block");
       

           $(".container td").attr('colSpan',1);
          

           $(".container select").css("width", "100%");
            $(".container input[type='text']").css("width", "100%");

          
           /*
           $(".right_side").css("float", "none"); 
           $(".right_side").css("display", "block"); 
           $(".right_side").css("margin-left", "20px");*/ 
           
          }  	



	    	
        $('.popUP').hide();


        $('.activite').change(function() {
          var g=$('option:selected', this).attr('data-text');
          
          $(".descriptionTXT").val(g);
         });
 
        $('.close').click(function() {
            
                  $(".popUP").fadeOut();
                  $('.messgeTXT').css("opacity","0");
                  $('.messgeTXT').css("margin","-50px auto");
                

               });

        $(".checkbox").change(function() {
                 if(this.checked) {
                       $('.lbl1').css("display","none");
                       $('.lbl2').css("display","block");
                        }
                  if(!this.checked) {
                       $('.lbl2').css("display","none");
                       $('.lbl1').css("display","block");
                        }      
                     });


                $(".gerantFalse").change(function() {
                 if(this.checked) {
                       $('.case_2').css("display","block");
                        }    
                     });
                  
                 $(".gerantTrue").change(function() {
                 if(this.checked) {
                       $('.case_2').css("display","none");
                        }    
                     });
  

               $('#msg1').click(function() {
            
                 $('.messgeTXT label').text("Une société peut avoir, comme dénomination sociale, tout terme librement choisi par les associés, qui souvent fait référence à l'activité de l'entreprise.");
                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });

               $('#msg2').click(function() {
                 
                 $('.messgeTXT label').text( "" );
                 $('.messgeTXT label').append( "Lors de sa création, une société peut choisir en plus de sa dénomination sociale :<br>   <br><span style='font-weight:500;'>Un nom commercial </span>: nom utilisé pour la communication commerciale. N’indiquez le nom commercial que lorsqu’il est différent du nom de la société.   <br><span style='font-weight:500;'>Une enseigne commerciale </span>: nom affiché sur la façade d’un magasin ou d’un site internet. N’indiquez l’enseigne commerciale que lorsqu’elle est différente du nom de la société.   <br><span style='font-weight:500;'>Un sigle </span>: Nom abrégé de la société correspondant à ses initiales." );

                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });

               $('#msg3').click(function() {
            
                 $('.messgeTXT label').text("L’EURL est constituée d’un associé unique.Il peut s'agir d’une personne physique ou morale..");
                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });

               $('#msg4').click(function() {
                 
                 $('.messgeTXT label').text( "" );
                 $('.messgeTXT label').append( "Le siège social est à votre société, ce que votre domicile est pour vous. Il peut être fixé :<br>   <br>Au domicile de son représentant légal (gérant/président).   <br>Dans une société de domiciliation : il faut alors conclure un contrat de domiciliation.   <br>Dans un local commercial : il s’agit alors de conclure un bail commercial.   <br>Dans des locaux occupés par une autre entreprise ou par un particulier : il s’agit alors d’établir une attestation de mise à disposition." );

                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });


               $('#msg5').click(function() {
                 
                 $('.messgeTXT label').text( "" );
                 $('.messgeTXT label').append( "L’objet social sert à préciser le type d’activité que l’entreprise va exercer. Il doit être complet, précis et éviter les ambiguïtés car les activités de l’entreprise sont limitées par ce qui est défini dans l’article des statuts." );

                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });


               $('#msg6').click(function() {
                 
                 $('.messgeTXT label').text( "" );
                 $('.messgeTXT label').append( "Le montant du capital social est librement fixé par les associés et doit être au minimum d’1 euro." );

                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               });


               $('#msg7').click(function() {
                 
                 $('.messgeTXT label').text( "" );
                 $('.messgeTXT label').append( "L'EURL est administrée par un ou plusieurs gérants, personnes physiques, associés ou non." );

                 
                  $(".popUP").fadeIn();
                  $('.messgeTXT').css("opacity","1");
                  $('.messgeTXT').css("margin","50px auto");
                

               }); 

              

        


        /*GET PARAMETERS FROM URL FUNCTION*/  
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
        /*...............................*/


      
          
          
  
                if (getUrlParameter('number_step')!=undefined) 
                	{  
                     

                		if (getUrlParameter('next')!=undefined) {


                     

                		var position = getUrlParameter('number_step'); 

                		
                		if (position==="first" ) 
                			{
                			  if (getUrlParameter('civilite_associe')!=undefined && getUrlParameter('nom_associe')!=undefined && getUrlParameter('prenom_associe')!=undefined && getUrlParameter('adresse_associe')!=undefined && getUrlParameter('code_postal_associe')!=undefined && getUrlParameter('ville_associe')!=undefined && getUrlParameter('jour_naissance_associe')!=undefined && getUrlParameter('mois_naissance_associe')!=undefined && getUrlParameter('annee_naissance_associe')!=undefined && getUrlParameter('lieu_naissance_associe')!=undefined && getUrlParameter('nationalite_associe')!=undefined && getUrlParameter('type_identifiant_associe')!=undefined && getUrlParameter('code_identifiant_associe') != undefined) 
                			  {



                                if (getUrlParameter('nom_associe').replace(/\+/g, ' ')!='' && getUrlParameter('prenom_associe').replace(/\+/g, ' ')!='' && getUrlParameter('adresse_associe').replace(/\+/g, ' ')!='' && getUrlParameter('code_postal_associe').replace(/\+/g, ' ')!='' && getUrlParameter('ville_associe').replace(/\+/g, ' ')!='' && getUrlParameter('jour_naissance_associe')!='Jour' && getUrlParameter('mois_naissance_associe')!='Mois' && getUrlParameter('annee_naissance_associe').replace(/\+/g, ' ')!='' && getUrlParameter('lieu_naissance_associe').replace(/\+/g, ' ')!='' && getUrlParameter('nationalite_associe').replace(/\+/g, ' ')!='' && getUrlParameter('type_identifiant_associe').replace(/\+/g, ' ')!='Type' && getUrlParameter('code_identifiant_associe').replace(/\+/g, ' ')!='') 
                                   {
                         var civilite_associe = getUrlParameter('civilite_associe');
                			   var nom_associe = getUrlParameter('nom_associe').replace(/\+/g, ' ');
                			   var prenom_associe = getUrlParameter('prenom_associe').replace(/\+/g, ' ');
                			   var adresse_associe = getUrlParameter('adresse_associe').replace(/\+/g, ' ');
                			   var code_postal_associe = getUrlParameter('code_postal_associe').replace(/\+/g, ' ');
                			   var ville_associe = getUrlParameter('ville_associe').replace(/\+/g, ' ');
                			   var jour_naissance_associe = getUrlParameter('jour_naissance_associe');
                			   var mois_naissance_associe = getUrlParameter('mois_naissance_associe');
                			   var annee_naissance_associe = getUrlParameter('annee_naissance_associe').replace(/\+/g, ' ');
                			   var lieu_naissance_associe = getUrlParameter('lieu_naissance_associe').replace(/\+/g, ' ');
                			   var nationalite_associe = getUrlParameter('nationalite_associe').replace(/\+/g, ' ');
                			   
                			   var type_identifiant_associe = getUrlParameter('type_identifiant_associe');
                			   var code_identifiant_associe = getUrlParameter('code_identifiant_associe').replace(/\+/g, ' ');
                			   

                			   localStorage.setItem("civilite_associe", civilite_associe);
                			   localStorage.setItem("nom_associe", nom_associe);
                			   localStorage.setItem("prenom_associe", prenom_associe);
                			   localStorage.setItem("adresse_associe", adresse_associe);
                			   localStorage.setItem("code_postal_associe", code_postal_associe);
                			   localStorage.setItem("ville_associe", ville_associe);
                			   localStorage.setItem("jour_naissance_associe", jour_naissance_associe);
                			   localStorage.setItem("mois_naissance_associe", mois_naissance_associe);
                			   localStorage.setItem("annee_naissance_associe", annee_naissance_associe);
                			   localStorage.setItem("lieu_naissance_associe", lieu_naissance_associe);
                			   localStorage.setItem("nationalite_associe", nationalite_associe);
                			   
                			   localStorage.setItem("type_identifiant_associe", type_identifiant_associe);
                			   localStorage.setItem("code_identifiant_associe", code_identifiant_associe);

                			   //alert(adresse_associe);

                			   
                			  
          		                $('.step1').hide();
                                $('.step2').show();
                                $('.step3').hide();
                                $('.step4').hide();
                                $('.step5').hide();
                                $('.step6').hide();
                                $('.step7').hide();
                                $('.step8').hide();

        
                                $('.state_1 ').css("color","#4661A7");
                                $('.state_1 .state_indicator').css("background","#4661A7");
                                $('.state_1 .state_line').css("background","#4661A7");

                                $('.state_2').css("color","#4661A7");
                                $('.state_2 .state_indicator').css("background","#4661A7");
                                $('.state_2 .state_line').css("background","#4661A7"); 

                                   }
                                    else{
                			  	 /*alert('fill')*/
                                $('.step1').show();
                                $('.step2').hide();
                                $('.step3').hide();
                                $('.step4').hide();
                                $('.step5').hide();
                                $('.step6').hide();
                                $('.step7').hide();
                                $('.step8').hide();

        
                                $('.state_1').css("color","#4661A7");
                                $('.state_1 .state_indicator').css("background","#4661A7");
                                $('.state_1 .state_line').css("background","#4661A7");

                                
                			  };
                                

                                


                			  }
                			  else{
                			  	/*alert('fill')*/
                                $('.step1').show();
                                $('.step2').hide();
                                $('.step3').hide();
                                $('.step4').hide();
                                $('.step5').hide();
                                $('.step6').hide();
                                $('.step7').hide();
                                $('.step8').hide();

        
                                $('.state_1').css("color","#4661A7");
                                $('.state_1 .state_indicator').css("background","#4661A7");
                                $('.state_1 .state_line').css("background","#4661A7");

                                
                			  };

          		               
                              //alert(name);	
                			};

                     
                		if (position==="second") 
                			{
                			 
                       

                        var nom_societe = getUrlParameter('nom_societe').replace(/\+/g, ' ');
                        var denomination_1 = getUrlParameter('Denomination_1').replace(/\+/g, ' ');
                        var denomination_2 = getUrlParameter('Denomination_2').replace(/\+/g, ' ');

                         
                         
                         if (nom_societe!=undefined && nom_societe!='' && denomination_1!=undefined && denomination_1!='' && denomination_2!=undefined && denomination_2!='') 
                          {
                            localStorage.setItem("nom_societe", nom_societe);
                            localStorage.setItem("denomination_1", denomination_1);
                            localStorage.setItem("denomination_2", denomination_2);
                            
                              $('.step2').hide();
                			        $('.step1').hide();
          		                $('.step3').show();
          		                $('.step4').hide();
          		                $('.step5').hide();
                              $('.step6').hide();
                              $('.step7').hide();
                              $('.step8').hide();

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		              $('.state_3').css("color","#4661A7");
          		              $('.state_3 .state_indicator').css("background","#4661A7");
          		              $('.state_3 .state_line').css("background","#4661A7"); 
                               
                          };
                         if (nom_societe===undefined || nom_societe==='') 
                          {
                            alert('entrez nom de société');
                            $('.step2').show();
                            $('.step1').hide();
                            $('.step3').hide();
                            $('.step4').hide();
                            $('.step5').hide();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            
                          };
                			};

                		
                		if (position==="third") 
                			{

                        
                        if (getUrlParameter('adresse_siege_social')!=undefined && getUrlParameter('code_postal_siege_social')!=undefined && getUrlParameter('ville_siege_social')!=undefined && getUrlParameter('emplacement_siege_social')!=undefined) 
                        {


                         if (getUrlParameter('adresse_siege_social').replace(/\+/g, ' ')!='' && getUrlParameter('emplacement_siege_social').replace(/\+/g, ' ')!='Emplacement siège social' && getUrlParameter('code_postal_siege_social').replace(/\+/g, ' ')!='' && getUrlParameter('ville_siege_social').replace(/\+/g, ' ')!='') 
                                   {
                            
                        var adresse_siege_social = getUrlParameter('adresse_siege_social').replace(/\+/g, ' ');
                        var code_postal_siege_social = getUrlParameter('code_postal_siege_social').replace(/\+/g, ' ');
                        var ville_siege_social = getUrlParameter('ville_siege_social').replace(/\+/g, ' ');
                        var emplacement_siege_social = getUrlParameter('emplacement_siege_social').replace(/\+/g, ' ');
                        
                        localStorage.setItem("adresse_siege_social", adresse_siege_social);
                        localStorage.setItem("code_postal_siege_social", code_postal_siege_social);
                        localStorage.setItem("ville_siege_social", ville_siege_social);
                        localStorage.setItem("emplacement_siege_social", emplacement_siege_social);

                        $('.step3').hide();
                        $('.step1').hide();
                        $('.step2').hide();
                        $('.step4').show();
                        $('.step5').hide();
                        $('.step6').hide();
                        $('.step7').hide();
                        $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                          }
                          else
                        {

                          alert('fill');
                        $('.step3').show();
                        $('.step1').hide();
                        $('.step2').hide();
                        $('.step4').hide();
                        $('.step5').hide();
                        $('.step6').hide();
                        $('.step7').hide();
                        $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            
                        };
                        
                     
                        }
                        else
                        {

                        alert('fill');
                        $('.step3').show();
                        $('.step1').hide();
                        $('.step2').hide();
                        $('.step4').hide();
                        $('.step5').hide();
                        $('.step6').hide();
                        $('.step7').hide();
                        $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            
                        };

                			  
          		              
                              	
                			};


                			if (position==="forth") 
                			{

                        if (getUrlParameter('activite_principal_societe')!=undefined && getUrlParameter('description_activite_principal_societe')!=undefined) 
                        {


                         if (getUrlParameter('description_activite_principal_societe').replace(/\+/g, ' ')!='' ) 
                                   {  

                                      var activite_principal_societe = getUrlParameter('activite_principal_societe').replace(/\+/g, ' ');
                                      var description_activite_principal_societe = getUrlParameter('description_activite_principal_societe').replace(/\+/g, ' ');
                        
                                      localStorage.setItem("activite_principal_societe", activite_principal_societe);
                                      localStorage.setItem("description_activite_principal_societe", description_activite_principal_societe);

                                    $('.step3').hide();
                                    $('.step1').hide();
                                    $('.step2').hide();
                                    $('.step4').hide();
                                    $('.step5').show();
                                    $('.step6').hide();
                                    $('.step7').hide();
                                    $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");
                                   }
                                   else
                                   {
                                    alert('fill');
                                    $('.step3').hide();
                                    $('.step1').hide();
                                    $('.step2').hide();
                                    $('.step4').show();
                                    $('.step5').hide();
                                    $('.step6').hide();
                                    $('.step7').hide();
                                    $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                         

                                   };

                        }
                        else
                          {          
                                    alert('fill');
                                    $('.step3').hide();
                                    $('.step1').hide();
                                    $('.step2').hide();
                                    $('.step4').show();
                                    $('.step5').hide();
                                    $('.step6').hide();
                                    $('.step7').hide();
                                    $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");
                          };  

                			   	
                			};

                			if (position==="fifth") 
                			{
                        
                        if (getUrlParameter('capital_en_chiffres')!=undefined && getUrlParameter('capital_en_letteres')!=undefined && getUrlParameter('nombre_actions')!=undefined) 
                        {


                         if (getUrlParameter('capital_en_chiffres').replace(/\+/g, ' ')!='' && getUrlParameter('capital_en_letteres').replace(/\+/g, ' ')!='' &&   getUrlParameter('nombre_actions').replace(/\+/g, ' ')!='') 
                                   {
                                     
                        var capital_en_chiffres = getUrlParameter('capital_en_chiffres');
                        var capital_en_letteres = getUrlParameter('capital_en_letteres');
                        var nombre_actions = getUrlParameter('nombre_actions');
                        
                        localStorage.setItem("capital_en_chiffres", capital_en_chiffres);
                        localStorage.setItem("capital_en_letteres", capital_en_letteres);
                        localStorage.setItem("nombre_actions", nombre_actions);

                              $('.step3').hide();
                              $('.step1').hide();
                              $('.step2').hide();
                              $('.step4').hide();
                              $('.step5').hide();
                              $('.step6').show();
                              $('.step7').hide();
                              $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");

                                   }
                                   else
                                    {
                                     alert('fill');
                                     $('.step3').hide();
                                     $('.step1').hide();
                                     $('.step2').hide();
                                     $('.step4').hide();
                                     $('.step5').show();
                                     $('.step6').hide();
                                     $('.step7').hide();
                                     $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                             

                                    };

                        }
                        else
                          {
                            alert('fill');
                                     $('.step3').hide();
                                     $('.step1').hide();
                                     $('.step2').hide();
                                     $('.step4').hide();
                                     $('.step5').show();
                                     $('.step6').hide();
                                     $('.step7').hide();
                                     $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");
                          };   
 
                			};


                			if (position==="sixth") 
                			{ 
                          ////////////////////////////////////


                          if (getUrlParameter('gerant_est_associe')==='true') 
                            {
                              $('.step3').hide();
                              $('.step1').hide();
                              $('.step2').hide();
                              $('.step4').hide();
                              $('.step5').hide();
                              $('.step6').hide();
                              $('.step7').show();
                              $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");

                            $('.state_7').css("color","#4661A7");
                            $('.state_7 .state_indicator').css("background","#4661A7");
                            $('.state_7 .state_line').css("background","#4661A7");

                            };

                            if (getUrlParameter('gerant_est_associe')==='false') 
                            {
                              

                              if (getUrlParameter('civilite_gerant')!=undefined && getUrlParameter('nom_gerant')!=undefined && getUrlParameter('prenom_gerant')!=undefined && getUrlParameter('adresse_gerant')!=undefined && getUrlParameter('code_postal_gerant')!=undefined && getUrlParameter('ville_gerant')!=undefined && getUrlParameter('jour_naissance_gerant')!=undefined && getUrlParameter('mois_naissance_gerant')!=undefined && getUrlParameter('annee_naissance_gerant')!=undefined && getUrlParameter('lieu_naissance_gerant')!=undefined && getUrlParameter('nationalite_gerant')!=undefined && getUrlParameter('situation_familiale_gerant')!=undefined && getUrlParameter('type_identifiant_gerant')!=undefined && getUrlParameter('code_identifiant_gerant') != undefined) 
                        {
                                

                                if (getUrlParameter('nom_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('prenom_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('adresse_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('code_postal_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('ville_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('jour_naissance_gerant')!='Jour' && getUrlParameter('mois_naissance_gerant')!='Mois' && getUrlParameter('annee_naissance_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('lieu_naissance_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('nationalite_gerant').replace(/\+/g, ' ')!='' && getUrlParameter('situation_familiale_gerant').replace(/\+/g, ' ')!='Situation Familiale' && getUrlParameter('type_identifiant_gerant').replace(/\+/g, ' ')!='Type' && getUrlParameter('code_identifiant_gerant').replace(/\+/g, ' ')!='') 
                                   {
                                     

                                    var civilite_gerant = getUrlParameter('civilite_gerant');
                         var nom_gerant = getUrlParameter('nom_gerant').replace(/\+/g, ' ');
                         var prenom_gerant = getUrlParameter('prenom_gerant').replace(/\+/g, ' ');
                         var adresse_gerant=getUrlParameter('adresse_gerant').replace(/\+/g, ' ');
                         var code_postal_gerant = getUrlParameter('code_postal_gerant').replace(/\+/g, ' ');
                         var ville_gerant = getUrlParameter('ville_gerant').replace(/\+/g, ' ');
                         var jour_naissance_gerant = getUrlParameter('jour_naissance_gerant');
                         var mois_naissance_gerant = getUrlParameter('mois_naissance_gerant');
                         var annee_naissance_gerant = getUrlParameter('annee_naissance_gerant').replace(/\+/g, ' ');
                         var lieu_naissance_gerant = getUrlParameter('lieu_naissance_gerant').replace(/\+/g, ' ');
                         var nationalite_gerant = getUrlParameter('nationalite_gerant').replace(/\+/g, ' ');
                         var situation_familiale_gerant = getUrlParameter('situation_familiale_gerant').replace(/\+/g, ' ');
                         var type_identifiant_gerant = getUrlParameter('type_identifiant_gerant');
                         var code_identifiant_gerant = getUrlParameter('code_identifiant_gerant').replace(/\+/g, ' ');
                         

                         localStorage.setItem("civilite_gerant", civilite_gerant);
                         localStorage.setItem("nom_gerant", nom_gerant);
                         localStorage.setItem("prenom_gerant", prenom_gerant);
                         localStorage.setItem("adresse_gerant", adresse_gerant);
                         localStorage.setItem("code_postal_gerant", code_postal_gerant);
                         localStorage.setItem("ville_gerant", ville_gerant);
                         localStorage.setItem("jour_naissance_gerant", jour_naissance_gerant);
                         localStorage.setItem("mois_naissance_gerant", mois_naissance_gerant);
                         localStorage.setItem("annee_naissance_gerant", annee_naissance_gerant);
                         localStorage.setItem("lieu_naissance_gerant", lieu_naissance_gerant);
                         localStorage.setItem("nationalite_gerant", nationalite_gerant);
                         localStorage.setItem("situation_familiale_gerant", situation_familiale_gerant);
                         localStorage.setItem("type_identifiant_gerant", type_identifiant_gerant);
                         localStorage.setItem("code_identifiant_gerant", code_identifiant_gerant);

                        $('.step3').hide();
                        $('.step1').hide();
                        $('.step2').hide();
                            $('.step4').hide();
                            $('.step5').hide();
                              $('.step6').hide();
                              $('.step7').show();
                              $('.step8').hide();
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");

                            $('.state_7').css("color","#4661A7");
                            $('.state_7 .state_indicator').css("background","#4661A7");
                            $('.state_7 .state_line').css("background","#4661A7");


                                   }
                                   else
                                   {
                                     alert('fill');
                              $('.step3').hide();
                              $('.step1').hide();
                              $('.step2').hide();
                              $('.step4').hide();
                              $('.step5').hide();
                              $('.step6').show();
                              $('.step7').hide();
                              $('.step8').hide();
                              $('.case_2').css("display","block");
                              $('.gerantFalse').attr('checked', true);
                              $('.gerantTrue').attr('checked', false);
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");
                                   };

                        }
                        else
                          {
                            alert('fill');
                              $('.step3').hide();
                              $('.step1').hide();
                              $('.step2').hide();
                              $('.step4').hide();
                              $('.step5').hide();
                              $('.step6').show();
                              $('.step7').hide();
                              $('.step8').hide();
                              $('.case_2').css("display","block");
                              $('.gerantFalse').attr('checked', true);
                              $('.gerantTrue').attr('checked', false);
                            

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");
                          };  


                            };
                          


                         ////////////////////////////////////

                      }


                			

                		
                		
                		};


                		if (getUrlParameter('prev')!=undefined) {

                		var position = getUrlParameter('number_step'); 
                		
                		 

                		if (position==="second") 
                			{
                			   

                			  $('.step2').hide();
                			  $('.step3').hide();
          		              $('.step1').show();
          		              $('.step4').hide();
          		              $('.step5').hide();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();
          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              
                              //alert(name);	
                			};

                		
                		if (position==="third") 
                			{
                			   
                			  $('.step3').hide();
                			  $('.step1').hide();
                			  $('.step4').hide();
          		              $('.step2').show();
          		              $('.step5').hide();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		                       		              
          		              
                              //alert(name);	
                			};

                		
                		if (position==="forth") 
                			{
                			  $('.step2').hide();
                			  $('.step1').hide();
                			  $('.step3').show();
          		              $('.step4').hide();
          		              $('.step5').hide();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();
          		              

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		              $('.state_3').css("color","#4661A7");
          		              $('.state_3 .state_indicator').css("background","#4661A7");
          		              $('.state_3 .state_line').css("background","#4661A7");

                			};


                			if (position==="fifth") 
                			{
                			  $('.step2').hide();
                			  $('.step1').hide();
                			  $('.step3').hide();
          		              $('.step4').show();
          		              $('.step5').hide();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();
          		              

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		              $('.state_3').css("color","#4661A7");
          		              $('.state_3 .state_indicator').css("background","#4661A7");
          		              $('.state_3 .state_line').css("background","#4661A7");

          		              $('.state_4').css("color","#4661A7");
          		              $('.state_4 .state_indicator').css("background","#4661A7");
          		              $('.state_4 .state_line').css("background","#4661A7");

                			};


                			if (position==="sixth") 
                			{
                			  $('.step2').hide();
                			  $('.step1').hide();
                			  $('.step3').hide();
          		              $('.step4').hide();
          		              $('.step5').show();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();
          		              

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		              $('.state_3').css("color","#4661A7");
          		              $('.state_3 .state_indicator').css("background","#4661A7");
          		              $('.state_3 .state_line').css("background","#4661A7");

          		              $('.state_4').css("color","#4661A7");
          		              $('.state_4 .state_indicator').css("background","#4661A7");
          		              $('.state_4 .state_line').css("background","#4661A7");

          		              $('.state_5').css("color","#4661A7");
          		              $('.state_5 .state_indicator').css("background","#4661A7");
          		              $('.state_5 .state_line').css("background","#4661A7");

                			};

                			if (position==="seventh") 
                			{
                			  $('.step2').hide();
                			  $('.step1').hide();
                			  $('.step3').hide();
          		              $('.step4').hide();
          		              $('.step5').hide();
          		              $('.step6').show();
          		              $('.step7').hide();
          		              
          		              

          		              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");

          		              $('.state_2').css("color","#4661A7");
          		              $('.state_2 .state_indicator').css("background","#4661A7");
          		              $('.state_2 .state_line').css("background","#4661A7");

          		              $('.state_3').css("color","#4661A7");
          		              $('.state_3 .state_indicator').css("background","#4661A7");
          		              $('.state_3 .state_line').css("background","#4661A7");

          		              $('.state_4').css("color","#4661A7");
          		              $('.state_4 .state_indicator').css("background","#4661A7");
          		              $('.state_4 .state_line').css("background","#4661A7");

          		              $('.state_5').css("color","#4661A7");
          		              $('.state_5 .state_indicator').css("background","#4661A7");
          		              $('.state_5 .state_line').css("background","#4661A7");

          		              $('.state_6').css("color","#4661A7");
          		              $('.state_6 .state_indicator').css("background","#4661A7");
          		              $('.state_6 .state_line').css("background","#4661A7");

          		              

                			};


                			

                		};			
                	};

                if (getUrlParameter('number_step')===undefined) 
                	{
                		      $('.step1').show();
          		              $('.step2').hide();
          		              $('.step3').hide();
          		              $('.step4').hide();
          		              $('.step5').hide();
          		              $('.step6').hide();
          		              $('.step7').hide();
          		              $('.step8').hide();

                              $('.state_1').css("color","#4661A7");
          		              $('.state_1 .state_indicator').css("background","#4661A7");
          		              $('.state_1 .state_line').css("background","#4661A7");


          		              
                	};
          
          

           
          	
          
        /*$('form').on('submit', function(event) {
               event.preventDefault();
               var name=$('.name').text();
               
              });*/
          
          /*$('form').submit(function( event ) {

          event.preventDefault();
         alert('name');
          var $form = $('form');
          var name = $form.find( "input[name='name']" ).val();
          alert('name');
 

          });  */  
        
        if (getUrlParameter('update_step1')!=undefined) 
                       {
                            $('.step2').hide();
                            $('.step1').show();
                            $('.step3').hide();
                            $('.step4').hide();
                            $('.step5').hide();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                       }
        
        if (getUrlParameter('update_step2')!=undefined) 
                       {
                            $('.step2').show();
                            $('.step1').hide();
                            $('.step3').hide();
                            $('.step4').hide();
                            $('.step5').hide();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                       }

        if (getUrlParameter('update_step3')!=undefined) 
                       {
                            $('.step2').hide();
                            $('.step1').hide();
                            $('.step3').show();
                            $('.step4').hide();
                            $('.step5').hide();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                       }               
        

        if (getUrlParameter('update_step4')!=undefined) 
                       {
                            $('.step2').hide();
                            $('.step1').hide();
                            $('.step3').hide();
                            $('.step4').show();
                            $('.step5').hide();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                       } 


          if (getUrlParameter('update_step5')!=undefined) 
                       {
                            $('.step2').hide();
                            $('.step1').hide();
                            $('.step3').hide();
                            $('.step4').hide();
                            $('.step5').show();
                            $('.step6').hide();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                       }   


            if (getUrlParameter('update_step6')!=undefined) 
                       {
                            $('.step2').hide();
                            $('.step1').hide();
                            $('.step3').hide();
                            $('.step4').hide();
                            $('.step5').hide();
                            $('.step6').show();
                            $('.step7').hide();
                            $('.step8').hide();

                            $('.state_1').css("color","#4661A7");
                            $('.state_1 .state_indicator').css("background","#4661A7");
                            $('.state_1 .state_line').css("background","#4661A7");

                            $('.state_2').css("color","#4661A7");
                            $('.state_2 .state_indicator').css("background","#4661A7");
                            $('.state_2 .state_line').css("background","#4661A7");

                            $('.state_3').css("color","#4661A7");
                            $('.state_3 .state_indicator').css("background","#4661A7");
                            $('.state_3 .state_line').css("background","#4661A7");

                            $('.state_4').css("color","#4661A7");
                            $('.state_4 .state_indicator').css("background","#4661A7");
                            $('.state_4 .state_line').css("background","#4661A7");

                            $('.state_5').css("color","#4661A7");
                            $('.state_5 .state_indicator').css("background","#4661A7");
                            $('.state_5 .state_line').css("background","#4661A7");

                            $('.state_6').css("color","#4661A7");
                            $('.state_6 .state_indicator').css("background","#4661A7");
                            $('.state_6 .state_line').css("background","#4661A7");

                       }                                       
 
          


	    });