<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademik Senopati</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #121214;
            color: #e1e1e6;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Latar Belakang Gelombang / Abstract Wave */
        .bg-wave {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.15;
            background-image: radial-gradient(#ffffff 1px, transparent 1px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .bg-glow {
            position: fixed;
            top: -100px;
            right: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(0,0,0,0) 70%);
            border-radius: 50%;
            z-index: -1;
        }

        /* Navigation Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 60px;
            background: rgba(18, 18, 20, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #ffffff;
            text-transform: uppercase;
        }

        .logo-icon {
            width: 18px;
            height: 18px;
            border: 2px solid #ffffff;
            border-radius: 50%;
            display: inline-block;
        }

        nav {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        nav a {
            color: #a8a8b3;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffffff;
        }

        .btn-nav {
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 8px 20px;
            border-radius: 4px;
            color: #ffffff !important;
            transition: all 0.3s ease;
        }

        .btn-nav:hover {
            background: #ffffff;
            color: #121214 !important;
        }

        /* Container Konten Main */
        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Card Modern Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 30px;
            backdrop-filter: blur(8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        /* Alert Notification */
        .alert-success {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            color: #10b981;
            padding: 14px 20px;
            border-radius: 8px;
            margin-bottom: 24px;
        }

        /* Button Style */
        .btn-primary-custom {
            background: #ffffff;
            color: #121214;
            padding: 10px 22px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: transform 0.2s, background-color 0.2s;
        }

        .btn-primary-custom:hover {
            background: #e1e1e6;
            transform: translateY(-2px);
        }

        .btn-secondary-custom {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.88rem;
            transition: background 0.3s;
        }

        .btn-secondary-custom:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .btn-danger-custom {
            background: rgba(239, 68, 68, 0.15);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.88rem;
            transition: background 0.3s;
        }

        .btn-danger-custom:hover {
            background: rgba(239, 68, 68, 0.3);
        }
    </style>
</head>
<body>
    <div class="bg-wave"></div>
    <div class="bg-glow"></div>

    <header>
        <div class="logo">
            <span class="logo-icon"></span>
            Senopati Academic
        </div>
        <nav>
            <a href="{{ route('siswa.index') }}">Data Siswa</a>
            <a href="#">Dashboard</a>
            <a href="#" class="btn-nav">Portal Admin</a>
        </nav>
    </header>

    <main>
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>