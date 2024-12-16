document.addEventListener("DOMContentLoaded", function() {
  const lazyImages = document.querySelectorAll('.lazy');

  lazyImages.forEach((img) => {
      img.src = img.getAttribute('data-src');

      img.onload = () => {
          img.classList.add('loaded');
      };
  });
});

function openModal(img) {
  const modal = document.getElementById("myModal");
  const modalImg = document.getElementById("modalImage");
  const captionText = document.getElementById("caption");

  modal.style.display = "block";
  modalImg.src = img.dataset.src;
  captionText.innerHTML = img.alt;
}

function closeModal() {
  const modal = document.getElementById("myModal");
  modal.style.display = "none";
}