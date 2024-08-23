const toggleImgButton = document.getElementById("toggleImageInput");
const postText = document.getElementById("post_text");
const postForm = document.getElementById("post_form");
const postError = document.getElementById("post_error");
const imageInput = document.getElementById("imageInput");

postForm.addEventListener("submit", (e) => {
  if (postText.value === "" && imageInput.value === "") {
    e.preventDefault();
    postError.textContent = "Please enter a valid post text";
  }
});

function showNotification(message) {
  const notification = document.getElementById("notification");
  const notificationMessage = document.getElementById("notification-message");

  notificationMessage.textContent = message;
  notification.classList.remove("hidden", "opacity-0");
  notification.classList.add("opacity-100");

  setTimeout(() => {
    notification.classList.add("opacity-0");
    notification.classList.remove("opacity-100");
    setTimeout(() => {
      notification.classList.add("hidden");
    }, 300);
  }, 3000);
}

function validateFileSize(input) {
  const file = input.files[0];
  const maxSize = 2 * 1024 * 1024; // 2MB in bytes
  if (file.size > maxSize) {
    showNotification("File size exceeds 2MB");
    input.value = ""; // Clear the input
    document.getElementById("fileName").textContent = "";
  } else {
    document.getElementById("fileName").textContent = file.name;
  }
}

function displayFileName(input, spanId) {
  const fileName = input.files[0] ? input.files[0].name : "";
  const truncatedFileName =
    fileName.length > 15 ? fileName.substring(0, 15) + "..." : fileName;
  document.getElementById(spanId).textContent = truncatedFileName;
}