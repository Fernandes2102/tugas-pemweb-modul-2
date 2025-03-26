<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <style>
       body {
    background-image: url('background.jpg'); /* Ganti dengan path gambar Anda */
    background-size: cover;  /* Memastikan gambar memenuhi seluruh layar */
    background-position: center; /* Memusatkan gambar */
    background-repeat: no-repeat; /* Mencegah pengulangan gambar */
    height: 100vh; /* Mengatur tinggi body sesuai tinggi layar */
    margin: 0; /* Menghilangkan margin bawaan browser */

        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 255, 85, 0.1);
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Login</h2>
        <form id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <span class="error" id="usernameError"></span>
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span class="error" id="passwordError"></span>
            <br><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;
            let usernameError = "";
            let passwordError = "";
            
            if (username.length > 7) {
                usernameError = "Username tidak boleh lebih dari tujuh karakter.";
            }
            
            let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{10,}$/;
            if (!passwordRegex.test(password)) {
                passwordError = "Password harus minimal 10 karakter dan mengandung huruf besar, huruf kecil, angka, serta karakter khusus.";
            }
            
            document.getElementById("usernameError").textContent = usernameError;
            document.getElementById("passwordError").textContent = passwordError;
            
            if (!usernameError && !passwordError) {
                alert("Form berhasil dikirim!");
            }
        });
    </script>
</body>
</html>
