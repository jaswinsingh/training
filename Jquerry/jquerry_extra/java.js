window.onload = function()
{


document.querySelector('.section1 button').onclick=function()
    {
        document.querySelector('.section1 .height').style.height='300px';
    }

document.querySelector('.section2 button').onclick=function()
  {
  document.querySelector('.section2 .height').style.marginLeft = "300px";
  document.querySelector('.section2 .height').style.transition = "4s";
  }
  // document.querySelector('.section5 button').onclick=function()
  //     {
  //         var wrap=document.createElement('div');
  //     }

  document.querySelector('.section9 button').onclick=function()
  {

      document.querySelector('.section9 input').value="Hello User";
      document.querySelector('.section9 button').disabled=true;
  }

  document.querySelector('.section6 button').onclick=function()
  {
      document.querySelector('.section6 p:not(.intro)').style.backgroundColor="transparent";
  }

  document.querySelector('.section7 button').onclick=function()
  {
    var li =document.querySelector('.section7 ul').querySelectorAll('li');
    for (var i = 3; i <=5 ; i++) {
        li[i].style.backgroundColor="blue";
    }
  }
  document.querySelector('.section8 button').onclick=function()
  {
    var li =document.querySelector('.section8 ul').querySelectorAll('li');
    for (var i = 1; i <=li.length ; i++) {
        li[i].style.backgroundColor="blue";  }
  }

  var li =document.querySelector('.section4').querySelectorAll('button')
  var temp=document.querySelectorAll('.content');
    li[0].onclick=function() {
      // alert('hello');
      temp[1].style.display="none";
      document.querySelector('.active').style.display="block";
    }
    li[1].onclick=function() {
      // alert('hello');
      temp[1].style.display="block";
      document.querySelector('.active').style.display="none";
    }
document.querySelector('.section10 button').onclick=function()
{
    document.documentElement.scrollTop = 0;
}

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

}
