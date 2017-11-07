(function(){

var logo = document.querySelector(".homeLogo");

function moveLogo(){
TweenMax.from (logo,2,{opacity:0,y:"-900px"});
TweenMax.to (logo,3,{opacity:1});
// TweenMax.to (logo,5,{opacity:1,y:100, ease: SlowMo.easeOut, delay: 3});
}


window.addEventListener('load', moveLogo, false);

  })();
