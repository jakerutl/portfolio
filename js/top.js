(function(){

  var top = document.querySelector('.top');
  var sticky = document.querySelector('.Stickyhamburger');

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


// function move4(){
//   window.scrollTo({
//    'behavior': 'smooth',
//    'top': 2725,
//   });
// };
//
// function move3(){
//   window.scrollTo({
//    'behavior': 'smooth',
//    'top': 10000,
//   });
// };
//
// function move2(){
//   window.scrollTo({
//    'behavior': 'smooth',
//    'top': 1483,
//   });
// };


// function move(){
//   window.scrollTo({
//     'behavior': 'smooth',
//     'top': 783,
//   })
// }

function hideNav(){
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 10) {
      document.querySelector(".Stickyhamburger").style.display = "block";
  } else {
      document.querySelector(".Stickyhamburger").style.display = "none";
  }
}

// con2.addEventListener('click', move4, false);
// con.addEventListener('click', move3, false);
// port2.addEventListener('click',move2, false);
// port.addEventListener('click',move, false);
top.addEventListener('click', moveTop, false);
window.addEventListener('scroll', scrollFunction,false);
window.addEventListener('scroll', hideNav,false);

  })();
