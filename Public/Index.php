<?php
/**
 * AgroStock PRO - Sistema de Gestión de Inventario y Ventas de Insumos Agrícolas
 * Página de Presentación y Portal de Entrada Principal
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
    <meta name="description" content="AgroStock PRO - Ecosistema digital inteligente para el control y venta de insumos del agro. Optimice su inventario, controle mermas y potencie sus ventas.">
    <meta name="author" content="Rubén Darío Delgado Cruz">
    <title>AgroStock PRO - Sistema de Gestión de Insumos Agrícolas</title>
    <!-- Google Fonts: Outfit (Títulos) & Inter (Cuerpo) -->
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
            --color-primary-h: 142;
            --color-primary-s: 72%;
            --color-primary-l: 25%; /* Verde Bosque Profundo (#1b4332) */
            
            --color-primary: hsl(var(--color-primary-h), var(--color-primary-s), var(--color-primary-l));
            --color-primary-dark: hsl(var(--color-primary-h), var(--color-primary-s), 15%);
            --color-primary-light: hsl(var(--color-primary-h), var(--color-primary-s), 93%);
            --color-primary-soft: hsl(var(--color-primary-h), var(--color-primary-s), 45%);
            
            --color-accent: hsl(45, 100%, 51%); /* Oro/Trigo cálido (#ffb703) */
            --color-accent-dark: hsl(45, 100%, 41%);
            
            --color-dark: hsl(210, 29%, 14%); /* Gris pizarra oscuro */
            --color-light: hsl(210, 20%, 98%); /* Fondo claro suave */
            --color-white: #ffffff;
            --color-border: hsl(210, 14%, 90%);
            
            --transition-smooth: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
            --shadow-subtle: 0 4px 20px rgba(0, 0, 0, 0.04);
            --shadow-premium: 0 12px 40px rgba(27, 67, 50, 0.12);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-light);
            color: var(--color-dark);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, h6, .display-font {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
        }

        /* Navbar personalizado con Glassmorphism */
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: var(--transition-smooth);
            padding: 18px 0;
            z-index: 1050;
        }

        .navbar-custom.scrolled {
            padding: 12px 0;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow-subtle);
        }

        .navbar-brand-custom {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.45rem;
            color: var(--color-primary);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .navbar-brand-custom:hover {
            opacity: 0.9;
        }

        .navbar-brand-custom i {
            font-size: 1.8rem;
            color: var(--color-accent-dark);
        }

        .nav-link-custom {
            position: relative;
            color: var(--color-dark);
            font-weight: 500;
            font-size: 0.95rem;
            padding: 8px 16px !important;
            transition: var(--transition-smooth);
        }

        .nav-link-custom::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: var(--color-primary);
            transition: var(--transition-smooth);
            transform: translateX(-50%);
        }

        .nav-link-custom:hover {
            color: var(--color-primary);
        }

        .nav-link-custom:hover::after {
            width: 60%;
        }

        /* Botones Premium */
        .btn-premium {
            background-color: var(--color-primary);
            color: var(--color-white);
            border: 2px solid var(--color-primary);
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-premium:hover {
            background-color: var(--color-primary-dark);
            border-color: var(--color-primary-dark);
            color: var(--color-white);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(27, 67, 50, 0.25);
        }

        .btn-outline-premium {
            background-color: transparent;
            color: var(--color-primary);
            border: 2px solid var(--color-primary);
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-outline-premium:hover {
            background-color: var(--color-primary-light);
            color: var(--color-primary-dark);
            transform: translateY(-2px);
        }

        .btn-accent {
            background-color: var(--color-accent);
            color: var(--color-dark);
            border: 2px solid var(--color-accent);
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 8px;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-accent:hover {
            background-color: var(--color-accent-dark);
            border-color: var(--color-accent-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 183, 3, 0.3);
        }

        /* Sección Hero */
        .hero-section {
            position: relative;
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, hsl(var(--color-primary-h), var(--color-primary-s), 10%) 100%);
            color: var(--color-white);
            padding: 160px 0 100px 0;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M54 48c-2 0-3 1-4 2v4c0 1-1 2-2 2h-4c-1 0-2-1-2-2v-4c-1-1-2-2-4-2h-4c-1 0-2-1-2-2v-4c0-1 1-2 2-2h4c2 0 3-1 4-2v-4c0-1 1-2 2-2h4c1 0 2 1 2 2v4c1 1 2 2 4 2h4c1 0 2 1 2 2v4c0 1-1 2-2 2h-4zM30 20c-2 0-3 1-4 2v4c0 1-1 2-2 2h-4c-1 0-2-1-2-2v-4c-1-1-2-2-4-2h-4c-1 0-2-1-2-2v-4c0-1 1-2 2-2h4c2 0 3-1 4-2v-4c0-1 1-2 2-2h4c1 0 2 1 2 2v4c1 1 2 2 4 2h4c1 0 2 1 2 2v4c0 1-1 2-2 2h-4z" fill="%232d6a4f" fill-opacity="0.15" fill-rule="evenodd"/%3E%3C/svg%3E');
            opacity: 0.8;
            pointer-events: none;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 20px;
        }

        .hero-title span {
            color: var(--color-accent);
        }

        .hero-subtitle {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 35px;
            font-weight: 300;
            line-height: 1.6;
        }

        .hero-mockup-container {
            position: relative;
            z-index: 2;
        }

        .hero-mockup-wrapper {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 10px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            transform: perspective(1000px) rotateY(-5deg) rotateX(2deg);
            transition: var(--transition-smooth);
        }

        .hero-mockup-wrapper:hover {
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
        }

        .hero-mockup-img {
            width: 100%;
            border-radius: 12px;
            display: block;
        }

        /* Insignia de Confianza */
        .system-badge {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: var(--color-accent);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 25px;
        }

        /* Sección de Características */
        .features-section {
            padding: 100px 0;
            background-color: var(--color-white);
        }

        .section-tagline {
            color: var(--color-primary-soft);
            text-transform: uppercase;
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--color-dark);
            margin-bottom: 20px;
        }

        .section-desc {
            color: #6c757d;
            font-size: 1.05rem;
            max-width: 600px;
            margin: 0 auto 60px auto;
        }

        .feature-card {
            background-color: var(--color-white);
            border: 1px solid var(--color-border);
            border-radius: 16px;
            padding: 35px;
            height: 100%;
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background-color: var(--color-primary);
            transition: var(--transition-smooth);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-premium);
            border-color: transparent;
        }

        .feature-card:hover::before {
            height: 100%;
        }

        .feature-icon-wrapper {
            width: 65px;
            height: 65px;
            background-color: var(--color-primary-light);
            color: var(--color-primary);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
            transition: var(--transition-smooth);
        }

        .feature-card:hover .feature-icon-wrapper {
            background-color: var(--color-primary);
            color: var(--color-white);
            transform: scale(1.1);
        }

        .feature-title {
            font-size: 1.25rem;
            color: var(--color-dark);
            margin-bottom: 12px;
        }

        .feature-desc {
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Sección de Categorías */
        .categories-section {
            padding: 100px 0;
            background-color: var(--color-light);
        }

        .category-card {
            background-color: var(--color-white);
            border: 1px solid var(--color-border);
            border-radius: 14px;
            padding: 30px 20px;
            text-align: center;
            height: 100%;
            transition: var(--transition-smooth);
        }

        .category-card:hover {
            transform: scale(1.03);
            box-shadow: var(--shadow-premium);
            border-color: rgba(25, 135, 84, 0.15);
        }

        .category-icon {
            font-size: 2.2rem;
            color: var(--color-primary);
            margin-bottom: 15px;
            display: inline-block;
            transition: var(--transition-smooth);
        }

        .category-card:hover .category-icon {
            transform: rotateY(180deg);
            color: var(--color-accent-dark);
        }

        .category-title {
            font-size: 1.15rem;
            margin-bottom: 10px;
            color: var(--color-dark);
        }

        .category-desc {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0;
        }

        /* Sección de KPIs Interactivos */
        .kpi-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #0f2b1c 0%, var(--color-primary-dark) 100%);
            color: var(--color-white);
        }

        .kpi-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: var(--transition-smooth);
        }

        .kpi-card:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }

        .kpi-icon {
            font-size: 2.2rem;
            color: var(--color-accent);
            margin-bottom: 15px;
        }

        .kpi-num {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 5px;
            font-family: 'Outfit', sans-serif;
            color: var(--color-white);
        }

        .kpi-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0;
        }

        .kpi-trend {
            font-size: 0.8rem;
            padding: 2px 8px;
            border-radius: 50px;
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-top: 10px;
        }
        
        .kpi-trend.danger {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
        }

        /* Sección de Reglas de Negocio en Acción */
        .rules-section {
            padding: 100px 0;
            background-color: var(--color-white);
        }

        .rule-item {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .rule-number {
            width: 45px;
            height: 45px;
            background-color: var(--color-primary-light);
            color: var(--color-primary);
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .rule-content h4 {
            font-size: 1.15rem;
            color: var(--color-dark);
            margin-bottom: 6px;
        }

        .rule-content p {
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 0;
        }

        /* Modal Login Premium */
        .modal-content-custom {
            border-radius: 20px;
            border: none;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
        }

        .modal-header-custom {
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
            color: var(--color-white);
            border: none;
            padding: 30px;
            position: relative;
        }

        .modal-header-custom::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            right: 0;
            height: 20px;
            background: var(--color-white);
            border-radius: 20px 20px 0 0;
        }

        .modal-header-custom .btn-close-white {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.15);
            opacity: 1;
            padding: 10px;
            border-radius: 50%;
            transition: var(--transition-smooth);
        }

        .modal-header-custom .btn-close-white:hover {
            background-color: rgba(255, 255, 255, 0.25);
        }

        .modal-body-custom {
            padding: 30px 40px 40px 40px;
            background-color: var(--color-white);
        }

        .login-role-select {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .role-btn {
            flex: 1;
            padding: 12px 10px;
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
            padding: 12px 16px 12px 42px;
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

        .form-group-icon i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aab2;
            transition: var(--transition-smooth);
        }

        .form-control-custom:focus + i {
            color: var(--color-primary);
        }

        /* Pie de Página */
        .footer-section {
            background-color: var(--color-dark);
            color: rgba(255, 255, 255, 0.75);
            padding: 80px 0 30px 0;
            border-top: 5px solid var(--color-primary);
        }

        .footer-brand {
            font-size: 1.5rem;
            color: var(--color-white);
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-brand i {
            color: var(--color-accent);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: var(--transition-smooth);
            display: inline-block;
            margin-bottom: 12px;
        }

        .footer-link:hover {
            color: var(--color-accent);
            transform: translateX(5px);
        }

        .footer-title {
            color: var(--color-white);
            font-size: 1.15rem;
            margin-bottom: 25px;
            font-family: 'Outfit', sans-serif;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #28a745;
            display: inline-block;
            margin-right: 8px;
            animation: pulse-dot 2s infinite;
        }

        @keyframes pulse-dot {
            0% { transform: scale(0.9); opacity: 0.6; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(0.9); opacity: 0.6; }
        }
    </style>
</head>
<body>

    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand-custom" href="#">
                <i class="bi bi-patch-check-fill"></i>
                <span class="fw-bold">AgroStock<span class="text-success">PRO</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#modulos">Módulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#categorias">Insumos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#kpis">Métricas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#reglas">Políticas</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <button class="btn-premium" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección Hero -->
    <section class="hero-section" id="inicio">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <div class="system-badge">
                        <i class="bi bi-award-fill"></i> Nivel Profesional &bull; PHP 8.3 + MVC
                    </div>
                    <h1 class="hero-title text-white">
                        Ecosistema Inteligente de <span>Inventario y Ventas</span> Agrícolas
                    </h1>
                    <p class="hero-subtitle">
                        Optimice el control de existencias en tiempo real, garantice la trazabilidad de sus lotes químicos, prevenga el desabastecimiento con alertas automáticas y gestione facturación POS de alta fiabilidad. Diseñado para distribuidoras de insumos líderes en el sector agro.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn-accent" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="bi bi-speedometer2"></i> Acceder al Demo
                        </button>
                        <a href="#modulos" class="btn-outline-premium text-white border-white-50">
                            Explorar Módulos <i class="bi bi-arrow-down-short"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 hero-mockup-container">
                    <div class="hero-mockup-wrapper">
                        <img src="img/agri_hero_mockup.png" alt="AgroStock PRO Dashboard" class="hero-mockup-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Módulos (Características) -->
    <section class="features-section" id="modulos">
        <div class="container">
            <div class="text-center">
                <span class="section-tagline">Módulos del Sistema</span>
                <h2 class="section-title">Control Total sobre el Ecosistema Operacional</h2>
                <p class="section-desc">Arquitectura MVC optimizada para brindar fiabilidad y rendimiento en cada transacción, satisfaciendo estrictos requisitos operacionales.</p>
            </div>
            
            <div class="row g-4">
                <!-- Tarjeta 1: Control de Inventario -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="feature-title">Inventario y Lotes</h3>
                        <p class="feature-desc">Control pormenorizado de stock actual, lotes químicos y alertas inteligentes de fechas de vencimiento de productos.</p>
                    </div>
                </div>
                <!-- Tarjeta 2: POS Ventas -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-receipt"></i>
                        </div>
                        <h3 class="feature-title">Punto de Venta POS</h3>
                        <p class="feature-desc">Facturación ágil de mostrador con cálculo automatizado de IVA y validación atómica síncrona para evitar stocks negativos.</p>
                    </div>
                </div>
                <!-- Tarjeta 3: Terceros -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="feature-title">Clientes & Proveedores</h3>
                        <p class="feature-desc">Directorio dinámico integrado con NIT/RUT. Historial unificado de transacciones, facturas y despachos logísticos.</p>
                    </div>
                </div>
                <!-- Tarjeta 4: Reportes Financieros -->
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="feature-title">Dashboard Analítico</h3>
                        <p class="feature-desc">Reportes interactivos en tiempo real. Análisis financiero de ingresos, egresos y utilidades netas para la gerencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Categorías Especializadas -->
    <section class="categories-section" id="categorias">
        <div class="container">
            <div class="text-center">
                <span class="section-tagline">Categorización de Productos</span>
                <h2 class="section-title">Clasificación Multidimensional Estándar</h2>
                <p class="section-desc">Garantizamos la integridad de su catálogo agrícola con la estructuración obligatoria de insumos según su naturaleza biológica o física.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Fertilizantes -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-flower1 category-icon"></i>
                        <h4 class="category-title">Fertilizantes</h4>
                        <p class="category-desc">Nutrientes NPK y abonos.</p>
                    </div>
                </div>
                <!-- Herbicidas -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-droplet-half category-icon"></i>
                        <h4 class="category-title">Herbicidas</h4>
                        <p class="category-desc">Control de maleza y arvenses.</p>
                    </div>
                </div>
                <!-- Fungicidas -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-shield-fill-exclamation category-icon"></i>
                        <h4 class="category-title">Fungicidas</h4>
                        <p class="category-desc">Protección contra hongos.</p>
                    </div>
                </div>
                <!-- Insecticidas -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-bug-fill category-icon"></i>
                        <h4 class="category-title">Insecticidas</h4>
                        <p class="category-desc">Eliminación de plagas agrícolas.</p>
                    </div>
                </div>
                <!-- Semillas -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-tree-fill category-icon"></i>
                        <h4 class="category-title">Semillas</h4>
                        <p class="category-desc">Certificadas de alto rendimiento.</p>
                    </div>
                </div>
                <!-- Herramientas -->
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="category-card">
                        <i class="bi bi-tools category-icon"></i>
                        <h4 class="category-title">Herramientas</h4>
                        <p class="category-desc">Equipos y soporte de labranza.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Métricas en Tiempo Real (Dashboard Preview) -->
    <section class="kpi-section" id="kpis">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5">
                    <span class="section-tagline text-white-50">Inteligencia de Negocios</span>
                    <h2 class="text-white mb-4">Métricas Consolidadas al Instante</h2>
                    <p class="text-white-50 mb-4">
                        El administrador tiene acceso exclusivo al cálculo dinámico automatizado de utilidades netas, derivado directamente del flujo de caja (Ventas - Costo de Adquisición).
                    </p>
                    <ul class="list-unstyled text-white-50 fs-6">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Integración síncrona con el POS de ventas.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Reportes financieros exportables a Excel/PDF.</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i> Indicador visual prioritario de alertas críticas.</li>
                    </ul>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <!-- KPI 1: Ventas Hoy -->
                        <div class="col-sm-6">
                            <div class="kpi-card">
                                <div class="kpi-icon"><i class="bi bi-currency-dollar"></i></div>
                                <div class="kpi-num">$2,450.00</div>
                                <div class="kpi-label">Ventas de Hoy</div>
                                <div class="kpi-trend"><i class="bi bi-arrow-up-right-solid"></i> +12% vs ayer</div>
                            </div>
                        </div>
                        <!-- KPI 2: Alertas Stock -->
                        <div class="col-sm-6">
                            <div class="kpi-card">
                                <div class="kpi-icon"><i class="bi bi-exclamation-triangle-fill text-warning"></i></div>
                                <div class="kpi-num">3</div>
                                <div class="kpi-label">Alertas de Stock Mínimo</div>
                                <div class="kpi-trend danger"><i class="bi bi-shield-fill-x"></i> Nivel Crítico</div>
                            </div>
                        </div>
                        <!-- KPI 3: Clientes -->
                        <div class="col-sm-6">
                            <div class="kpi-card">
                                <div class="kpi-icon"><i class="bi bi-person-check-fill"></i></div>
                                <div class="kpi-num">142</div>
                                <div class="kpi-label">Clientes Activos</div>
                                <div class="kpi-trend"><i class="bi bi-arrow-up-right-solid"></i> +4 esta semana</div>
                            </div>
                        </div>
                        <!-- KPI 4: Ganancia Neta -->
                        <div class="col-sm-6">
                            <div class="kpi-card">
                                <div class="kpi-icon"><i class="bi bi-piggy-bank-fill text-success"></i></div>
                                <div class="kpi-num">34.5%</div>
                                <div class="kpi-label">Margen de Ganancia Neto</div>
                                <div class="kpi-trend"><i class="bi bi-arrow-up-right-solid"></i> Optimizado</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Reglas de Negocio -->
    <section class="rules-section" id="reglas">
        <div class="container">
            <div class="text-center">
                <span class="section-tagline">Reglas del Sistema</span>
                <h2 class="section-title">Políticas Operacionales y de Seguridad</h2>
                <p class="section-desc">El núcleo lógico implementa rigurosas validaciones para blindar los activos y las finanzas del almacén.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="rule-item">
                        <div class="rule-number">01</div>
                        <div class="rule-content">
                            <h4>Restricción Estricta de Stock Negativo</h4>
                            <p>El sistema impide la facturación de productos cuya cantidad demandada supere la existencia en tiempo real. Mitigamos de forma absoluta las inconsistencias de almacén.</p>
                        </div>
                    </div>
                    <div class="rule-item">
                        <div class="rule-number">02</div>
                        <div class="rule-content">
                            <h4>Viabilidad Financiera de Precios</h4>
                            <p>Se rechaza cualquier intento de configurar un Precio de Venta menor o igual al Precio de Compra. Su margen de ganancia está siempre protegido.</p>
                        </div>
                    </div>
                    <div class="rule-item">
                        <div class="rule-number">03</div>
                        <div class="rule-content">
                            <h4>Obligatoriedad de Integridad de Categorías</h4>
                            <p>No se admiten productos huérfanos. Todo insumo agrícola debe pertenecer a una de las categorías estándar del sistema para su correcta clasificación comercial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rule-item">
                        <div class="rule-number">04</div>
                        <div class="rule-content">
                            <h4>Seguridad Criptográfica & RBAC</h4>
                            <p>Las credenciales se encriptan bajo hashing adaptativo robusto (BCRYPT). Las vistas y acciones de base de datos están fuertemente restringidas por el rol del usuario (RBAC).</p>
                        </div>
                    </div>
                    <div class="rule-item">
                        <div class="rule-number">05</div>
                        <div class="rule-content">
                            <h4>Sincronización Transaccional Inmediata</h4>
                            <p>Al confirmarse una venta POS o una merma justificada, el stock general se actualiza al instante, garantizando la consistencia multicanal de la información.</p>
                        </div>
                    </div>
                    <div class="rule-item">
                        <div class="rule-number">06</div>
                        <div class="rule-content">
                            <h4>Auditorías de Inventario y Mermas</h4>
                            <p>Las salidas no comerciales (vencimiento químico, daño, merma) requieren una justificación técnica detallada obligatoria en backend para su almacenamiento contable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Inicio de Sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-custom">
                <div class="modal-header modal-header-custom text-center d-block">
                    <h3 class="modal-title fw-bold text-white display-font" id="loginModalLabel">Portal del Sistema</h3>
                    <p class="text-white-50 mb-0">Seleccione su rol e introduzca sus credenciales autorizadas</p>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body-custom">
                    <!-- Selector de Roles -->
                    <div class="login-role-select">
                        <div class="role-btn active" onclick="selectRole('administrador')">
                            <i class="bi bi-shield-lock-fill d-block fs-4 mb-1"></i> Administrador
                        </div>
                        <div class="role-btn" onclick="selectRole('vendedor')">
                            <i class="bi bi-shop d-block fs-4 mb-1"></i> Vendedor
                        </div>
                        <div class="role-btn" onclick="selectRole('cliente')">
                            <i class="bi bi-person-fill-check d-block fs-4 mb-1"></i> Cliente
                        </div>
                    </div>

                    <!-- Formulario de Login -->
                    <form action="#" method="POST" id="loginForm" onsubmit="handleLogin(event)">
                        <!-- Input Rol Escondido -->
                        <input type="hidden" name="rol" id="userRole" value="administrador">

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label fw-semibold text-dark fs-6">Correo Electrónico</label>
                            <div class="form-group-icon">
                                <input type="email" class="form-control form-control-custom" id="loginEmail" placeholder="nombre@correo.com" required>
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <label for="loginPassword" class="form-label fw-semibold text-dark fs-6">Contraseña</label>
                                <a href="#" class="text-success text-decoration-none small fw-semibold">¿La olvidó?</a>
                            </div>
                            <div class="form-group-icon">
                                <input type="password" class="form-control form-control-custom" id="loginPassword" placeholder="••••••••••••" required>
                                <i class="bi bi-lock-fill"></i>
                            </div>
                        </div>

                        <!-- Recordar sesión -->
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                <label class="form-check-label text-secondary small" for="rememberMe">
                                    Recordar sesión por 30 días
                                </label>
                            </div>
                        </div>

                        <!-- Botón Enviar -->
                        <button type="submit" class="btn-premium w-100 justify-content-center py-3">
                            <i class="bi bi-box-arrow-in-right"></i> Entrar al Sistema
                        </button>
                    </form>
                    
                    <!-- Simulación de credenciales de prueba -->
                    <div class="mt-4 p-3 bg-light border rounded-3">
                        <div class="d-flex align-items-center gap-2 mb-2 text-dark fw-bold small">
                            <i class="bi bi-info-circle-fill text-success"></i> Acceso rápido para demostración:
                        </div>
                        <div id="credentialDetails" class="small text-secondary">
                            <strong>Usuario:</strong> admin@agrostock.com<br>
                            <strong>Contraseña:</strong> admin123 (Rol Administrador)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de Página -->
    <footer class="footer-section">
        <div class="container">
            <div class="row gy-4 mb-5">
                <div class="col-lg-5">
                    <div class="footer-brand">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>AgroStock PRO</span>
                    </div>
                    <p class="mb-4 text-white-50">
                        Solución premium de software para la digitalización, control y logística operacional de distribuidoras de insumos agrícolas. Diseñado bajo estándares de ingeniería y patrones limpios.
                    </p>
                    <div class="d-flex align-items-center text-success fw-semibold">
                        <span class="status-dot"></span> Servidor Central Online &bull; Latencia: 18ms
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <h4 class="footer-title">Navegación</h4>
                    <ul class="list-unstyled">
                        <li><a href="#inicio" class="footer-link">Inicio</a></li>
                        <li><a href="#modulos" class="footer-link">Módulos</a></li>
                        <li><a href="#categorias" class="footer-link">Insumos</a></li>
                        <li><a href="#kpis" class="footer-link">Métricas</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h4 class="footer-title">Tecnologías</h4>
                    <ul class="list-unstyled text-white-50 small">
                        <li class="mb-2"><i class="bi bi-code-slash text-success"></i> PHP 8.3</li>
                        <li class="mb-2"><i class="bi bi-database-fill text-success"></i> MySQL 8.0 (InnoDB)</li>
                        <li class="mb-2"><i class="bi bi-bootstrap-fill text-success"></i> Bootstrap 5.3</li>
                        <li class="mb-2"><i class="bi bi-lightning-fill text-success"></i> JavaScript ES6</li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h4 class="footer-title">Desarrollador</h4>
                    <p class="small mb-1 text-white fw-semibold">Rubén Darío Delgado Cruz</p>
                    <p class="small text-white-50 mb-3">Autor del Sistema</p>
                    <span class="badge bg-success py-2 px-3 text-white">Versión 1.1</span>
                </div>
            </div>
            <hr class="border-secondary opacity-25">
            <div class="row pt-3 text-center text-md-start small">
                <div class="col-md-6 text-white-50">
                    &copy; 2026 AgroStock PRO. Todos los derechos reservados.
                </div>
                <div class="col-md-6 text-md-end text-white-50 mt-2 mt-md-0">
                    Diseño Premium adaptado para uso en Distribuidoras Agrícolas.
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- JavaScript del Portal -->
    <script>
        // Efecto scroll en Navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Cambio de Rol en Formulario de Login
        function selectRole(role) {
            // Actualizar clases de botones
            document.querySelectorAll('.role-btn').forEach(btn => btn.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            // Actualizar input oculto
            document.getElementById('userRole').value = role;

            // Actualizar credenciales de prueba mostradas para facilidad de testeo del usuario
            const credentialBox = document.getElementById('credentialDetails');
            if (role === 'administrador') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> admin@agrostock.com<br><strong>Contraseña:</strong> admin123 (Rol Administrador)`;
            } else if (role === 'vendedor') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> vendedor@agrostock.com<br><strong>Contraseña:</strong> vend123 (Rol Vendedor)`;
            } else if (role === 'cliente') {
                credentialBox.innerHTML = `<strong>Usuario:</strong> cliente@agrostock.com<br><strong>Contraseña:</strong> cliente123 (Rol Cliente)`;
            }
        }

        // Manejador del Login
        function handleLogin(e) {
            e.preventDefault();
            const role = document.getElementById('userRole').value;
            const email = document.getElementById('loginEmail').value;
            
            alert('Simulación de Ingreso Autorizado:\nHas iniciado sesión exitosamente como ' + role.toUpperCase() + ' (' + email + ').\n\nEl sistema validará esta sesión contra el modelo de base de datos MySQL.');
            
            // Cerrar el modal
            const loginModal = bootstrap.Modal.getInstance(document.getElementById('loginModal'));
            loginModal.hide();
        }
    </script>
</body>
</html>
