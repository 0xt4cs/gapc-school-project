const passwordInput = document.querySelector(
  ".register-container input[type='password']"
);
const showHideIcon = document.querySelector(".show-hide-icon");

function togglePasswordVisibility() {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    showHideIcon.classList.remove("fa-eye");
    showHideIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    showHideIcon.classList.remove("fa-eye-slash");
    showHideIcon.classList.add("fa-eye");
  }
}

function updateDateTime() {
  const dateElement = document.querySelector("#dateTime .date");
  const timeElement = document.querySelector("#dateTime .time");
  const now = new Date();
  const dateString = now.toLocaleDateString();
  const timeString = now.toLocaleTimeString();

  dateElement.innerText = dateString;
  timeElement.innerText = timeString;
}

function setAge() {
  const birthdayInput = document.querySelector("input[name='birthdate']");
  const ageInput = document.getElementById("age");
  const currentDate = new Date();
  const birthDate = new Date(birthdayInput.value);
  let age = currentDate.getFullYear() - birthDate.getFullYear();
  const monthDiff = currentDate.getMonth() - birthDate.getMonth();

  if (
    monthDiff < 0 ||
    (monthDiff === 0 && currentDate.getDate() < birthDate.getDate())
  ) {
    age--;
  }

  ageInput.value = age;
}

showHideIcon.addEventListener("click", togglePasswordVisibility);
updateDateTime();
setInterval(updateDateTime, 1000);

document
  .querySelector("input[name='birthdate']")
  .addEventListener("change", setAge);

function checkPasswordStrength() {
  var number = /([0-9])/;
  var alphabets = /([A-Za-z])/;
  var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
  let strength = 0;
  if ($("#password").val().length > 8) {
    strength += 1;
  }
  if ($("#password").val().match(number)) {
    strength += 1;
  }
  if ($("#password").val().match(alphabets)) {
    strength += 1;
  }
  if ($("#password").val().match(special_characters)) {
    strength += 1;
  }

  switch (strength) {
    case 0:
      $("#strengthBar").removeClass();
      $("#strengthBar").addClass("strength0");
      break;
    case 1:
      $("#strengthBar").removeClass();
      $("#strengthBar").addClass("strength1");
      break;
    case 2:
      $("#strengthBar").removeClass();
      $("#strengthBar").addClass("strength2");
      break;
    case 3:
      $("#strengthBar").removeClass();
      $("#strengthBar").addClass("strength3");
      break;
    case 4:
      $("#strengthBar").removeClass();
      $("#strengthBar").addClass("strength4");
      break;
  }
}
function checkPasswordStrength() {
  var password = document.getElementById("password").value;
  var strengthBar = document.getElementById("strength");
  var strengthText = document.getElementById("password-strength-text");
  var strength = 0;
  if (password.match(/[a-z]+/)) {
    strength += 1;
  }
  if (password.match(/[A-Z]+/)) {
    strength += 1;
  }
  if (password.match(/[0-9]+/)) {
    strength += 1;
  }
  if (password.match(/[$@#&!]+/)) {
    strength += 1;
  }
  var strengthMessage;

  strengthText.className = "";

  switch (strength) {
    case 0:
      strengthBar.style.width = "20%";
      strengthBar.className = "strength0";
      strengthMessage = "Very Weak";
      strengthText.classList.add("strength0");
      break;
    case 1:
      strengthBar.style.width = "40%";
      strengthBar.className = "strength1";
      strengthMessage = "Weak";
      strengthText.classList.add("strength1");
      break;
    case 2:
      strengthBar.style.width = "60%";
      strengthBar.className = "strength2";
      strengthMessage = "Average";
      strengthText.classList.add("strength2");
      break;
    case 3:
      strengthBar.style.width = "80%";
      strengthBar.className = "strength3";
      strengthMessage = "Strong";
      strengthText.classList.add("strength3");
      break;
    case 4:
      strengthBar.style.width = "100%";
      strengthBar.className = "strength4";
      strengthMessage = "Very Strong";
      strengthText.classList.add("strength4");
      break;
  }

  strengthText.textContent = strengthMessage;
}
