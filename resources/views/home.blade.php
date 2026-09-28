<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LearnDesk</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: white;
            min-height: 100vh;
            border-left: 1px solid #333;
            border-right: 1px solid #333;
        }

        /* Navbar */
        .navbar {
            height: 55px;
            background-color: white;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 48px;

            border-bottom: 2px solid #bdbdbd;
            box-shadow: 0 2px 3px #aaa;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo img {
            width: 38px;
            height: 42px;
            object-fit: contain;
        }

        .logo span {
            font-size: 16px;
            font-weight: bold;
            color: #111;
        }

        .navbar nav {
            display: flex;
            align-items: center;
            gap: 26px;
        }

        .navbar nav a {
            text-decoration: none;
            font-size: 14px;
            color: #111;
        }

        .login {
            background-color: #4fc500;
            color: white !important;
            padding: 7px 20px;
            border-radius: 20px;
        }

        /* Home */
        .home {
            min-height: calc(100vh - 130px);

            display: flex;
            align-items: center;
            justify-content: center;

            gap: 70px;

            padding: 40px 60px;
        }

        .home-text {
            width: 570px;
        }

        .home-text h1 {
            margin: 0;
            font-size: 43px;
            line-height: 1.2;
            font-weight: 700;
            color: #171717;
        }

        .home-text h1 span {
            color: #3e80ee;
        }

        .home-text p {
            margin-top: 28px;
            width: 570px;
            font-size: 17px;
            line-height: 1.8;
            color: #555;
        }

        /* Gambar */
        .home-image {
            width: 560px;
            height: 305px;

            overflow: hidden;
            border-radius: 25px;

            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.10);
        }

        .home-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Footer */
        footer {
            height: 75px;
            border-top: 1px solid #eeeeee;

            display: flex;
            align-items: center;

            padding-left: 49px;

            font-size: 9px;
            color: #777;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">

        <div class="logo">
            <img src="https://i.pinimg.com/736x/0a/ac/25/0aac25c7c2ce3dacebc8e1c40b520798.jpg" alt="LearnDesk">
            <span>LearnDesk</span>
        </div>

        <nav>
            <a href="#" class="login">
                Login
            </a>

            <a href="#}">
                Daftar
            </a>
        </nav>

    </header>


    <!-- Home -->
    <main class="home">

        <div class="home-text">

            <h1>
                Materi, Kuis, dan Nilai
                <br>
                dalam <span>Satu Platform</span>
            </h1>

            <p>
                Platform pembelajaran digital untuk guru dan murid.
                Kelola materi, kuis, dan nilai dalam satu aplikasi
                yang mudah digunakan, kapan saja dan di mana saja.
            </p>

        </div>


        <div class="home-image">

            <img
                src="{{ asset('images/home.jpg') }}"
                alt="Pembelajaran LearnDesk"
            >

        </div>

    </main>


    <!-- Footer -->
    <footer>
        Copy Right @ LearnDesk 2026
    </footer>

</body>
</html>