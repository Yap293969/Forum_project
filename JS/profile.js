function previewImage(input) {
    var profilePic = document.querySelector('.profile-userpic img');
    var file = input.files[0];

    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
      profilePic.src = e.target.result;
      saveProfilePicture(e.target.result);
    };
      reader.readAsDataURL(file);
  }
}

function saveProfilePicture(imageData) {
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_profile_picture.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
  if (xhr.readyState === 4 && xhr.status === 200) {
      console.log('Profile picture saved successfully.');
  }
};
xhr.send('imageData=' + encodeURIComponent(imageData));
}
document.getElementById('addPostBtn').addEventListener('click', function() {
// Navigate to the desired page
window.location.href = 'post_restart_test.php';
});
