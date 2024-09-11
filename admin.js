document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === "admin" && password === "admind123@") {
        alert('Login successful!');
        // Redirect to another page or perform any other action
    } else {
        document.getElementById('error-message').textContent = 'Invalid username or password!';
    }
});
