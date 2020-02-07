  $(document).ready(function(){

  $(".section1 button").click(function(){
    $(".section1 div").css("height","300px");  //Q1. set Height to 300px
  });

  $(".section2 button").click(function(){
    $(".section2 div").css({"margin-left":"400px","transition":"5s"}); //Q2. set div to left with transition
  });

  $(".section5 button").click(function(){
    $(".section5 p:eq(1)").wrap("<div class='hello'></div>");//Q4  Wrap second paragraph
  });

  $(".section9 button").click(function(){
    $(".section9 button").attr("disabled", true); //Q5. button click change input field value and disable the button
      $(".section9 input").val("hello");
  });

  $(".section6").click(function(){
    $(".section6 p:not(.intro)").css({"background-color":"transparent"});//Q5 remove background color from p tage which one don't have any class
  });

  $(".section7 button").click(function(){
    $(".section7 li").filter(':nth-child(4), :nth-child(5), :nth-child(6)').css({"background-color":"orange"});//Q6  add background color inside 4, 5 and 6
  });

  $(".section8 button").click(function(){
    $(".section8 li:not(:nth-child(1)").css({"border-color":"red"});//Q7. except 1 add border color to all element
  });

  $(".tabcontent :eq(0)").click(function(){    //Q8. click on tab button content section need to be change
    $(".content").css({"display":"none"});
    $(".active").css({"display":"block"});
  });
  $(".tabcontent :eq(1)").click(function(){
    $(".content").css({"display":"block"});
    $(".active").css({"display":"none"});
  });

  $(".section10").click(function(){       //Q9.  button click back to top with smooth scroll
    $("html").animate({ scrollTop: 0 }, 4000);
  });

  var mybutton = document.getElementsByClassName("full"); //Q3.  display fixed and relative
    // alert("hello");
  window.onscroll = function() {scrollFunction(); };
  function scrollFunction() {
    // alert(document.documentElement.scrollTop );
    if (document.documentElement.scrollTop >= 700 && document.documentElement.scrollTop  <= 900 ){
      // alert("700 $$ 900");
      mybutton[0].style.position = "fixed";
      mybutton[0] .style.top = 0;
      mybutton[0] .style.width = "100%";

    } else if(document.documentElement.scrollTop  > 900 || document.documentElement.scrollTop  < 700) {
      mybutton[0] .style.position = "relative";
      // alert("900");
    }
  }

});
