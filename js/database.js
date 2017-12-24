(function () {
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework
// var httpRequest = new XMLHttpRequest();




    function getDesc(){
      const url = './scripts/getAbout.php'

      //the fetch API uses new Javascript promise API
      fetch(url)// do an ajax call with fetch
        // .then((resp) => resp.json())// convert to json
        .then(({about_desc}) => {
          let  about = document.querySelector('.info').innerHTML = about_desc;

          });

        // }) //call the process function
        // .catch(function(error){ // catch ANY error
        //   console.log(error);
        // })
}

window.addEventListener('load',getDesc,false);
})();
