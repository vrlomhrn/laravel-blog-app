document.addEventListener("trix-file-accept", (e) => {
    e.preventDefault();
});

const previewImage = () => {
    const imageInput = document.querySelector("input#image");
    const imagePreview = document.querySelector(".image-preview");

    imagePreview.style.display = "block";

    const oFReader = new FileReader();

    oFReader.readAsDataURL(imageInput.files[0]);

    oFReader.onload = function (oFREvent) {
        imagePreview.src = oFREvent.target.result;
    };
};
