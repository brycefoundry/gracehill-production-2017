jQuery(function($){

	$(document).ready(function(){
			

		GlobalUi = function(){
			//Mobile Menu Button
			$('#menu-btn').click(function(){
					$(this).toggleClass('open');
					$("header").toggleClass('open');
			});

			$('#global-nav-list li').click(function(){
				$('#menu-btn').toggleClass('open');
				$('header').toggleClass('open');
			});

			$('#footer-contact').click(function(){
				$('.modal.contact').removeClass('close').addClass('open');
			});

			$('button.close-modal-button').click(function(){
				$('.modal.contact').addClass('close').removeClass('open');
			});

			$('#support-button').click(function(){
				$('.modal.support').removeClass('close').addClass('open');

			});

			 $('#state').select2({
			 	placeholder: "Select a state",
			 	minimumResultsForSearch: Infinity
			 });

			 $('#units').select2({
			 	placeholder: "# of Units",
			 	minimumResultsForSearch: Infinity
			 });

			 $('#customer-current').select2({
			 	placeholder: "Select an Option",
			 	minimumResultsForSearch: Infinity
			 });

			 if($('body.page-template-default select').length){
				$('body.page-template-default select').select2();
			}

			 $(".sf-form-container form").validate({
			 	errorPlacement: function(error, element) {
			 		if (element.attr("name") == "state"){
			 			$('span.select2-container').addClass('error');
			 		}

			 		$('p.error-message').removeClass('hide');
			 		$('p.intro').addClass('hide');
			 	}
			 });


			 if($('#demo-form').length){
			 	$('#demo-form').append('<input maxlength="40" class="spambots" name="spambots" size="20" type="text" />');
			 }
			
			if($('body').hasClass('page-template-products')){
				ProductsUI();

			}

			if($('body').hasClass('home')){
				
			}

			if($('body').hasClass('page-template-faq')){
				FaqUI();
			}

			if($('body').hasClass('page-template-support')){
				SupportUI();
			}

			if($('section.cover-masthead').length){
				loadMasthead();
			}else{

			}

			if($('body.single-support').length){
				SupportPost();
			}else{

			}			

			if($('.animated').length){
				InPageAnimation();
			}
				
			if($('body').hasClass('events-template-default')){
				landingUI();
			}

			if($('body').hasClass('page-template-vantage-download')){
				vantageUI();
			}

			$('.disable-link').click(function(e){

				e.preventDefault();
			});


			if(window.location.hash) {
		      var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
		      if(hash=="contact"){
		      	setTimeout(function(){
		      		$('.modal.contact').removeClass('close').addClass('open');
		      	},300);
		      }
		      
			  } else {
			  
			  }

			  	if(window.location.hash) {
			        var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
			        if(hash=="thankyou-vantage"){
			        	setTimeout(function(){
			        		$('#vantage-thankyou-container .wrap').addClass('animate');
			        		$('#vantage-thankyou-container').removeClass('disable');
			        	},300);
			        }
			        
			  	  } else {
			  	  
			  	  }

			  	  $('#confirm-vantage').click(function(){
			  	  	$('#vantage-thankyou-container .wrap').removeClass('animate');
			  	  	$('#vantage-thankyou-container').addClass('disable');
			  	  });

		}

		landingUI = function(){
			
			var waypoint = new Waypoint({
			  element: document.getElementById('salesforceform'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		$('#salesforceform').addClass('sticky');
			  	}else{
			  		
			  		$('#salesforceform').removeClass('sticky');
			  	}
			  
			  },
			  offset: 0
			})

			

			var ppWaypoint = $('body').waypoint(function(direction) {
			    //check the direction
			    if(direction == 'down') {
			        $('#salesforceform').removeClass('sticky');
			  		$('#salesforceform').addClass('bottom');
			        
			    }else{
			    	$('#salesforceform').addClass('sticky');
			    	$('#salesforceform').removeClass('bottom');
			    }
			}, {
			    //Set the offset
			    offset: '-900'
			});
		}

		vantageUI = function(){
			
			var waypoint = new Waypoint({
			  element: document.getElementById('salesforceform'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		$('#salesforceform').addClass('sticky');
			  	}else{
			  		
			  		$('#salesforceform').removeClass('sticky');
			  	}
			  
			  },
			  offset: 0
			})

			

			var ppWaypoint = $('body').waypoint(function(direction) {
			    //check the direction
			    if(direction == 'down') {
			        $('#salesforceform').removeClass('sticky');
			  		$('#salesforceform').addClass('bottom');
			        
			    }else{
			    	$('#salesforceform').addClass('sticky');
			    	$('#salesforceform').removeClass('bottom');
			    }
			}, {
			    //Set the offset
			    offset: '-1150'
			});
		}

		SupportPost = function(){
			var ppWaypoint = $('aside').waypoint(function(direction) {
			    //check the direction
			    if(direction == 'down') {
			       $('aside').addClass('sticky');
			  		
			        
			    }else{
			    	$('aside').removeClass('sticky');
			    	
			    }
			}, {
			    //Set the offset
			    offset: 0
			});

			var ppWaypoint = $('.comment-container').waypoint(function(direction) {
			    //check the direction
			    if(direction == 'down') {
			       
			  		$('aside').addClass('bottom');
			        
			    }else{
			    	
			    	$('aside').removeClass('bottom');
			    	
			    }
			}, {
			    //Set the offset
			    offset: '40%'
			});
		}


		loadMasthead = function(){
			var src = $('.cover-masthead').css('background-image');
			var url = src.match(/\((.*?)\)/)[1].replace(/('|")/g,'');

			var img = new Image();
			img.onload = function() {
			   	
			   	$('.cover-masthead').addClass('activate');
			}
			img.src = url;
			if (img.complete) img.onload();

			

			$("#scroll-down-btn").click(function() {

				
				var nextSection = $(this).parent().next();

			
				//$("#home-section-2").ScrollTo();

				var offset = 0; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $(nextSection).offset().top + offset
			    }, 600);

			    
			});

			$(window).scroll(function(){
			        var ScrollTop = parseInt($(window).scrollTop());
			        //console.log(ScrollTop);

			        if (ScrollTop > 10) {
			           $("#scroll-down-btn").addClass('remove');
			           
			        }else{
			        	$("#scroll-down-btn").removeClass('remove');

			        }
			    });

			//$('img').unveil();

		}

		InPageAnimation = function(){


		    var ppWaypoint = $('.animated').waypoint(function(direction) {
		        //check the direction
		        if(direction == 'down') {
		            //add the class to start the animation
		            $(this.element).addClass('show');
		            //then destroy this waypoint, we don't need it anymore
		            
		        }
		    }, {
		        //Set the offset
		        offset: '100%'
		    });

		    var ppWaypoint = $('.animated').waypoint(function(direction) {
		        //check the direction
		        if(direction == 'up') {
		            //add the class to start the animation
		            $(this.element).removeClass('show');
		            //then destroy this waypoint, we don't need it anymore
		            
		        }
		    }, {
		        //Set the offset
		        offset: '100%'
		    });



		 
		}

		SupportUI = function(){
			$('#learners-button').click(function(){
				$(this).addClass('active');
				$('#admin-button').removeClass('active');
				$('#learners-support-content').removeClass('hide');
				$('#admin-support-content').addClass('hide');
			});

			$('#admin-button').click(function(){
				$(this).addClass('active');
				$('#learners-button').removeClass('active');
				$('#learners-support-content').addClass('hide');
				$('#admin-support-content').removeClass('hide');
			});
		}

		FaqUI = function(){
			$('.faqs-list li').click(function(){
				$(this).toggleClass('collapsed');
			});
			
			$("#learners-button").click(function() {
				var offset = 0; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $("#learners").offset().top + offset
			    }, 600);
			});

			$("#admin-button").click(function() {
				var offset = 0; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $("#admin").offset().top + offset
			    }, 600);
			});

			

			var waypoint = new Waypoint({
			  element: document.getElementById('learners'),
			  handler: function(direction) {
			  	if(direction=='up'){
			  		$('#faq-nav').removeClass('sticky');
			  		$('#learners-button').removeClass('active');
			  		$('#admin-button').removeClass('active');
			  	}else{
			  		
			  		
			  	}
			  
			  },
			  offset: 0
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('page'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		$('#faq-nav').removeClass('sticky');
			  		$('#learners-button').removeClass('active');
			  		$('#admin-button').removeClass('active');
			  	}else{
			  		
			  		
			  	}
			  
			  },
			  offset: 'bottom-in-view'
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('learners'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		$('#faq-nav').addClass('sticky');
			  		$('#learners-button').addClass('active');
			  		$('#admin-button').removeClass('active');
			  	}else{
			  		//$('#faq-nav').removeClass('sticky');
			  		
			  	}
			  
			  },
			  offset: 0
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('admin'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		
			  		$('#learners-button').removeClass('active');
			  		$('#admin-button').addClass('active');
			  	}else{
			  		//$('#faq-nav').removeClass('sticky');
			  		
			  		$('#learners-button').addClass('active');
			  		$('#admin-button').removeClass('active');
			  	}
			  
			  },
			  offset: 0
			})


		}

		ProductsUI = function(){

			$("#vision-button").click(function() {
				var offset = -50; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $("#vision").offset().top + offset
			    }, 600);

	    		//$('#product-nav').removeClass('green').removeClass('orange');
	    		//$('#product-nav li').removeClass('active');
	      		//$('#product-nav li').eq(0).addClass('active');

			});

			$("#visto-button").click(function() {
				var offset = -100; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $("#visto").offset().top + offset
			    }, 600);

			  //  $('#product-nav').addClass('green').removeClass('orange');
			  // $('#product-nav li').removeClass('active');
			  //  $('#product-nav li').eq(1).addClass('active');

			});

			$("#mystery-button").click(function() {
				var offset = -70; //Offset of 0px

			    $('html, body').animate({
			        scrollTop: $("#mystery-shopper").offset().top + offset
			    }, 600);
			  //  $('#product-nav').addClass('orange').removeClass('green');
			  //  $('#product-nav li').removeClass('active');
			  //  $('#product-nav li').eq(2).addClass('active');

			});

			var waypoint = new Waypoint({
			  element: document.getElementById('product-nav'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		$('#product-nav').addClass('sticky');
			  		$('#product-nav li').removeClass('active');
			  		$('#product-nav li').eq(0).addClass('active');
			  	}else{
			  		$('#product-nav').removeClass('sticky');
			  		$('#product-nav li').removeClass('active');
			  		
			  	}
			  
			  },
			  offset: 0
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('vision'),
			handler: function(direction) {
				if(direction=='up'){
					$('#product-nav').removeClass('green').removeClass('orange');
					$('#product-nav li').removeClass('active');
			  		$('#product-nav li').eq(0).addClass('active');
				}else{

				}
			},offset: '-200%'
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('products-section-1'),
			  handler: function(direction) {
			  	if(direction=='up'){
			  		$('#product-nav').removeClass('sticky');
			  		$('#product-nav li').removeClass('active');
			  		
			  	}else{
			  		
			  		
			  	}
			  
			  },
			  offset: '0%'
			})



			var waypoint = new Waypoint({
			  element: document.getElementById('visto'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		//down
			  		$('#product-nav').addClass('green').removeClass('orange');
			  		$('#product-nav li').removeClass('active');
			  		$('#product-nav li').eq(1).addClass('active');
			  	}else{
			  		
			  	}
			  	
			  	//console.log('test');
			  },
			  offset: 200
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('visto'),
			handler: function(direction) {
				if(direction=='up'){
					$('#product-nav').addClass('green').removeClass('orange');
					$('#product-nav li').removeClass('active');
					$('#product-nav li').eq(1).addClass('active');
				}else{

				}
			},
			offset: '-150%'
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('mystery-shopper'),
			  handler: function(direction) {
			  	if(direction=='down'){
			  		//down
			  		$('#product-nav').addClass('orange').removeClass('green');
			  		$('#product-nav li').removeClass('active');
			  		$('#product-nav li').eq(2).addClass('active');
			  	}else{
			  		
			  	}
			  	
			  	//console.log('test');
			  },
			  offset: 200
			})

			var waypoint = new Waypoint({
			  element: document.getElementById('mystery-shopper'),
			handler: function(direction) {
				if(direction=='up'){
					$('#product-nav').addClass('orange').removeClass('green');
					$('#product-nav li').removeClass('active');
					$('#product-nav li').eq(2).addClass('active');
				}else{

				}
			},
			offset: '-150%'
			})


			
		}

		ResizeElements = function(){
			var viewportHeight = $(window).height();
			
			if($('body').width()>1080){
				$('section.cover-masthead').css('height','100vh');
			}else{
				$('section.cover-masthead').css('height',viewportHeight);
			}
			
			
		}





		Init = function(){
			GlobalUi();

			
			
			if($('body').width()>1080){
				$(window).bind('resize', function () {
				  ResizeElements();
				}).trigger('resize');
				
			}else{
				ResizeElements();
			}
			
				

			
			
		}

		Init();
	});


});