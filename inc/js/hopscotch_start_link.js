(function ($) {
  Backdrop.behaviors.hopscotchManualTrigger = {
  attach:function (context, settings) {
      $(document).on('click', 'a.hopscotch-start-link', function(event) {
        event.preventDefault();
        hoplink = $(this).attr('id').replace('hoplink-', '');
        var tours = Backdrop.settings.hopscotchContext.tours;
        var tour = tours[hoplink];

        $.each( tour["hopper"]['steps'], function( key, step ) {
          var t1 = step['target'];
          var q1 = step['query_selector'];
          var i1 = step['query_selector_index'];
          if(q1) {
            if(i1) {
              tour["hopper"]['steps'][key]['target'] = document.querySelectorAll(t1)[i1];
            }
            else {
              tour["hopper"]['steps'][key]['target'] = document.querySelector(t1);
            }
          }
        });
        hopscotch.endTour();
        hopscotch.startTour(tour["hopper"]);

        return false;
      });
    }
  };
}(jQuery));