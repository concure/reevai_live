if ($('.reference_gallery')) {
    var container = document.querySelector('.reference_gallery');
    var msnry = new Masonry( container, {
      columnWidth: '.gallery-item',
      itemSelector: '.gallery-item',
    });

    let btn = document.querySelector(".load-more");
    let galleryItems = document.querySelectorAll(".gallery-item-wrapper");
    let arrayGalleryItems = Array.from(galleryItems);

    window.onload = function (){
      let notClass = arrayGalleryItems.slice(3);
      notClass.forEach((el) =>{
        el.classList.add('box-hidden');
      });
      msnry.layout();
    };


    btn.addEventListener("click", (e) => {
      e.preventDefault();

      let boxHidden = document.querySelectorAll(".box-hidden");
      let arrayItems = Array.from(boxHidden);
      if (arrayItems.length >= 3 ) {
       btn.textContent = "Zobraziť viac";
       let deleteItems = arrayItems.splice(0, 3);
       deleteItems.forEach((el) =>{
         el.classList.remove('box-hidden');
       });
      } else {
          btn.textContent = " ";
      };

      /* else if (arrayItems.length < 3) {
       btn.textContent = "Zobraziť menej";
       let hideAgain = arrayGalleryItems.slice(-6);
       hideAgain.forEach((el) => {
         el.classList.add('box-hidden');
       });
     }*/
      console.log(arrayGalleryItems);
      console.log(arrayItems);
      msnry.layout();
    });
  };