(function ($) {
  Backdrop.behaviors.hopscotchContext = {
    attach:function (context, settings) {
      if(!Backdrop.settings.hopscotchContext) return false;
      // var auto_start = Backdrop.settings.hopscotchContext.auto_start || 'undefined';
      // if(auto_start == 'undefined' ||auto_start == false) return false;

      // var tips_content = Backdrop.settings.hopscotchContext.tips_content || 'undefined';
      // if(tips_content == 'undefined') return false;

      // if ($('ol#hopscotch-tips-content').length > 0) $('ol#hopscotch-tips-content').remove();

      //$('body', context).append(tips_content);
      tours = Backdrop.settings.hopscotchContext.tours;
      $.each( tours, function( key, value ) {
        console.log(tours);
        if(value["auto_start"]) {
        hopscotch.startTour(JSON.parse(value["hopper"]));
          
        }
      });

      
    }
  };
}(jQuery));