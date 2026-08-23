<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #0f172a, #1e3a8a);
    }

    .login-container {
      width: 100%;
      max-width: 400px;
      padding: 20px;
    }

    .login-box {
      background: #ffffff;
      padding: 40px 35px;
      border-radius: 15px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    }

    .logo {
      width: 70px;
      height: 70px;
      margin: 0 auto 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #2563eb;
      color: white;
      border-radius: 50%;
      font-size: 30px;
    }

    h2 {
      text-align: center;
      color: #111827;
      margin-bottom: 8px;
    }

    .subtitle {
      text-align: center;
      color: #6b7280;
      font-size: 14px;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #374151;
      font-size: 14px;
      font-weight: bold;
    }

    .input-group input {
      width: 100%;
      padding: 13px 15px;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      outline: none;
      font-size: 15px;
      transition: 0.3s;
    }

    .input-group input:focus {
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      font-size: 13px;
    }

    .remember {
      display: flex;
      align-items: center;
      gap: 7px;
      color: #4b5563;
    }

    .options a {
      color: #2563eb;
      text-decoration: none;
    }

    .options a:hover {
      text-decoration: underline;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 8px;
      background: #2563eb;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-btn:hover {
      background: #1d4ed8;
      transform: translateY(-1px);
    }

    .footer {
      text-align: center;
      margin-top: 25px;
      color: #9ca3af;
      font-size: 12px;
    }

    @media (max-width: 480px) {
      .login-box {
        padding: 30px 25px;
      }
    }
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-box">

      <div class="logo">🔐</div>

      <h2>Administator</h2>
      <p class="subtitle">Sign in to access the administration panel</p>

      <form action="#" method="POST">

        <div class="input-group">
          <label for="username">Username</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
            required
          >
        </div>

        <div class="input-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            required
          >
        </div>

        <div class="options">
          <label class="remember">
            <input type="checkbox" name="remember">
            Remember me
          </label>

          <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="login-btn">
          Login
        </button>

      </form>

      <div class="footer">
        © 2026 Admin Panel. All rights reserved.
      </div>

    </div>
  </div>

</body>
</html>