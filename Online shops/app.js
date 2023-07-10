const openModalButton = document.getElementById('open-modal');
const closeModalButton = document.getElementById('close-modal');
const modalContainer = document.getElementById('modal-container');

openModalButton.addEventListener('click', function() {
  modalContainer.style.display = 'flex';
});

closeModalButton.addEventListener('click', function() {
  modalContainer.style.display = 'none';
});
