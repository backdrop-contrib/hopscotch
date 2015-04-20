(function ($) {
  Backdrop.behaviors.hopscotchManualTrigger = {
    attach:function (context, settings) {
      $(document).on('click', 'a.hopscotch-start-link', function(event) {
        event.preventDefault();
        tours = Backdrop.settings.hopscotchContext.tours;
        $.each( tours, function( key, value ) {
          if(key == Backdrop.settings.hopscotchManualTrigger.tour_name) {
            hopscotch.startTour(JSON.parse(value["hopper"]));
          }
        });

        return false;
      });
    }
  };
}(jQuery));