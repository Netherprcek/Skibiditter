document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("login_form");
  const loginUsername = document.getElementById("login_username");
  const loginPassword = document.getElementById("login_password");
  const loginError = document.getElementById("login_error");
  const loginErrorField = document.getElementById("loginErrorField");

  if (loginForm) {
    // Check if loginForm is not null
    loginForm.addEventListener("submit", function (e) {
      if (loginUsername.value === "" || loginPassword.value === "") {
        e.preventDefault(); // Prevent form submission if validation fails
        loginError.innerHTML = "&nbsp;";

        loginError.textContent = "Username and password are required";
      } else {
        // Allow form submission and handle error display after page refresh
        // Check if session error exists
        const credentialsAreIncorrect = loginErrorField.value !== "";

        if (credentialsAreIncorrect) {
          loginError.textContent = loginErrorField.value;

          loginErrorField.value = ""; // Clear the error field for next submission
        }
      }
    });
  }
});
