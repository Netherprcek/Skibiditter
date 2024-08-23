document.addEventListener("DOMContentLoaded", function () {
  console.log("Script started");

  const form = document.getElementById("register_form");
  const username = document.getElementById("username");
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm_password");

  // Form requirements
  const usernameLength = document.getElementById("username_length");
  const passwordLength = document.getElementById("password_length");
  const passwordUppercase = document.getElementById("password_uppercase");

  // Notification elements
  const notification = document.getElementById("notification");
  const notificationMessage = document.getElementById("notification-message");

  function showNotification(message) {
    notificationMessage.textContent = message;
    
    // Remove hidden class and set opacity to 1
    notification.classList.remove("hidden", "opacity-0");
    notification.classList.add("opacity-100");
    
    // Force a reflow to ensure the transition works
    notification.offsetHeight;
    
    console.log("Notification classes after showing:", notification.classList);

    setTimeout(() => {
      notification.classList.remove("opacity-100");
      notification.classList.add("opacity-0");
      setTimeout(() => {
        notification.classList.add("hidden");
      }, 300);
    }, 3000);
  }

  function validateUserPassword() {
    const password = document.getElementById("password").value;
    let isValid = true;

    // Check username length
    if (username.value.length < 3) {
      usernameLength.classList.remove("text-green-500");
      isValid = false;
    } else {
      usernameLength.classList.add("text-green-500");
    }

    // Check pw length
    if (password.length <= 6) {
      passwordLength.classList.remove("text-green-500");
      isValid = false;
    } else {
      passwordLength.classList.add("text-green-500");
    }

    // Check for uppercase
    if (!/[A-Z]/.test(password)) {
      passwordUppercase.classList.remove("text-green-500");
      isValid = false;
    } else {
      passwordUppercase.classList.add("text-green-500");
    }

    return isValid;
  }

  // Ensure this event listener is on the form
  form.addEventListener("input", validateUserPassword);

  function validateConfirmPassword() {
    return password.value === confirmPassword.value;
  }

  form.addEventListener("submit", function (e) {
    console.log("Form submitted");
    if (!validateUserPassword() || !validateConfirmPassword()) {
      console.log("Validation failed, preventing submission");
      e.preventDefault();
      showNotification("Please check your input and try again.");
    } else {
      console.log("Validation passed, allowing form submission");
    }
  });

  // Check for server-side notification
  const serverNotification = document.getElementById("server-notification");
  if (serverNotification && serverNotification.value) {
    showNotification(serverNotification.value);
  }

  console.log("Script loaded");
});