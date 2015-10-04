(function ($) {
  Backdrop.behaviors.hopscotchContext = {
    attach:function (context, settings) {
      if(!Backdrop.settings.hopscotchContext) return false;
      tours = Backdrop.settings.hopscotchContext.tours;
      $.each( tours, function( key, value ) {
        if(value["auto_start"]) {
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
    }
  };
}(jQuery));