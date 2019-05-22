(function ($) {
  Drupal.behaviors.SiteHeaderSearchToggle = {
    attach: function (context, settings) {
      $('.site-search').hide();
      $('.search-toggle a').click(function(event){
      	event.preventDefault();
      	$('.site-search').slideToggle(320);
      });
    }
  };
  // SPnet Navigation Elements
  Drupal.behaviors.spnetNavigationElements = {
    attach: function (context, settings) {
      function scrollToId(idname){
          var aTag = $("h1[id='"+ idname +"']");
          $('html,body').animate({scrollTop: aTag.offset().top - 16},'slow');
      }
      //use name attribute value inside an anchor to scroll to id with same name
	  $(".js_scrolltolink").click(function() {
	  	  $(".js_scrolltolink").removeClass('active');
	  	  $(this).addClass('active');
	  	  var idname = $(this).attr('name');
		  scrollToId(idname);
		  $("#spnet_sidebar").toggle();
	  });

    }
  };

})(jQuery);
