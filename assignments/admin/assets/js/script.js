// Script for image preview on add wine form

function previewImage() {
  var preview = document.getElementById("imagePreview");
  var input = document.getElementById("image").value;

  // Check if the input field has a value
  if (input) {
    preview.style.display = "block";
    preview.src = input;
  } else {
    preview.style.display = "none";
  }
}

// Call previewImage function on page load
window.onload = function () {
  previewImage();
};
