<?php
/**
 * AgroStock PRO - Sistema de Gestión de Inventario y Ventas de Insumos Agrícolas
 * Vista de Registro de Usuario
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
    <meta name="description" content="Registro de usuarios para la plataforma AgroStock PRO. Regístrese de manera autónoma como cliente.">
    <meta name="author" content="Rubén Darío Delgado Cruz">
    <title>Crear Cuenta - AgroStock PRO</title>
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
            padding: 50px 50px;
            box-shadow: -10px 0 40px rgba(0,0,0,0.03);
            position: relative;
            z-index: 10;
        }

        /* Branding */
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
            margin-bottom: 30px;
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
            margin-bottom: 25px;
        }

        /* Selector de Roles */
        .register-role-select {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .role-btn {
            flex: 1;
            padding: 10px 6px;
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
            align-items: center;
            justify-content: center;
            gap: 6px;
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
            padding: 10px 42px;
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

        /* Botones */
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

    <!-- Panel Izquierdo -->
    <div class="split-container-left">
        <a href="../../Public/Index.php" class="brand-wrapper">
            <i class="bi bi-patch-check-fill"></i>
            <span class="fw-bold">AgroStock<span class="text-success-light" style="color: #40916c;">PRO</span></span>
        </a>
        
        <div class="value-card-box">
            <h2 class="text-white display-font mb-4 fs-1">Regístrate para Interactuar con el Sistema</h2>
            
            <!-- Item 1: Catálogo -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-search"></i></div>
                <div class="value-info">
                    <h4>Consulta de Catálogo en Vivo</h4>
                    <p>Visualiza el inventario disponible de semillas, fertilizantes y agroquímicos actualizados al segundo.</p>
                </div>
            </div>
            
            <!-- Item 2: Facturas -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                <div class="value-info">
                    <h4>Historial de Compras Digitales</h4>
                    <p>Descarga tus facturas y cotizaciones emitidas por el punto de venta (POS) del establecimiento.</p>
                </div>
            </div>
            
            <!-- Item 3: Transparencia -->
            <div class="value-card">
                <div class="value-icon"><i class="bi bi-shield-fill-check"></i></div>
                <div class="value-info">
                    <h4>Políticas de Datos Transparentes</h4>
                    <p>Garantía de cumplimiento estricto con los estándares de seguridad y encriptación de datos.</p>
                </div>
            </div>
        </div>

        <div class="footer-left text-white-50 small">
            &copy; 2026 AgroStock PRO &bull; Control y Calidad Tecnológica.
        </div>
    </div>

    <!-- Panel Derecho -->
    <div class="split-container-right">
        <!-- Botón volver atrás -->
        <a href="../../Public/Index.php" class="btn-back-home">
            <i class="bi bi-arrow-left"></i> Volver al Inicio
        </a>

        <!-- Marca en móvil -->
        <div class="d-flex d-lg-none brand-wrapper-right">
            <i class="bi bi-patch-check-fill"></i>
            <span class="fw-bold">AgroStock<span class="text-success">PRO</span></span>
        </div>

        <div class="title-group">
            <h2>Crear Cuenta</h2>
            <p>Registra tus datos maestros para darte de alta en el sistema.</p>
        </div>

        <!-- Selector de Perfil a Registrar -->
        <div class="register-role-select">
            <div class="role-btn active" onclick="selectRegisterRole('cliente')">
                <i class="bi bi-person-fill-check fs-6"></i> Registrarme como Cliente
            </div>
            <div class="role-btn" onclick="selectRegisterRole('vendedor')">
                <i class="bi bi-shop fs-6"></i> Simular Vendedor
            </div>
        </div>

        <!-- Formulario -->
        <form action="../../controlers/auth/registerController.php" method="POST" onsubmit="handleRegister(event)">
            <!-- Input Rol Oculto -->
            <input type="hidden" name="rol" id="registerRole" value="cliente">

            <!-- Nombre Completo -->
            <div class="mb-3">
                <label for="regName" class="form-label fw-semibold text-dark small">Usuario </label>
                <div class="form-group-icon">
                    <input type="text" class="form-control form-control-custom" id="regName" placeholder="Juan Pérez o Distribuidora Agrícola" required>
                    <i class="bi bi-person-fill prefix-icon"></i>
                </div>

            <!-- Correo Electrónico --> 
            <div class="mb-3">
                <label for="regEmail" class="form-label fw-semibold text-dark small">Correo Electrónico</label>
                <div class="form-group-icon">
                    <input type="email" class="form-control form-control-custom" id="regEmail" placeholder="juan.perez@correo.com" required>
                    <i class="bi bi-envelope-fill prefix-icon"></i>
                </div>
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
                <label for="regPassword" class="form-label fw-semibold text-dark small">Contraseña</label>
                <div class="form-group-icon">
                    <input type="password" class="form-control form-control-custom" id="regPassword" placeholder="Crea tu contraseña" required>
                    <i class="bi bi-lock-fill prefix-icon"></i>
                    <i class="bi bi-eye-slash-fill toggle-password" onclick="togglePassword('regPassword')"></i>
                </div>
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mb-4">
                <label for="regPasswordConfirm" class="form-label fw-semibold text-dark small">Confirmar Contraseña</label>
                <div class="form-group-icon">
                    <input type="password" class="form-control form-control-custom" id="regPasswordConfirm" placeholder="Confirma tu contraseña" required>
                    <i class="bi bi-lock-fill prefix-icon"></i>
                    <i class="bi bi-eye-slash-fill toggle-password" onclick="togglePassword('regPasswordConfirm')"></i>
                </div>
            </div>

            <!-- Aceptar Términos -->
            <div class="mb-4 d-flex align-items-start">
                <input class="form-check-input me-2 mt-1" type="checkbox" id="termsCheck" required style="cursor: pointer;">
                <label class="form-check-label text-secondary small" for="termsCheck" style="cursor: pointer; user-select: none;">
                    Acepto los términos de servicio, políticas de privacidad y el tratamiento de datos personales de la distribuidora.
                </label>
            </div>

            <!-- Botón Registro -->
            <button type="submit" class="btn-premium py-3 mb-4">
                <i class="bi bi-person-plus-fill"></i> Crear Cuenta y Registrarse
            </button>
        </form>

        <div class="text-center text-secondary small">
            ¿Ya tienes cuenta? <a href="login.php" class="text-success fw-bold text-decoration-none">Inicia Sesión aquí</a>
        </div>
    </div>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Cambiar Rol
        function selectRegisterRole(role) {
            document.querySelectorAll('.role-btn').forEach(btn => btn.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            document.getElementById('registerRole').value = role;
        }

        // Mostrar / Ocultar contraseña
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const toggleIcon = event.currentTarget;
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

        // Manejador Registro
        function handleRegister(e) {
            e.preventDefault();
            const role = document.getElementById('registerRole').value;
            const name = document.getElementById('regName').value;
            const email = document.getElementById('regEmail').value;
            const pass = document.getElementById('regPassword').value;
            const passConfirm = document.getElementById('regPasswordConfirm').value;

            // Validar contraseñas
            if (pass !== passConfirm) {
                alert('Error de Validación:\nLas contraseñas ingresadas no coinciden. Por favor verifique.');
                return;
            }
            
            alert('Simulación de Registro Completado:\nSe ha registrado exitosamente a "' + name + '" con rol ' + role.toUpperCase() + ' (' + email + ').\n\nEl sistema guardará esta información aplicando hashing BCRYPT en MySQL.');
            
            // Redirigir a login
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>
