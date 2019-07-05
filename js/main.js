(function ($) {


  // Toggle Search form
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
          // check if user is logged into drupal
          if($("#toolbar").length == 0){
            var aTag = $("h1[id='"+ idname +"']");
            $('html,body').animate({scrollTop: aTag.offset().top - 16},'slow');
          }
          // if not scroll to different offset
          else {
            var aTag = $("h1[id='"+ idname +"']");
            $('html,body').animate({scrollTop: aTag.offset().top - 80},'slow');
          }       
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
