<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar - LearnDesk</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            min-height: 100vh;
            border-left: 1px solid #333;
            border-right: 1px solid #333;
        }

        /* =========================
           NAVBAR
        ========================= */

        header {
            height: 55px;
            background-color: white;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 31px 0 48px;

            border-bottom: 2px solid #bdbdbd;
            box-shadow: 0 2px 3px #aaa;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo img {
            width: 35px;
            height: 40px;
            object-fit: contain;
        }

        .logo span {
            font-size: 13px;
            font-weight: bold;
            color: #111;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 26px;
        }

        nav a {
            text-decoration: none;
            color: #111;
            font-size: 14px;
        }

        .login {
            background-color: #4fc500;
            color: white !important;

            padding: 6px 20px;

            border-radius: 20px;
        }

        /* =========================
           REGISTER
        ========================= */

        main {
            text-align: center;
            padding-top: 62px;
        }

        h1 {
            margin: 0 0 20px;

            font-size: 23px;
            font-weight: normal;

            color: #111;
        }

        .register-box {
            width: 365px;
            height: 235px;

            margin: auto;

            padding: 20px 25px;

            background-color: #f8fafc;

            border-radius: 23px;

            box-shadow:
                0 0 5px #cfcfcf,
                0 0 9px #d8d8d8;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 315px;
            height: 31px;

            border: none;
            outline: none;

            border-radius: 20px;

            padding: 0 25px;

            margin-bottom: 21px;

            font-size: 14px;

            box-shadow:
                3px 4px 3px #bdbdbd,
                0 0 2px #cfcfcf;
        }

        input::placeholder {
            color: #999;
        }

        button {
            margin-top: 8px;

            width: 68px;
            height: 24px;

            border: none;
            border-radius: 15px;

            background-color: #2868e8;

            color: white;

            font-size: 11px;
            font-style: italic;

            cursor: pointer;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            position: fixed;

            bottom: 10px;
            left: 49px;

            font-size: 8px;

            color: #777;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header>

        <div class="logo">
            <img src="LINK_LOGO_PINTEREST" alt="LearnDesk">
            <span>LearnDesk</span>
        </div>

        <nav>

            <a href="{{ route('login') }}" class="login">
                Login
            </a>

            <a href="{{ route('register') }}">
                Daftar
            </a>

        </nav>

    </header>


    <!-- Register -->
    <main>

        <h1>Buat Akun</h1>

        <div class="register-box">

            <form action="{{ route('register.store') }}" method="POST">

                @csrf

                <input
                    type="text"
                    name="name"
                    placeholder="Nama"
                    value="{{ old('name') }}"
                >

                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    value="{{ old('username') }}"
                >

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                >

                <button type="submit">
                    Create
                </button>

            </form>

        </div>

    </main>


    <!-- Footer -->
    <footer>
        Copy Right @ LearnDesk 2026
    </footer>

</body>
</html>