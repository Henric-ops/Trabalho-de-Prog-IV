<!DOCTYPE html>
<html>

<head>
    <title>Sistema TCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones modernos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- AOS - Animate On Scroll -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.min.css" />

    <style>
        :root {
            --primary: #1e40af;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --success: #059669;
            --success-light: #10b981;
            --warning: #ea580c;
            --warning-light: #f97316;
            --danger: #dc2626;
            --danger-light: #ef4444;
            --info: #0891b2;
            --bg-light: #f8fafc;
            --bg-white: #ffffff;
            --text-dark: #1f2937;
            --text-muted: #6b7280;
            --border-color: #e5e7eb;
            --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.12);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            font-family: 'Segoe UI', 'Roboto', sans-serif;
            color: var(--text-dark);
            min-height: 100vh;
            line-height: 1.6;
        }

        .navbar-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border-bottom: none;
            box-shadow: var(--shadow-md);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-custom .navbar-brand {
            color: white !important;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
        }

        .navbar-custom .navbar-brand i {
            font-size: 1.75rem;
            animation: fadeInDown 0.6s ease;
        }

        .navbar-custom .navbar-brand:hover {
            transform: translateY(-2px);
        }

        .navbar-custom a {
            color: rgba(255, 255, 255, 0.9) !important;
            text-decoration: none;
            margin: 0 1.5rem;
            font-weight: 500;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-custom a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: rgba(255, 255, 255, 0.8);
            transition: width 0.3s ease;
        }

        .navbar-custom a:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        .navbar-custom a:hover::after {
            width: 100%;
        }

        .container {
            max-width: 1400px;
            padding: 2rem 1rem;
        }

        .card-custom {
            background: var(--bg-white);
            border-radius: 16px;
            border: 1px solid var(--border-color);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            position: relative;
        }

        .card-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-light);
        }

        .card-custom:hover::before {
            transform: scaleX(1);
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .header-section h4 {
            font-weight: 700;
            color: var(--text-dark);
            font-size: 1.75rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .header-section h4 i {
            color: var(--primary);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.25rem;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn i {
            font-size: 1rem;
        }

        /* Success Button */
        .btn-success {
            background: linear-gradient(135deg, var(--success) 0%, var(--success-light) 100%);
            color: white;
            border: none;
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(16, 185, 129, 0.3);
        }

        .btn-success:active {
            transform: translateY(0);
        }

        /* Warning Button */
        .btn-warning {
            background: linear-gradient(135deg, var(--warning) 0%, var(--warning-light) 100%);
            color: white;
            border: none;
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(234, 88, 12, 0.3);
        }

        .btn-warning:active {
            transform: translateY(0);
        }

        /* Danger Button */
        .btn-danger {
            background: linear-gradient(135deg, var(--danger) 0%, var(--danger-light) 100%);
            color: white;
            border: none;
        }

        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(239, 68, 68, 0.3);
        }

        .btn-danger:active {
            transform: translateY(0);
        }

        /* Primary Button */
        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(30, 64, 175, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        /* Size Variants */
        .btn-sm {
            padding: 0.5rem 0.875rem;
            font-size: 0.875rem;
        }

        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }

        .table thead th {
            font-weight: 600;
            color: var(--text-dark);
            border-bottom: 2px solid var(--border-color);
            padding: 1.25rem;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }

        .table tbody tr {
            border-bottom: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f9fafb;
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 1.25rem;
            color: var(--text-dark);
            vertical-align: middle;
        }

        .table tbody tr:last-child {
            border-bottom: none;
        }

        .table-light {
            background-color: transparent;
        }

        .toast-custom {
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 9999;
            animation: slideInRight 0.4s ease;
        }

        .toast {
            border-radius: 12px !important;
            box-shadow: var(--shadow-lg) !important;
            border: none !important;
        }

        .text-bg-success {
            background: linear-gradient(135deg, var(--success) 0%, var(--success-light) 100%) !important;
        }

        .text-bg-danger {
            background: linear-gradient(135deg, var(--danger) 0%, var(--danger-light) 100%) !important;
        }

        .titulo-card {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 1.1rem;
        }

        .label {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .valor {
            color: var(--text-dark);
            font-weight: 500;
            font-size: 1rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(400px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideOutRight {
            to {
                opacity: 0;
                transform: translateX(400px);
            }
        }

        @keyframes pulse-soft {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .fade-in {
            animation: fadeInDown 0.6s ease;
        }

        @media (max-width: 768px) {
            .navbar-custom .navbar-brand {
                font-size: 1.25rem;
            }

            .navbar-custom a {
                margin: 0 0.75rem;
                font-size: 0.9rem;
            }

            .header-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-section h4 {
                font-size: 1.5rem;
            }

            .container {
                padding: 1rem 0.5rem;
            }

            .card-custom {
                padding: 1.5rem;
            }

            .table-responsive {
                font-size: 0.9rem;
            }

            .table thead th {
                padding: 0.875rem;
                font-size: 0.75rem;
            }

            .table tbody td {
                padding: 0.875rem;
            }
        }

        /* ============ FORM CONTROLS ============ */
        .form-control,
        .form-select {
            border: 1.5px solid var(--border-color);
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            background-color: var(--bg-white);
            color: var(--text-dark);
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
            background-color: var(--bg-white);
        }

        .form-control::placeholder {
            color: var(--text-muted);
            font-weight: 400;
        }

        .form-control:hover,
        .form-select:hover {
            border-color: var(--primary-light);
        }

        /* Badge Styles */
        .badge {
            font-weight: 600;
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .badge i {
            font-size: 0.85rem;
        }

        /* Secondary Button */
        .btn-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #9ca3af 100%);
            color: white;
            border: none;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(107, 114, 128, 0.3);
        }

        /* Utilities */
        .gap-2 {
            gap: 0.5rem !important;
        }

        .gap-3 {
            gap: 0.75rem !important;
        }

        .gap-4 {
            gap: 1rem !important;
        }

        .ms-1 {
            margin-left: 0.25rem !important;
        }

        .ms-2 {
            margin-left: 0.5rem !important;
        }

        .ms-3 {
            margin-left: 0.75rem !important;
        }

        .me-1 {
            margin-right: 0.25rem !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        .me-3 {
            margin-right: 0.75rem !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 0.75rem !important;
        }

        .mb-4 {
            margin-bottom: 1rem !important;
        }

        .mb-5 {
            margin-bottom: 1.5rem !important;
        }

        .mb-6 {
            margin-bottom: 2rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 0.75rem !important;
        }

        .mt-4 {
            margin-top: 1rem !important;
        }

        .mt-5 {
            margin-top: 1.5rem !important;
        }

        .py-5 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .d-flex {
            display: flex !important;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-end {
            justify-content: flex-end !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        .d-none {
            display: none !important;
        }

        .d-md-inline {
            display: inline !important;
        }

        @media (min-width: 768px) {
            .d-md-inline {
                display: inline !important;
            }
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .text-dark {
            color: var(--text-dark) !important;
        }

        .text-muted {
            color: var(--text-muted) !important;
        }

        .text-primary {
            color: var(--primary) !important;
        }

        .text-success {
            color: var(--success) !important;
        }

        .text-warning {
            color: var(--warning) !important;
        }

        .text-danger {
            color: var(--danger) !important;
        }

        .text-info {
            color: var(--info) !important;
        }

        .text-white {
            color: white !important;
        }

        .bg-info {
            background-color: var(--info) !important;
        }

        .bg-primary {
            background-color: var(--primary) !important;
        }

        .bg-success {
            background-color: var(--success) !important;
        }

        .bg-opacity-10 {
            opacity: 0.15 !important;
            mix-blend-mode: lighten;
        }

        .badge.bg-primary.bg-opacity-10 {
            background-color: rgba(30, 64, 175, 0.15) !important;
            opacity: 1 !important;
        }

        .badge.bg-success.bg-opacity-10 {
            background-color: rgba(5, 150, 105, 0.15) !important;
            opacity: 1 !important;
        }

        .badge.bg-info.bg-opacity-10 {
            background-color: rgba(8, 145, 178, 0.15) !important;
            opacity: 1 !important;
        }

        .badge.bg-warning.bg-opacity-10 {
            background-color: rgba(234, 88, 12, 0.15) !important;
            opacity: 1 !important;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.5rem 0.75rem;
            font-weight: 600;
            font-size: 0.8rem;
            border-radius: 6px;
        }

        .badge i {
            font-size: 0.85rem;
        }

        .text-info {
            color: var(--info) !important;
        }

        .text-warning {
            color: var(--warning) !important;
        }

        .bg-info {
            background-color: var(--info) !important;
        }

        .bg-warning {
            background-color: var(--warning) !important;
        }

        small {
            font-size: 0.85rem;
        }

        .table-light {
            background-color: #f9fafb;
        }

        .h5 {
            font-size: 1.25rem;
            font-weight: 700;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-left: -0.5rem;
            margin-right: -0.5rem;
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
            padding: 0 0.5rem;
        }

        .col-md-3 {
            padding: 0 0.5rem;
        }

        .col-md-4 {
            padding: 0 0.5rem;
        }

        .col-md-6 {
            padding: 0 0.5rem;
        }

        .col-lg-8 {
            padding: 0 0.5rem;
        }

        @media (min-width: 576px) {
            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 992px) {
            .col-lg-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
        }

        .g-3 {
            gap: 1rem !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .me-1 {
            margin-right: 0.25rem !important;
        }

        /* Estilos adicionais para garantir visibilidade */
        .d-lg-inline {
            display: inline !important;
        }

        @media (max-width: 991px) {
            .d-lg-inline {
                display: none !important;
            }
        }

        .d-md-inline {
            display: inline !important;
        }

        @media (max-width: 767px) {
            .d-md-inline {
                display: none !important;
            }
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .fw-semibold {
            font-weight: 600 !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        /* Fix para badges sem espacos extras */
        .badge:not(:last-child) {
            margin-right: 0.25rem;
        }

        /* Estilos para elementos vazios */
        .empty-state {
            text-align: center;
            padding: 2rem;
        }

        .empty-state i {
            font-size: 3rem;
            color: #d1d5db;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('tccs.index') }}">
                <i class="fas fa-book-reader"></i>
                <span>Repositório TCCs</span>
            </a>

            <div class="ms-auto">
                <a href="{{ route('tccs.index') }}" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    <span>TCCs</span>
                </a>
                <a href="{{ route('bancas.index') }}" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Bancas</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.min.js"></script>

    <script>
        // Inicializar AOS
        AOS.init({
            duration: 800,
            delay: 100,
            once: true,
            easing: 'ease-out-cubic'
        });

        // Toast auto-hide
        setTimeout(() => {
            let toast = document.getElementById('toastSuccess');
            if (toast) {
                toast.classList.remove('show');
                toast.classList.add('slideOutRight');
            }
        }, 4000);
    </script>

    @if(session('success'))
        <div class="toast-custom">
            <div id="toastSuccess" class="toast align-items-center text-bg-success border-0 show" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            </div>
        </div>
    @endif

</body>

</html>