const playButtons = document.getElementsByClassName("playBtn");
const closeButtons = document.getElementsByClassName("closeBtn");
const modals = document.getElementsByClassName("videoModal");
const videoPlayers = document.getElementsByTagName("video");

for (let i = 0; i < playButtons.length; i++) {
  playButtons[i].addEventListener("click", function () {
    modals[i].style.display = "block";
    videoPlayers[i].play();
  });
}

for (let i = 0; i < closeButtons.length; i++) {
  closeButtons[i].addEventListener("click", function () {
    modals[i].style.display = "none";
    videoPlayers[i].pause();
    videoPlayers[i].currentTime = 0;
  });
}

window.addEventListener("click", function (event) {
  for (let i = 0; i < modals.length; i++) {
    if (event.target === modals[i]) {
      modals[i].style.display = "none";
      videoPlayers[i].pause();
      videoPlayers[i].currentTime = 0;
    }
  }
});
