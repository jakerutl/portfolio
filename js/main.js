(function(){

  var theImages = document.querySelectorAll('.image-holder'),
      next = document.querySelector('.next');
      theHeading = document.querySelector('.heading'),
      theSubhead = document.querySelector('.main-copy h2'),
      theSeasonText = document.querySelector('.main-copy p');

var dynamicContent = null;
      function getPortfolio(){
        const url = './scripts/getPortfolio.php'

        fetch(url)
          .then((resp) => resp.json())
          .then(function(resp){
            dynamicContent = resp;
            changeElements.call(document.querySelector('#cat_1'));
            });
      }
      window.addEventListener('load',getPortfolio,false);

      function changeElements(){
        let subImages = document.querySelector('.subImagesContainer');
        let objectIndex = dynamicContent[this.id];

        while(subImages.firstChild){
          subImages.removeChild(subImages.firstChild);
        }

        objectIndex.forEach(function(images, index) {
          let newSubImg = document.createElement('img');
          newSubImg.classList.add('thumb');
          newSubImg.src = "images/thumb-" + objectIndex[index].image_path;
          newSubImg.dataset.index = index;
          newSubImg.addEventListener('click', function() {popLightbox(index, objectIndex);}, false);
          subImages.appendChild(newSubImg);

        });

        theSubhead.firstChild.nodeValue = index;
        theSubhead.classList.add(this.id);
        appliedClass =  this.id;

}

    theImages.forEach(function(image, index){
      image.addEventListener('click', changeElements, false);
    });

 function popLightbox(currentIndex, currentObject){
   document.ontouchmove = function(e){ e.preventDefault(); }
   document.body.style.overflow = "hidden";

   let lightbox = document.querySelector('.lightbox');
   let lightboxImg = lightbox.querySelector('img');
   let lightboxDesc = lightbox.querySelector('p');
   let lightboxClose = document.querySelector('.close-lightbox');
   let lightboxTitle = lightbox.querySelector('h1');

  lightbox.style.display = 'block';
  lightboxImg.src = "images/" + currentObject[currentIndex].image_path;
  lightboxDesc.innerHTML = currentObject[currentIndex].image_desc;
  lightboxTitle.innerHTML = currentObject[currentIndex].image_title;
  lightboxClose.addEventListener('click', closeLightbox, false);
  lightbox.addEventListener('click', closeLightbox, false);

  function closeLightbox(){

    document.ontouchmove = function(e){ return true; }
    lightbox.style.display = 'none';
    document.body.style.overflow = "auto";
    lightbox.querySelector('img').src = "";
    lightbox.querySelector('p').innerHTML = "";
    lightbox.querySelector('h1').innerHTML = "";

  }

 }
})();
