(function($){ 
	var mainslider = $(".reviews-slider");
	mainslider.owlCarousel({
		center: true,
		loop:true, //Зацикливаем слайдер
        margin:0, //Отступ от элемента справа в 50px  
        smartSpeed:1000, //Время движения слайда
        autoplayTimeout:10000, //Время смены слайда
        items: 1,
        responsive:{
        	 600:{ 
	            margin:0
	        }
        },
	    mouseDrag: false,
	    touchDrag: false
	}); 
	$(".owlnext").click(function() { 
		mainslider.trigger("next.owl.carousel");
	});
	$(".owlprev").click(function() {
		mainslider.trigger("prev.owl.carousel");
	}); 
	var work1 = $(".works_slider1");
	var work2 = $(".works_slider2");
	var work3 = $(".works_slider3");
	work1.slick({
		arrows: false,
	});
	work2.slick({
		arrows: false,
	});
	work3.slick({
		arrows: false,
	});

 

	$('[data-next-slider="work1"]').click(function() { 
		work1.slick('slickNext');
	});
	$('[data-prev-slider="work1"]').click(function() { 
		work1.slick('slickPrev'); 
	});

	$('[data-next-slider="work2"]').click(function() { 
		work2.slick('slickNext');
	});
	$('[data-prev-slider="work2"]').click(function() { 
		work2.slick('slickPrev'); 
	});
	$('[data-next-slider="work3"]').click(function() { 
		work3.slick('slickNext');
	});
	$('[data-prev-slider="work3"]').click(function() { 
		work3.slick('slickPrev'); 
	});
	$(".owlnext").hover(
		function() {
			$(this).find("img").attr("src", "img/slider-arrow-blue.png");
		},
		function() {
			$(this).find("img").attr("src", "img/slider-arrow.png");
		}
	);

	$(".owlprev").hover(
		function() {
			$(this).find("img").attr("src", "img/slider-arrow-blue.png");
		},
		function() {
			$(this).find("img").attr("src", "img/slider-arrow.png");
		}
	);
	$(".modal-review").click(function() {
		$(".modal-review-new").animate({"opacity":"1"});
		$(".modal-review-new").css({"z-index":"111"});
	});
	$('[data-modal-target]').click(function() {
		$(".modal-"+$(this).data("modal-target")).animate({"opacity":"1"});
		$(".modal-"+$(this).data("modal-target")).css({"z-index":"111"});
		if ($(this).data("target")!==null) {
			$(".modal-"+$(this).data("modal-target")).find("."+$(this).data("target")).show();
		}
	});
	
})(jQuery);