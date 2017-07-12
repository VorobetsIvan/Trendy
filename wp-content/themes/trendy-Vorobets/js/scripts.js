$(document).ready(function() {


$("#searchsubmit").val('');


// for ajax About
$("#load_event").bind( "click", function() {
  // Вичисляємо ID останнього event
  var id = $(".wraper-block-cell").last().attr('id');
  id = id.substr(12)
  $.ajax ({
  	type: "POST",
  	data: { last_ID: id,
  			action: 'ajax_event' },
  	url : myajax.url,
  	success: function(res) {
  		if (res != '') {
  			$(".wraper-block-cell").last().after(res);
        $(".wraper-block-cell").last().fadeIn(1000);
  		} else {
  			$("#load_event").css('display','none');
  		}
  	},
  	error: function() {
  		alert('Error!');	
  	}
  });
  return false;
});

$(document).ajaxComplete(function() {
  window.dispatchEvent(new Event('resize'));
});



// for works HOME
	var owl = $("#owl-works");
	owl.owlCarousel({
	  itemsCustom : [
	    [479,1],
	    [768,2],
	    [1170, 3]
	  ],
	  navigation : true
	});
// for testimonials HOME
	$("#owl-testimonials").owlCarousel({
	  navigation : false, // Show next and prev buttons
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true
	});

// for facts HOME
    var show = true;
    var countbox = "#section-facts";
    $(window).on("scroll load resize", function(){
        if(!show) return false;                   // Відміняємо анімацію, якщо вона вже була виконана
 
        var w_top = $(window).scrollTop();        // Кількість пікс. прокрученої сторінки
        var e_top = $(countbox).offset().top;     // Відстань між блоком з лвчильниками до верха
 
        var w_height = $(window).height();        // Висота вікна браузера
        var d_height = $(document).height();      // Висота всього документа
 
        var e_height = $(countbox).outerHeight(); // Высота блока з лічильниками
 
        if(w_top + 200 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){

			$('.cell-fact-inf span').each(function () {
			    $(this).prop('Counter',0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 2000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(Math.ceil(now));
			        }
			    });
			});

            show = false;
        }
    });
// for slider portfolio
	$("#owl-portfolio").owlCarousel({

	  navigation : true, // Show next and prev buttons
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  singleItem:true
	});
  $(".post_gallery").owlCarousel({
      navigation : true, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
  });


});