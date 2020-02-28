$(document).ready(function(){
  $("#uname").keyup(function(){
    jQuery.ajax({
url: "/internship/php/PhpExtraAssignment/blog_mvc/controller/checkavail.php",
data:'username='+$("#uname").val(),
type: "POST",
success:function(data){
  $("#user-availability-status").text(data);
  console.log(JSON.stringify(data));
  if (JSON.stringify(data)=='"Username Available"'){
      $("#user-availability-status").css({"color":"green"});
    }
    else {
        $("#user-availability-status").css({"color":"red","font-weight":"100"});
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
$("#reg:input").attr('disabled',true);
},
error: function()
       {
           // enable button
        $("#reg:input").removeattr('disabled' );
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

});
