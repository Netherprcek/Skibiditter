function updateFollowState(isFollowing, followerCount) {
  const followForm = document.querySelector('form[action$="/follow"]');
  const unfollowForm = document.querySelector('form[action$="/unfollow"]');
  const followerCountElement = document.querySelector(".follower-count");

  if (followForm && unfollowForm) {
    followForm.style.display = isFollowing ? "none" : "block";
    unfollowForm.style.display = isFollowing ? "block" : "none";
  }

  if (followerCountElement) {
    followerCountElement.textContent = followerCount;
  }
}

function toggleFollow(form, isFollowing) {
  fetch(form.action, {
    method: "POST",
    headers: {
      "X-Requested-With": "XMLHttpRequest",
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: new URLSearchParams(new FormData(form)),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        updateFollowState(data.is_following, data.follower_count);
      } else {
        console.error("Failed to update follow status");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

document.addEventListener("DOMContentLoaded", () => {
  const followForm = document.querySelector('form[action$="/follow"]');
  const unfollowForm = document.querySelector('form[action$="/unfollow"]');

  if (followForm) {
    followForm.addEventListener("submit", (e) => {
      e.preventDefault();
      toggleFollow(followForm, false);
    });
  }

  if (unfollowForm) {
    unfollowForm.addEventListener("submit", (e) => {
      e.preventDefault();
      toggleFollow(unfollowForm, true);
    });
  }
});
