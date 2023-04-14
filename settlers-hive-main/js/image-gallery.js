
var modal = document.getElementById("myModal");


var modalImg = document.getElementById("img01");
var titleText = document.getElementById("title");
var captionText = document.getElementById("caption");
var images = document.querySelectorAll(".photo-card img");
var currentImageIndex = 0;

for (var i = 0; i < images.length; i++) {
  images[i].onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    titleText.innerHTML = this.parentElement.getAttribute("data-title");
    captionText.innerHTML = this.parentElement.getAttribute("data-description");
    currentImageIndex = Array.prototype.indexOf.call(images, this);
  }
}


var nextButton = document.getElementById("next");
var prevButton = document.getElementById("prev");


nextButton.onclick = function() {
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  modalImg.src = images[currentImageIndex].src;
  titleText.innerHTML = images[currentImageIndex].parentElement.getAttribute("data-title");
  captionText.innerHTML = images[currentImageIndex].parentElement.getAttribute("data-description");
}


prevButton.onclick = function() {
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  modalImg.src = images[currentImageIndex].src;
  titleText.innerHTML = images[currentImageIndex].parentElement.getAttribute("data-title");
  captionText.innerHTML = images[currentImageIndex].parentElement.getAttribute("data-description");
}


var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
