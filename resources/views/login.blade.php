<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LearnDesk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            background-color: #ffffff;
            color: #1a1a1a;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===== Navbar ===== */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 60px;
            background-color: #ffffff;
            border-bottom: 2px solid #e5e7eb;
            box-shadow: 0 2px 6px rgba(0,0,0,0.04);
        }
        .logo-container { display: flex; align-items: center; gap: 12px; }
        .logo-icon {
            width: 45px;
            height: 45px;
            object-fit: contain;
            border-radius: 8px;
        }
        .logo-text { font-weight: 700; font-size: 18px; color: #000; }
        .nav-buttons { display: flex; align-items: center; gap: 25px; }
        .btn-login {
            background-color: #4ade80;
            color: white;
            padding: 8px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.3s;
        }
        .btn-login:hover { background-color: #22c55e; }
        .btn-daftar { color: #000; text-decoration: none; font-weight: 500; font-size: 15px; }

        /* ===== Konten Utama ===== */
        main {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 40px;
            padding: 40px 60px;
            max-width: 1300px;
            margin: 0 auto;
            width: 100%;
        }

        /* ===== Kolom Kiri - Gambar ===== */
        .login-illustration {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-illustration img {
            max-width: 100%;
            height: auto;
            max-height: 450px;
        }

        /* ===== Kolom Kanan - Form ===== */
        .login-form-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #000;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Kotak form dengan shadow */
        .form-card {
            background-color: #ffffff;
            padding: 45px 50px;
            border-radius: 35px;
            width: 100%;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            gap: 22px;
            box-shadow: 
                0 15px 30px rgba(0, 0, 0, 0.08),
                0 5px 12px rgba(0, 0, 0, 0.06),
                inset 0 0 20px rgba(0, 0, 0, 0.02);
            border: 1px solid #f0f0f0;
        }

        /* ===== Input Fields ===== */
        .input-group { width: 100%; }
        .form-input {
            width: 100%;
            padding: 16px 25px;
            border-radius: 50px;
            border: 1px solid #e5e7eb;
            font-size: 15px;
            color: #4b5563;
            outline: none;
            transition: all 0.3s;
            background-color: #fafafa;
        }
        .form-input::placeholder { color: #9ca3af; font-weight: 400; }
        .form-input:focus {
            border-color: #3b82f6;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
        }

        /* ===== Checkbox Ingatkan Saya ===== */
        .remember-row {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: -8px;
            padding-right: 8px;
        }
        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #4b5563;
            cursor: pointer;
            user-select: none;
        }
        .remember-label input[type="checkbox"] {
            width: 14px;
            height: 14px;
            cursor: pointer;
            accent-color: #3b82f6;
        }

        /* ===== Tombol Masuk ===== */
        .btn-create-container { display: flex; justify-content: center; margin-top: 8px; }
        .btn-masuk {
            background-color: #1d4ed8;
            color: white;
            padding: 14px 55px;
            border-radius: 50px;
            border: none;
            font-size: 17px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            max-width: 250px;
        }
        .btn-masuk:hover { background-color: #1e40af; transform: translateY(-2px); }

        /* ===== Footer ===== */
        footer {
            padding: 25px 60px;
            text-align: left;
        }
        .footer-text { font-size: 12px; color: #888; font-weight: 400; }

        /* ===== Alert ===== */
        .alert {
            width: 100%;
            max-width: 420px;
            padding: 12px 18px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 13px;
            text-align: center;
        }
        .alert-success { background-color: #d1fae5; color: #065f46; border: 1px solid #10b981; }
        .alert-danger { background-color: #fee2e2; color: #991b1b; border: 1px solid #ef4444; }

        /* ===== Responsif ===== */
        @media (max-width: 900px) {
            main { grid-template-columns: 1fr; padding: 30px 20px; }
            .login-illustration { display: none; } /* Sembunyikan gambar di mobile */
            header { padding: 12px 20px; }
            footer { padding: 20px; }
            .page-title { font-size: 26px; }
            .form-card { padding: 35px 30px; }
        }
    </style>
</head>
<body>

    {{-- ===== Header ===== --}}
    <header>
        <div class="logo-container">
            <img src="https://i.pinimg.com/736x/0a/ac/25/0aac25c7c2ce3dacebc8e1c40b520798.jpg" alt="Logo LearnDesk" class="logo-icon">
            <div class="logo-text">LearnDesk</div>
        </div>
        <div class="nav-buttons">
            <a href="/login" class="btn-login">Login</a>
        </div>
    </header>

    {{-- ===== Konten Utama ===== --}}
    <main>
        {{-- Kolom Kiri: Gambar Ilustrasi --}}
        <div class="login-illustration">
            <img 
                src="{{ asset('images/login-illustration.png') }}" 
                alt="Ilustrasi Login" 
                onerror="this.src='https://cdni.iconscout.com/illustration/premium/thumb/login-3305943-2757111.png'"
            >
        </div>

        {{-- Kolom Kanan: Form Login --}}
        <div class="login-form-wrapper">
            <h1 class="page-title">LOGIN</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="form-card">
                <form action="/login" method="POST" style="display: flex; flex-direction: column; gap: 22px;">
                    @csrf

                    <div class="input-group">
                        <input 
                            type="text" 
                            name="username" 
                            class="form-input" 
                            placeholder="Username" 
                            value="{{ old('username') }}" 
                            required
                        >
                    </div>

                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Password" 
                            required
                        >
                    </div>

                    <div class="remember-row">
                        <label class="remember-label">
                            <input type="checkbox" name="remember" value="1">
                            Ingatkan Saya
                        </label>
                    </div>

                    <div class="btn-create-container">
                        <button type="submit" class="btn-masuk">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    {{-- ===== Footer ===== --}}
    <footer>
        <p class="footer-text">Copy Right @ LearnDesk 2026</p>
    </footer>

</body>
</html>