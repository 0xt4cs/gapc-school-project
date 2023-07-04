function goToHomePage() {
  window.location.href = "../home/";
}

var modal = document.querySelector(".modal");
var locationBtn = document.querySelector(".location-btn");
var closeBtn = document.querySelector(".close");

locationBtn.addEventListener("click", function () {
  modal.style.display = "block";
});

closeBtn.addEventListener("click", function () {
  modal.style.display = "none";
});

window.addEventListener("click", function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
});
