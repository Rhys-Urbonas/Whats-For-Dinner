<dialog id="modal-component">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-body">
      <!-- add custom content -->
    </div>
  </div>
</dialog>

<style>
    .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>

<script>

const modal = document.getElementById("modal-component");
const modalContent = document.querySelector(".modal-content");
const closeModalButtons = document.querySelectorAll(".close");

function openModal() {
  modal.style.display = "block";
}

function closeModal() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

closeModalButtons.forEach(button => {
  button.addEventListener("click", () => {
    closeModal();
  });
});

</script>