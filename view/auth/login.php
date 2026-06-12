<?php
/**
 * AgroStock PRO - Sistema de Gestión de Inventario y Ventas de Insumos Agrícolas
 * Vista de Inicio de Sesión (Login)
 * 
 * @author Rubén Darío Delgado Cruz
 * @version 1.1 (Optimizada y Expandida)
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Acceso al portal AgroStock PRO. Inicie sesión para gestionar existencias y transacciones.">
    <meta name="author" content="Rubén Darío Delgado Cruz">
    <title>Iniciar Sesión - AgroStock PRO</title>
    <!-- Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            /* Paleta Agrícola Premium */
            --color-primary: hsl(142, 72%, 25%); /* Verde bosque */
            --color-primary-dark: hsl(142, 72%, 15%);
            --color-primary-light: hsl(142, 72%, 93%);
            --color-primary-soft: hsl(142, 72%, 45%);
            
            --color-accent: hsl(45, 100%, 51%); /* Oro trigo */
            --color-accent-dark: hsl(45, 100%, 41%);
            
            --color-dark: hsl(210, 29%, 14%);
            --color-light: hsl(210, 20%, 98%);
            --color-white: #ffffff;
            --color-border: hsl(210, 14%, 90%);
            
            --transition-smooth: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
            --shadow-subtle: 0 4px 25px rgba(0, 0, 0, 0.05);
            --shadow-premium: 0 15px 40px rgba(27, 67, 50, 0.12);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-light);
            color: var(--color-dark);
            min-height: 100vh;
            display: flex;
            align-items: stretch;
            margin: 0;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .display-font {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        /* Contenedores Principales Split-Screen */
        .split-container-left {
            flex: 1;
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, #0a2216 100%);
            color: var(--color-white);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 50px;
            position: relative;
            overflow: hidden;
        }

        .split-container-left::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M54 48c-2 0-3 1-4 2v4c0 1-1 2-2 2h-4c-1 0-2-1-2-2v-4c-1-1-2-2-4-2h-4c-1 0-2-1-2-2v-4c0-1 1-2 2-2h4c2 0 3-1 4-2v-4c0-1 1-2 2-2h4c1 0 2 1 2 2v4c1 1 2 2 4 2h4c1 0 2 1 2 2v4c0 1-1 2-2 2h-4zM30 20c-2 0-3 1-4 2v4c0 1-1 2-2 2h-4c-1 0-2-1-2-2v-4c-1-1-2-2-4-2h-4c-1 0-2-1-2-2v-4c0-1 1-2 2-2h4c2 0 3-1 4-2v-4c0-1 1-2 2-2h4c1 0 2 1 2 2v4c1 1 2 2 4 2h4c1 0 2 1 2 2v4c0 1-1 2-2 2h-4z" fill="%232d6a4f" fill-opacity="0.12" fill-rule="evenodd"/%3E%3C/svg%3E');
            opacity: 0.8;
            pointer-events: none;
        }

        .split-container-right {
            width: 100%;
            max-width: 580px;
            background-color: var(--color-white);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 50px;
            box-shadow: -10px 0 40px rgba(0,0,0,0.03);
            position: relative;
            z-index: 10;
        }

        /* Branding e Identidad visual */
        .brand-wrapper {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-white);
            text-decoration: none;
            font-size: 1.6rem;
        }

        .brand-wrapper i {
            color: var(--color-accent);
        }

        .brand-wrapper-right {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--color-primary);
            text-decoration: none;
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        .brand-wrapper-right i {
            color: var(--color-accent-dark);
        }

        /* Valoración / Tarjetas en Panel Izquierdo */
        .value-card-box {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: auto 0;
            max-width: 480px;
        }

        .value-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 22px;
            display: flex;
            gap: 18px;
            align-items: flex-start;
            transition: var(--transition-smooth);
        }

        .value-card:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: rgba(255, 255, 255, 0.15);
            transform: translateX(10px);
        }

        .value-icon {
            width: 45px;
            height: 45px;
            background: rgba(40, 167, 69, 0.15);
            color: var(--color-accent);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .value-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--color-white);
        }

        .value-info p {
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 0;
            line-height: 1.5;
        }

        /* Formulario e Inputs */
        .title-group h2 {
            font-size: 2.1rem;
            color: var(--color-dark);
            margin-bottom: 8px;
        }

        .title-group p {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 30px;
        }

        /* Selector de Roles */
        .login-role-select {
            display: flex;
            gap: 8px;
            margin-bottom: 28px;
        }

        .role-btn {
            flex: 1;
            padding: 12px 6px;
            border: 1px solid var(--color-border);
            border-radius: 10px;
            background-color: var(--color-white);
            font-family: 'Outfit', sans-serif;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--color-dark);
            transition: var(--transition-smooth);
            cursor: pointer;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
        }

        .role-btn.active {
            border-color: var(--color-primary);
            background-color: var(--color-primary-light);
            color: var(--color-primary-dark);
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.1);
        }

        .form-control-custom {
            border: 1px solid var(--color-border);
            border-radius: 10px;
            padding: 12px 42px 12px 42px;
            font-size: 0.95rem;
            transition: var(--transition-smooth);
        }

        .form-control-custom:focus {
            border-color: var(--color-primary-soft);
            box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.15);
        }

        .form-group-icon {
            position: relative;
        }

        .form-group-icon i.prefix-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aab2;
            transition: var(--transition-smooth);
        }

        .form-group-icon i.toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aab2;
            cursor: pointer;
            transition: var(--transition-smooth);
        }

        .form-group-icon i.toggle-password:hover {
            color: var(--color-dark);
        }

        .form-control-custom:focus + i.prefix-icon {
            color: var(--color-primary);
        }

        /* Botón Iniciar Sesión */
        .btn-premium {
            background-color: var(--color-primary);
            color: var(--color-white);
            border: 2px solid var(--color-primary);
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 10px;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
        }

        .btn-premium:hover {
            background-color: var(--color-primary-dark);
            border-color: var(--color-primary-dark);
            color: var(--color-white);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 67, 50, 0.25);
        }

        .btn-back-home {
            position: absolute;
            top: 30px;
            right: 35px;
            color: var(--color-dark);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 8px;
            border: 1px solid var(--color-border);
        }

        .btn-back-home:hover {
            background-color: var(--color-light);
            color: var(--color-primary);
        }

        /* Responsive Layout */
        @media (max-width: 991.98px) {
            body {
                display: block;
            }
            .split-container-left {
                display: none;
            }
            .split-container-right {
                max-width: 100%;
                min-height: 100vh;
                padding: 40px 30px;
            }
            .btn-back-home {
                position: static;
                display: inline-flex;
                margin-bottom: 25px;
                align-self: flex-start;
            }
        }
    </style>
