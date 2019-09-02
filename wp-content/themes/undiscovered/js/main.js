(function($) {
	var UndiscoveredTheme = {
		init: function(){
			this.nav();
			this.backToTop();
			this.initGallery();
		},

		nav: function(){
			$('.main-navigation .menu').slicknav({
				label: ''
			});
		},

		backToTop: function(){
			$().UItoTop({
				inDelay: 300,
				outDelay: 200,
				scrollSpeed: 350,
				text: ''
			});
		},

		initGallery: function(){
			$('.gallery').bxSlider({
				slideSelector: '.gallery-item',
				pager: false
			});
		}
	};

	$(document).ready(function($) {
		UndiscoveredTheme.init();
	});



	$(document).ready(function($) {

     

		 loadGallery(true, 'a.borderthumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
	});

      $(document).ready(function() {

    $('#owl-meettheteam').owlCarousel({
            loop:true,
            autoplay :3000,
                    autoplaySpeed:3000,
                    navSpeed:3000,  
            navSpeed:3000,
            autoplayHoverPause:true, 
            pagination: false,
            margin:-1,
            nav:false,

         
            responsive:{
                0:{
                    items:1,
                    nav:false
                }, 
                600:{
                    items:1,
                    nav:false
                },
                1024:{
                    items:1,
                    nav:false,
                    loop:true,
                    autoplay:true,
                    autoplayTimeout:3000 
                    
                },
                1366:{
                    items:1,
                    nav:false,
                    loop:true,
                    autoplay:true,
                    autoplayTimeout:3000 
                    
                }
            }
        });
  });

      $(document).ready(function(){
        $(".contactpage-form").hide();
        $(".back-toggle").hide();
        $("#show").click(function(){
            $(".contactpage-form").animate({width:'toggle'},350);
                 //$(".contactpage-form").slideDown("fast");
                $(".contacttext").hide();
                $(".back-toggle").show();
            });

        });

       $(document).ready(function(){
     
        $(".back-toggle").click(function(){
              $(".contacttext").toggle('slow');
             $(".back-toggle").hide();
              $(".contactpage-form").hide();
            });

        });

  
})(jQuery);
