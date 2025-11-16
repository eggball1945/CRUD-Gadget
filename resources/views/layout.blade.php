<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics CRUD</title>
    <style>
        /* Base */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
            background: linear-gradient(180deg, #f5f7fb, #eef1f7);
            color: #1f2937;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(10px);
            padding: 6px 12px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .navbar-brand {
            color: #6366f1;
            font-weight: 700;
            letter-spacing: 0.6px;
            text-decoration: none;
            text-shadow: 0 1px 1px rgba(99, 102, 241, 0.15);
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            transition: 0.15s ease;
        }

        /* Primary – Indigo */
        .btn-primary {
            background: linear-gradient(180deg, #747cf7, #6366f1);
            color: #fff;
            box-shadow: 0 8px 18px rgba(99, 102, 241, 0.25);
        }

        /* Secondary – Soft Gray */
        .btn-secondary {
            background: #f3f4f6;
            color: #4b5563;
            border: 1px solid #e5e7eb;
            padding: 6px 10px;
            border-radius: 6px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .btn-sm {
            padding: 6px 8px;
            font-size: 0.88rem;
            border-radius: 6px;
        }

        /* Success */
        .btn-success {
            background: linear-gradient(180deg, #34d399, #10b981);
            color: #fff;
        }

        /* Warning */
        .btn-warning {
            background: linear-gradient(180deg, #fcd34d, #f59e0b);
            color: #1f1b16;
        }

        /* Danger */
        .btn-danger {
            background: linear-gradient(180deg, #f87171, #ef4444);
            color: #fff;
        }

        /* Cards */
        .card {
            background: #ffffff;
            padding: 18px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(0, 0, 0, 0.03);
            margin-bottom: 18px;
        }

        .header {
            margin-bottom: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Tables */
        .table {
            width: 100%;
            border-collapse: collapse;
            background: transparent;
        }

        .table th,
        .table td {
            padding: 12px 10px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        .table thead th {
            background: #f9fafb;
            font-weight: 700;
            color: #374151;
            border-bottom: 2px solid #e5e7eb;
        }

        .table tbody tr:hover {
            background: rgba(99, 102, 241, 0.05);
        }

        /* Forms */
        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #374151;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            background: #ffffff;
            outline: none;
            transition: 0.15s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.25);
            border-color: #6366f1;
        }

        /* Alerts */
        .alert {
            padding: 12px 14px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .alert-danger {
            background: #fee2e2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        a {
            color: inherit;
        }

        .footer-note {
            font-size: 0.85rem;
            color: #6b7280;
            margin-top: 30px;
            text-align: center;
        }

        /* Responsive */
        @media(max-width: 600px) {
            .container {
                padding: 12px;
            }

            .navbar .container {
                flex-direction: column;
                gap: 8px;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .table th,
            .table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('electronics.index') }}">Electronics CRUD</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
