// realtime date and time function
function updateDateTime() {
  const dateElement = document.querySelector("#dateTime .date");
  const timeElement = document.querySelector("#dateTime .time");
  const now = new Date();
  const dateString = now.toLocaleDateString();
  const timeString = now.toLocaleTimeString();

  dateElement.innerText = dateString;
  timeElement.innerText = timeString;
}

//loading screen animation
if (sessionStorage.getItem("loadingAnimationShown") !== "true") {
  sessionStorage.setItem("loadingAnimationShown", "true");

  window.addEventListener("load", () => {
    const loadingWrapper = document.getElementById("loadingWrapper");
    const loadingPercentage = document.getElementById("loadingPercentage");
    const progressCircle = document.querySelector(".progress-ring__circle");

    const radius = progressCircle.getAttribute("r");
    const circumference = 2 * Math.PI * radius;

    progressCircle.style.strokeDasharray = `${circumference} ${circumference}`;
    progressCircle.style.strokeDashoffset = circumference;

    let count = 0;

    const loadingInterval = setInterval(() => {
      count++;
      loadingPercentage.innerText = `${count}%`;

      const progress = (count / 100) * circumference;
      progressCircle.style.strokeDashoffset = circumference - progress;

      if (count === 100) {
        clearInterval(loadingInterval);
        loadingWrapper.style.transition = "opacity 1s";
        loadingWrapper.style.opacity = "0";

        setTimeout(() => {
          loadingWrapper.style.display = "none";
        }, 1000);
      }
    }, 20);
  });
} else {
  const loadingWrapper = document.getElementById("loadingWrapper");
  loadingWrapper.style.display = "none";
}

function disablePageInteraction() {
  const formElements = document.querySelectorAll("form input, form button");
  for (const element of formElements) {
    element.disabled = true;
  }
}

function enablePageInteraction() {
  const formElements = document.querySelectorAll("form input, form button");
  for (const element of formElements) {
    element.disabled = false;
  }
}

function openCaptchaModal() {
  const captchaModal = document.getElementById("captchaModal");
  captchaModal.style.display = "block";
  captchaModal.style.zIndex = 1001;
  disablePageInteraction();
}

const operators = ["+", "-", "*"];

function generateCaptcha() {
  const num1 = Math.floor(Math.random() * 10) + 1;
  const num2 = Math.floor(Math.random() * 10) + 1;
  const operator = operators[Math.floor(Math.random() * operators.length)];

  const captchaDiv = document.getElementById("captcha");
  captchaDiv.innerHTML = `${num1} ${operator} ${num2} = `;
  captchaDiv.insertAdjacentHTML(
    "beforeend",
    '<input type="number" id="captchaAnswer" placeholder="Answer" required style="width: 150px; margin-left: 10px;" />'
  );

  let result;
  switch (operator) {
    case "+":
      result = num1 + num2;
      break;
    case "-":
      result = num1 - num2;
      break;
    case "*":
      result = num1 * num2;
      break;
  }

  captchaDiv.dataset.result = result;
}

if (sessionStorage.getItem("attempts") === null) {
  sessionStorage.setItem("attempts", "0");
}

const loginForm = document.querySelector("#login-form");
let captchaRequired = false;

loginForm.addEventListener("submit", (event) => {
  event.preventDefault();
  let attempts = parseInt(sessionStorage.getItem("attempts"));
  attempts++;

  if (attempts > 3 && !captchaRequired) {
    captchaRequired = true;
    openCaptchaModal();
    generateCaptcha();
  } else if (captchaRequired) {
    checkCaptcha();
  } else {
    loginForm.submit();
  }
  sessionStorage.setItem("attempts", attempts);
});

document.getElementById("captchaSubmit").addEventListener("click", () => {
  let validCaptcha = checkCaptcha();
  if (validCaptcha) {
    sessionStorage.setItem("attempts", "0");
    loginForm.submit();
  }
});

function checkCaptcha() {
  const captchaDiv = document.getElementById("captcha");
  const result = parseInt(captchaDiv.dataset.result);
  const userInput = parseInt(document.getElementById("captchaAnswer").value);

  if (userInput === result) {
    const captchaModal = document.getElementById("captchaModal");
    captchaModal.style.display = "none";
    enablePageInteraction();
    captchaRequired = false;
    return true;
  } else {
    alert("Incorrect captcha. Please try again.");
    generateCaptcha();
    return false;
  }
}

const showHideIcon = document.querySelector(".show-hide-icon");
const passwordInput = document.querySelector('input[type="password"]');

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

showHideIcon.addEventListener("click", togglePasswordVisibility);

updateDateTime();
setInterval(updateDateTime, 1000);
