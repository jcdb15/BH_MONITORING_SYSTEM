<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Administrator Login</title>

    <style>

        /* =========================
           RESET
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }


        /* =========================
           BODY
        ========================= */

        body {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;

            background:
                linear-gradient(
                    135deg,
                    #0f172a 0%,
                    #1e3a8a 100%
                );
        }


        /* =========================
           LOGIN CONTAINER
        ========================= */

        .login-container {
            width: 100%;
            max-width: 400px;
        }


        /* =========================
           LOGIN BOX
        ========================= */

        .login-box {
            width: 100%;

            background: #ffffff;

            padding: 40px 35px;

            border-radius: 15px;

            box-shadow:
                0 15px 40px rgba(0, 0, 0, 0.25);
        }


        /* =========================
           LOGO
        ========================= */

        .logo {
            width: 70px;
            height: 70px;

            margin: 0 auto 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #2563eb;

            color: #ffffff;

            border-radius: 50%;

            font-size: 30px;

            box-shadow:
                0 8px 20px rgba(37, 99, 235, 0.25);
        }


        /* =========================
           TITLE
        ========================= */

        h2 {
            text-align: center;

            color: #111827;

            font-size: 24px;

            margin-bottom: 8px;
        }


        .subtitle {
            text-align: center;

            color: #6b7280;

            font-size: 14px;

            line-height: 1.5;

            margin-bottom: 30px;
        }


        /* =========================
           ERROR MESSAGE
        ========================= */

        .error-message {
            background: #fee2e2;

            color: #b91c1c;

            padding: 12px;

            border-radius: 8px;

            margin-bottom: 20px;

            font-size: 14px;

            text-align: center;

            border: 1px solid #fecaca;
        }


        /* =========================
           INPUT GROUP
        ========================= */

        .input-group {
            margin-bottom: 20px;
        }


        .input-group label {
            display: block;

            color: #374151;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 8px;
        }


        .input-group input {
            width: 100%;

            padding: 13px 15px;

            border: 1px solid #d1d5db;

            border-radius: 8px;

            outline: none;

            background: #ffffff;

            color: #111827;

            font-size: 15px;

            transition: all 0.3s ease;
        }


        .input-group input::placeholder {
            color: #9ca3af;
        }


        .input-group input:focus {
            border-color: #2563eb;

            box-shadow:
                0 0 0 3px rgba(37, 99, 235, 0.15);
        }


        /* =========================
           OPTIONS
        ========================= */

        .options {
            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 25px;

            font-size: 13px;
        }


        .remember {
            display: flex;

            align-items: center;

            gap: 7px;

            color: #4b5563;

            cursor: pointer;
        }


        .remember input {
            width: 15px;
            height: 15px;

            cursor: pointer;

            accent-color: #2563eb;
        }


        .options a {
            color: #2563eb;

            text-decoration: none;
        }


        .options a:hover {
            text-decoration: underline;
        }


        /* =========================
           LOGIN BUTTON
        ========================= */

        .login-btn {
            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 8px;

            background: #2563eb;

            color: #ffffff;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition: all 0.3s ease;
        }


        .login-btn:hover {
            background: #1d4ed8;

            transform: translateY(-1px);

            box-shadow:
                0 5px 15px rgba(37, 99, 235, 0.25);
        }


        .login-btn:active {
            transform: translateY(0);
        }


        /* =========================
           FOOTER
        ========================= */

        .footer {
            text-align: center;

            margin-top: 25px;

            color: #9ca3af;

            font-size: 12px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 480px) {

            body {
                padding: 15px;
            }


            .login-box {
                padding: 30px 25px;

                border-radius: 12px;
            }


            .logo {
                width: 60px;
                height: 60px;

                font-size: 26px;
            }


            h2 {
                font-size: 22px;
            }


            .subtitle {
                font-size: 13px;

                margin-bottom: 25px;
            }


            .options {
                flex-direction: column;

                align-items: flex-start;

                gap: 12px;
            }


            .input-group input {
                padding: 12px;
            }


            .login-btn {
                padding: 13px;
            }

        }

    </style>

</head>


<body>


    <div class="login-container">

        <div class="login-box">


            <!-- ADMIN ICON -->

            <div class="logo">
                🔐
            </div>


            <!-- TITLE -->

            <h2>
                Administrator
            </h2>


            <p class="subtitle">
                Sign in to access the administration panel
            </p>


            <!-- ERROR MESSAGE -->

            @if ($errors->any())

                <div class="error-message">
                    {{ $errors->first() }}
                </div>

            @endif


            <!-- LOGIN FORM -->

            <form
                action="{{ route('admin.login.submit') }}"
                method="POST"
            >

                @csrf


                <!-- EMAIL -->

                <div class="input-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        autocomplete="username"
                        value="{{ old('email') }}"
                        required
                    >

                </div>


                <!-- PASSWORD -->

                <div class="input-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >

                </div>


                <!-- OPTIONS -->

                <div class="options">

                    <label class="remember">

                        <input
                            type="checkbox"
                            name="remember"
                        >

                        Remember me

                    </label>


                    <a href="#">
                        Forgot Password?
                    </a>

                </div>


                <!-- LOGIN BUTTON -->

                <button
                    type="submit"
                    class="login-btn"
                >
                    Login
                </button>


            </form>


            <!-- FOOTER -->

            <div class="footer">
                © 2026 Admin Panel. All rights reserved.
            </div>


        </div>

    </div>


</body>

</html>