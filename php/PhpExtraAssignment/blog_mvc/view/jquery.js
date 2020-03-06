$(document).ready(function(){
  $("#uname").keyup(function(){
    jQuery.ajax({
url: "/internship/php/PhpExtraAssignment/blog_mvc/controller/checkavail.php",
data:'username='+$("#uname").val(),
type: "POST",
success:function(data){
  $("#user-availability-status").text(data);
  console.log(JSON.stringify(data));
  if (JSON.stringify(data)=='"AVAILABLE"'){
      $("#user-availability-status").css({"color":"green","font-size":"0.8em"});
    }
    else {
        $("#user-availability-status").css({"color":"red","font-size":"0.8em"});
    }
},
});
});

$('input[name$="fname"]').keyup(function(){
  jQuery.ajax({
url: "/internship/php/PhpExtraAssignment/blog_mvc/controller/checkavail.php",
data:'fname='+$('input[name$="fname"]').val(),
type: "POST",
success:function(data){
$("#error").text(data);

},
error: function()
       {
           // enable button

       },
});
});

$('input[name$="email"]').keyup(function(){
  jQuery.ajax({
url: "/internship/php/PhpExtraAssignment/blog_mvc/controller/checkavail.php",
data:'email='+$('input[name$="email"]').val(),
type: "POST",
success:function(data){
$("#errorEmail").text(data);
},
});
});

$('input[name$="phone"]').keyup(function(){
  jQuery.ajax({
url: "/internship/php/PhpExtraAssignment/blog_mvc/controller/checkavail.php",
data:'phone='+$('input[name$="phone"]').val(),
type: "POST",
success:function(data){
$("#errorPhone").text(data);
},
});
});


$(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});

});
