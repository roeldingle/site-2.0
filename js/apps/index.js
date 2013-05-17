$(window).load(function() { 
	$("#status").delay(350).fadeOut(); 
	$("#preloader").delay(350).fadeOut("slow");
	var methods = getMethods();
	var events = getEvents(methods);
	events.load();
})
	
	

function getEvents(method){

	return {
	
		load: function(){
			var self = this;
			self.initialized();
			self.events();
			method.socialIconAnimate();
		},
		
		initialized: function(){
			method.flyInMenu();
			method.viewMenuContent("home");
			
			setTimeout(function(){
				$('#header h3').shuffleLetters({
					"text": $('#header h3').attr("alt")
				});
				$('#menu-list li').removeClass("animated fadeInLeftBig");
			},2000);
			
			
			method.simple_tooltip("img","tooltip");
			
		},
		
		events: function(){
			
			$("#menu-list li a").click(function(){
				$('#menu-list li ').removeClass("current");
				$('#menu-list li a').removeClass("active");
				
				$(this).parent("li").addClass("current");
				$(this).addClass("active");
				
				method.flyOutMenu();
				method.viewMenuContent($(this).attr("alt"));
				method.socialIconAnimate();
			
			});
			
			$(".menu-list-back").click(function(){
				$('#menu-list li').css("opacity","0");
				$('#menu-list li.current').css("opacity","1");
				method.flyInMenu();
				$('#menu-list li').removeClass("animated fadeOutLeftBig");
			
			});
			
			$('.mylightbox').click(function(elem) {
				elem.preventDefault();
			    method.initMylightbox(this);
			});

			$('#lightbox').live('click',function () {
			    method.hideMylightbox();
			});
		}
	}


}

function getMethods(){

	return {
		/*animate the social icons*/
        socialIconAnimate: function(){
            $('.web-icons').each(function(index){
				  var self = this;
				  setTimeout(function () {
						$(self).addClass("animated swing");
				  }, index*200);
			});
			
			setTimeout(function () {
				$('.web-icons').removeClass("animated swing");
			}, 2000);
        },
		
		flyInMenu: function(){
			
			$('#menu-list li').not(".current").each(function(index){
				  var self = this;
				  setTimeout(function () {
						$(self).addClass("animated fadeInLeftBig");
				  }, index*200);
			});
		},
		
		flyOutMenu: function(){
			
			$('#menu-list li').not(".current").each(function(index){
				  var self = this;
				  setTimeout(function () {
						$(self).addClass("animated fadeOutLeftBig");
				  }, index*200);
				  
			});
		},
		
		viewMenuContent: function(menu){
			$('.menu-content h1').shuffleLetters();
			
			$('#real-content').children("div").hide();
			$('#real-content').children("#"+menu+"-content").fadeIn("slow");
			$(".menu-list-back").show();
		},
		
		initMylightbox: function(elem){
				
			var image_href = $(elem).attr("src");
			console.log(image_href);
			var lightbox =
			'<div id="lightbox">' +
				'<p>Click to close</p>' +
				'<div id="content-lightbox">' + 
					'<img src="' + image_href +'" />' +
				'</div>' +
			'</div>';
			   
			 $(lightbox).appendTo('body').hide().fadeIn('slow');

		},

		hideMylightbox: function(){
			$('#lightbox').fadeOut("slow").remove();

		},
		
		simple_tooltip: function(target_items, name){
		 $(target_items).each(function(i){
				$("body").append("<div class='"+name+"' id='"+name+i+"'><p>"+$(this).attr('title')+"</p></div>");
				var my_tooltip = $("#"+name+i);

				if(typeof $(this).attr("title") !== 'undefined'){

					$(this).removeAttr("title").mouseover(function(){
							my_tooltip.css({opacity:0.8, display:"none"}).fadeIn(400);
					}).mousemove(function(kmouse){
							my_tooltip.css({left:kmouse.pageX+15, top:kmouse.pageY+15});
					}).mouseout(function(){
							my_tooltip.fadeOut(400);
					});

				}
			});
		}
		
	
	}


}