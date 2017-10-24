(function(){

  var top = document.querySelector('.top');


  function scrollFunction() {
      if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 400) {
          document.querySelector(".top").style.display = "block";
      } else {
          document.querySelector(".top").style.display = "none";
      }
  }

//
function moveTop(){
  window.scrollTo(0,0);
};


top.addEventListener('click', moveTop, false);
window.addEventListener('scroll', scrollFunction,false);

  })();
