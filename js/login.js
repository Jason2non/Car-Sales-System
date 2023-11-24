function cancelLogin() {
    // Perform any cancel action here (e.g., redirect)
    alert("Login canceled");
}

document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');

    loginForm.addEventListener('submit', function (event) {
        event.preventDefault();
        // Validate the form data and submit it to the server if needed
        alert("Login Successful");
        windows.open("showroom.php","_self");
    });
});
