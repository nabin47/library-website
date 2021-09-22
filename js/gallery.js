function imageGallery() {
    const highlight = document.querySelector('.gallery-highlight');
    const previews = document.querySelectorAll('.photo-preview img');

    previews.forEach(preview => {
        preview.addEventListener("click", function() {
            const smallSrc = this.src;
            // const bigSrc = smallSrc.replace("small", "big");
            // highlight.src = bigSrc;
            // console.log(bigSrc);
            highlight.src = smallSrc;
            previews.forEach(preview => preview.classList.remove("photo-active"));
            preview.classList.add("photo-active");
        });
    });
}

imageGallery();