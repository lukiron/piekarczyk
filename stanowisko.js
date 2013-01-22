jQuery(document).ready(function() {
  var WysokoscBiurka = new Array(66,68,70,72,74,76,78,80);
  var WysokoscSiedziska = new Array(38,39,40,41,43,44,46,48);
  var GlebokoscSiedziska = new Array(39,39,40,40,41,42,43,44);
  jQuery('.wzrostClick').click(function(e)
  {
      e.preventDefault();      
      var name=jQuery(this).attr('id');
      var wartosc=name.substr(6);      
      jQuery('#WysokoscBiurka').html(WysokoscBiurka[wartosc]);
      jQuery('#WysokoscSiedziska').html(WysokoscSiedziska[wartosc]);
      jQuery('#GlebokoscSiedziska').html(GlebokoscSiedziska[wartosc]);
      jQuery('.wzrostClick').removeClass('zielony-text');
      jQuery(this).addClass('zielony-text');
  });

});