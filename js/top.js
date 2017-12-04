(function(){

  var top = document.querySelector('.top');
  var sticky = document.querySelector('.Stickyhamburger');
  var home = document.querySelector('.home');
  var about = document.querySelector('.about');
  var port = document.querySelector('.port');
  var port2 = document.querySelector('.port2');

  function scrollFunction() {
      if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 400) {
          document.querySelector(".top").style.display = "block";
      } else {
          document.querySelector(".top").style.display = "none";
      }
  }

function moveTop(){
  window.scrollTo({
   'behavior': 'smooth',
   'top': 0,
  });
};


function move2(){
  window.scrollTo({
   'behavior': 'smooth',
   'top': 1400,
  });
};


function move(){
  window.scrollTo({
    'behavior': 'smooth',
    'top': 700,
  })
}



function hideNav(){
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 10) {
      document.querySelector(".Stickyhamburger").style.display = "block";
  } else {
      document.querySelector(".Stickyhamburger").style.display = "none";
  }
}

port2.addEventListener('click',move2, false);
port.addEventListener('click',move, false);
top.addEventListener('click', moveTop, false);
window.addEventListener('scroll', scrollFunction,false);
window.addEventListener('scroll', hideNav,false);

  })();
