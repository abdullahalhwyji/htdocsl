<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
   /* Colors */
   :root {
      --greenSeaweed: rgba(2, 128, 144, 1);
      --blueQueen: rgba(69, 105, 144, 1);
      --redFire: rgba(0, 0, 0, 1);
      --fontAsap: 'Asap', sans-serif;
    }

    body {
      background-color: var(--redFire);
      font-family: var(--fontAsap);
    }

    .login {
      overflow: hidden;
      background-color: white;
      padding: 40px 30px 30px 30px;
      border-radius: 10px;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 400px;
      transform: translate(-50%, -50%);
      transition: transform 300ms, box-shadow 300ms;
      box-shadow: 5px 10px 10px var(--greenSeaweed, 0.2);
    }

    .login::before,
    .login::after {
      content: '';
      position: absolute;
      width: 600px;
      height: 600px;
      border-top-left-radius: 40%;
      border-top-right-radius: 45%;
      border-bottom-left-radius: 35%;
      border-bottom-right-radius: 40%;
      z-index: -1;
    }

    .login::before {
      left: 40%;
      bottom: -130%;
      background-color: rgba(69, 105, 144, 0.15);
      animation: wawes 6s infinite linear;
    }

    .login::after {
      left: 35%;
      bottom: -125%;
      background-color: rgba(2, 128, 144, 0.2);
      animation: wawes 7s infinite;
    }

    .login > input {
      font-family: var(--fontAsap);
      display: block;
      border-radius: 5px;
      font-size: 16px;
      background: white;
      width: calc(100% - 20px);
      border: 0;
      padding: 10px;
      margin: 15px -10px;
    }

    .login > button {
      font-family: var(--fontAsap);
      cursor: pointer;
      color: #fff;
      font-size: 16px;
      text-transform: uppercase;
      width: 80px;
      border: 0;
      padding: 10px 0;
      margin-top: 10px;
      margin-left: -5px;
      border-radius: 5px;
      background-color: var(--redFire);
      transition: background-color 300ms;
    }

    .login > button:hover {
      background-color: #c4314b; /* Darkened redFire color */
    }

    @keyframes wawes {
      from {
        transform: rotate(0);
      }
      to {
        transform: rotate(360deg);
      }
    }

    a {
      text-decoration: none;
      color: rgba(255, 255, 255, 0.6);
      position: absolute;
      right: 10px;
      bottom: 10px;
      font-size: 12px;
    }
  </style>
</head>
<body>

  <div class="login">
    <input type="text" placeholder="Username" id="username">
    <input type="password" placeholder="Password" id="password">
    <button onclick="validateLogin()">Login</button>
  </div>

  <script>
    function validateLogin() {
      // Get input values
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Check if credentials are correct (Replace this check with your authentication logic)
      const validUsername = '123';
      const validPassword = '123';

      if (username === validUsername && password === validPassword) {
        // Redirect to index.php on successful login
        window.location.href = 'index.php';
      } else {
        alert('Invalid credentials. Please try again.'); // Display alert for unsuccessful login
      }
    }
  </script>
</body>
</html>

