(function($) {
  $('head').append(css);
  document.onkeydown = keyPress;
  function keyPress(e) {
    var evtobj = window.event ? event : e;
    if (evtobj.ctrlKey && evtobj.shiftKey && evtobj.keyCode === 76) {
      $('div#wpadminbar').toggle();
    }
  }
})(jQuery);
