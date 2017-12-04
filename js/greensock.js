(function(){

var logo = document.querySelector(".homeLogo");
var port = document.querySelector("#port");

function moveLogo(){
TweenMax.from(logo, 1.5, {opacity:0, y: -100, delay:1});
// TweenMax.to (logo,5,{opacity:1,y:100, ease: SlowMo.easeOut, delay: 3});
}


window.addEventListener('load', moveLogo, false);

  })();