</head>
<body>

    <!-- Panel Izquierdo: Valor del Sistema -->
    <div class="split-container-left">
        <a href="../../Public/Index.php" class="brand-wrapper">
            <i class="bi bi-patch-check-fill"></i>
            <span class="fw-bold">AgroStock<span class="text-success-light" style="color: #40916c;">PRO</span></span>
        </a>
        
        <div class="value-card-box">
            <h2 class="text-white display-font mb-4 fs-1">Gestión Eficiente y Trazable para el Agro</h2>
            
            <!-- Item 1: Stock -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-check-circle-fill"></i></div>
                <div class="value-info">
                    <h4>Monitoreo Inteligente de Stock</h4>
                    <p>Alertas visuales de existencias mínimas y control de lotes con fechas de vencimiento químico.</p>
                </div>
            </div>
            
            <!-- Item 2: POS -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-receipt"></i></div>
                <div class="value-info">
                    <h4>Punto de Venta (POS) Atómico</h4>
                    <p>Facturación síncrona que descuenta inventario instantáneamente y prohíbe el stock negativo.</p>
                </div>
            </div>
            
            <!-- Item 3: Auditoría -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-shield-fill-check"></i></div>
                <div class="value-info">
                    <h4>Seguridad Robusta por Roles</h4>
                    <p>Control de acceso RBAC nativo que restringe vistas y base de datos de acuerdo a los privilegios.</p>
                </div>
            </div>
        </div>

        <div class="footer-left text-white-50 small">
            &copy; 2026 AgroStock PRO &bull; Control y Calidad Tecnológica.
        </div>
    </div>

    <!-- Panel Derecho: Formulario de Login -->
    <div class="split-container-right">
        <!-- Botón volver atrás -->
        <a href="../../Public/Index.php" class="btn-back-home">
            <i class="bi bi-arrow-left"></i> Volver al Inicio
        </a>

        <!-- Marca en versión móvil -->
        <div class="d-flex d-lg-none brand-wrapper-right">
            <i class="bi bi-patch-check-fill"></i>
            <span class="fw-bold">AgroStock<span class="text-success">PRO</span></span>
        </div>

        <div class="title-group">
            <h2>Acceder al Sistema</h2>
            <p>Selecciona tu perfil de acceso e ingresa tus credenciales.</p>
        </div>

        <!-- Selector de Roles -->
        <div class="login-role-select">
            <div class="role-btn active" onclick="selectRole('administrador')">
                <i class="bi bi-shield-lock-fill fs-5"></i> Admin
            </div>
            <div class="role-btn" onclick="selectRole('vendedor')">
                <i class="bi bi-shop fs-5"></i> Vendedor
            </div>
            <div class="role-btn" onclick="selectRole('cliente')">
                <i class="bi bi-person-fill-check fs-5"></i> Cliente
            </div>
        </div>

        <!-- Formulario -->
        <form action="#" method="POST" onsubmit="handleLogin(event)">
            <!-- Rol Oculto -->
            <input type="hidden" name="rol" id="userRole" value="administrador">

            <!-- Correo Electrónico -->
            <div class="mb-3">
                <label for="loginEmail" class="form-label fw-semibold text-dark small">Correo Electrónico</label>
                <div class="form-group-icon">
                    <input type="email" class="form-control form-control-custom" id="loginEmail" placeholder="correo@agrostock.com" required>
                    <i class="bi bi-envelope-fill prefix-icon"></i>
                </div>
            </div>

            <!-- Contraseña -->
            <div class="mb-4">
                <div class="d-flex justify-content-between">
                    <label for="loginPassword" class="form-label fw-semibold text-dark small">Contraseña</label>
                    <a href="#" class="text-success text-decoration-none small fw-semibold">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="form-group-icon">
                    <input type="password" class="form-control form-control-custom" id="loginPassword" placeholder="••••••••••••" required>
                    <i class="bi bi-lock-fill prefix-icon"></i>
                    <i class="bi bi-eye-slash-fill toggle-password" onclick="togglePasswordVisibility()"></i>
                </div>
            </div>

            <!-- Recordar Cuenta -->
            <div class="mb-4 d-flex align-items-center">
                <input class="form-check-input me-2" type="checkbox" id="rememberMe" style="cursor: pointer;">
                <label class="form-check-label text-secondary small" for="rememberMe" style="cursor: pointer; user-select: none;">
                    Recordar cuenta en este equipo
                </label>
            </div>

            <!-- Botón Acceso -->
            <button type="submit" class="btn-premium py-3 mb-4">
                <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
            </button>
        </form>

        <div class="text-center text-secondary small">
            ¿No tienes cuenta? <a href="register.php" class="text-success fw-bold text-decoration-none">Regístrate como Cliente</a>
        </div>

        <!-- Credenciales de Demostración Dinámicas -->
        <div class="mt-5 p-3 bg-light border rounded-3">
            <div class="d-flex align-items-center gap-2 mb-2 text-dark fw-bold small">
                <i class="bi bi-info-circle-fill text-success"></i> Credenciales de demostración:
            </div>
            <div id="credentialDetails" class="small text-secondary">
                <strong>Usuario:</strong> admin@agrostock.com<br>
                <strong>Contraseña:</strong> admin123 (Rol Administrador)
            </div>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Cambiar Rol
        function selectRole(role) {
            document.querySelectorAll('.role-btn').forEach(btn => btn.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            document.getElementById('userRole').value = role;

            const credentialBox = document.getElementById('credentialDetails');
            if (role === 'administrador') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> admin@agrostock.com<br><strong>Contraseña:</strong> admin123 (Rol Administrador)`;
            } else if (role === 'vendedor') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> vendedor@agrostock.com<br><strong>Contraseña:</strong> vend123 (Rol Vendedor)`;
            } else if (role === 'cliente') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> cliente@agrostock.com<br><strong>Contraseña:</strong> cliente123 (Rol Cliente)`;
            }
        }

        // Mostrar / Ocultar contraseña
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('loginPassword');
            const toggleIcon = document.querySelector('.toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('bi-eye-slash-fill');
                toggleIcon.classList.add('bi-eye-fill');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('bi-eye-fill');
                toggleIcon.classList.add('bi-eye-slash-fill');
            }
        }

        // Manejador Login
        function handleLogin(e) {
            e.preventDefault();
            const role = document.getElementById('userRole').value;
            const email = document.getElementById('loginEmail').value;
            
            alert('Simulación de Ingreso Autorizado:\nHas iniciado sesión exitosamente como ' + role.toUpperCase() + ' (' + email + ').\n\nEl backend procesará esta solicitud buscando en la base de datos MySQL.');
        }
    </script>
</body>
</html>
