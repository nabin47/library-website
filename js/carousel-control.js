// Clicking on carousel opens book gallery

const clickCarousel = document.querySelectorAll('.carousel-item');
clickCarousel.forEach(element => element.addEventListener("click", ()=>{
    window.location="book/book-gallery.php";
}));
