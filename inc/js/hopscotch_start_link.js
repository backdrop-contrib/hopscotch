(function ($) {
  Backdrop.behaviors.hopscotchManualTrigger = {
    attach:function (context, settings) {
      $(document).on('click', 'a.hopscotch-start-link', function(event) {
        event.preventDefault();
        tours = Backdrop.settings.hopscotchContext.tours;
        $.each( tours, function( key, value ) {
          if(key == Backdrop.settings.hopscotchManualTrigger.tour_name) {
            $.each( value["hopper"]['steps'], function( key, step ) {
              t1 = step['target'];
              q1 = step['query_selector'];
              i1 = step['query_selector_index'];
              if(q1) {
                if(i1) {
                  value["hopper"]['steps'][key]['target'] = document.querySelectorAll(t1)[i1];
                }
                else {
                  value["hopper"]['steps'][key]['target'] = document.querySelector(t1);
                }
              }
            });
            hopscotch.startTour(value["hopper"]);
          }
        });

        return false;
      });
    }
  };
}(jQuery));