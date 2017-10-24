
   $(document).ready(function () 
 { 
  $("#defotherpay").click(function()
  {
    $("#defotherpay-content:hidden").show('slow');
   $("#paypal-content").hide();
   });
   $("#watch-me").click(function()
  {
    if($('defotherpay').prop('checked')===false)
   {
    $('#defotherpay-content').hide();
   }
  });
  $("#paypal").click(function()
  {
    $("#paypal-content:hidden").show('slow');
   $("#defotherpay-content").hide();
   });
   $("#paypal").click(function()
  {
    if($('paypal-two').prop('checked')===false)
   {
    $('#paypal-content').hide();
   }
  });
 });