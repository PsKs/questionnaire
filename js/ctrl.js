$(function() {
  $('#form').sisyphus();
  // autoRelease: true;
});
$(document).on("click", 'input:radio', function(e) {
  var name  = $(this).attr('name');
  var value = $(this).val();
  var choose = name+'_'+value+'_open';
  var count = $('input:radio[name='+name+']').length;
  for(var i = 1; i <= count; i++){
    if (i!=value) {
      $('#'+name+'_'+i+'_open').attr('disabled', true).val('');
    } else {
      $('#'+choose).attr('disabled', false);
    }
  }
});
$(document).on("click", 'button:reset', function(e) {
  autoRelease: true;
});