// JavaScript function for form submission
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('form');

  form.addEventListener('submit', function (event) {
    event.preventDefault();
    const email = document.querySelector('input[name="email"]').value;
    const password = document.querySelector('input[name="password"]').value;

    // Here, you can add code to process the form data (e.g., send it to a server).
    // For demonstration purposes, we'll just display the input values.
    alert(`Email: ${email}\nPassword: ${password}`);
  });
});
