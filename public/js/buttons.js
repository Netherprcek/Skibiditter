function toggleOptions(postId, event) {
  event.stopPropagation(); // Prevent the click event from propagating to the document

  const optionsMenu = document.getElementById(`options-${postId}`);
  const isHidden = optionsMenu.classList.contains("hidden");

  // Hide all other option menus
  document.querySelectorAll('[id^="options-"]').forEach((menu) => {
    menu.classList.add("hidden");
  });

  // Toggle the clicked menu
  if (isHidden) {
    optionsMenu.classList.remove("hidden");
  } else {
    optionsMenu.classList.add("hidden");
  }

  // Add event listener to close the menu when clicking outside
  document.addEventListener(
    "click",
    function handleClickOutside(event) {
      if (!optionsMenu.contains(event.target)) {
        optionsMenu.classList.add("hidden");
        document.removeEventListener("click", handleClickOutside);
      }
    },
    { once: true },
  );
}

function handleLike(like_id) {
  const form = document.getElementById(`like-form-${like_id}`);
  console.log(form);
  if (!form) {
    console.error(`Form with id like-form-${like_id} not found`);
    return;
  }
  const likeButton = document.getElementById(`like-button-${like_id}`);
  const likeCountSpan = document.getElementById(`like-count-${like_id}`);
  const formData = new FormData(form);

  fetch(form.action, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      console.log("Parsed response data:", data);
      if (data.success) {
        likeCountSpan.textContent = data.likes;
        if (data.liked) {
          likeButton.classList.add("text-red-600");
          likeButton.classList.remove("text-white");
        } else {
          likeButton.classList.remove("text-red-600");
          likeButton.classList.add("text-white");
        }
        console.log("Updated like count:", data.likes);
      } else {
        console.error("Error liking post:", data.error);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

document.querySelectorAll("form[id^='deleteForm-']").forEach(form => {
  form.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    const formData = new FormData(this);
    const postId = this.getAttribute("data-post-id");

    // Convert FormData to JSON
    const formDataJson = {};
    formData.forEach((value, key) => {
      formDataJson[key] = value;
    });

    fetch(`/${postId}/delete`, {
      method: "POST", // Ensure the method is POST
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formDataJson),
    })
      .then((response) => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then((data) => {
        if (data.success) {
          // Refresh the page if the deletion was successful
          window.location.reload();
        } else {
          console.error("Error:", data.error);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});