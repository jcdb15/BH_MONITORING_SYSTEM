<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MonitorX - System Monitoring</title>

    <style>

        /* =====================================================
           RESET
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;

            --background: #f4f6fa;
            --card: #ffffff;

            --text: #111827;
            --muted: #6b7280;

            --border: #e5e7eb;

            --green: #16a34a;
            --red: #dc2626;
            --orange: #ea580c;
            --yellow: #f59e0b;

            --sidebar: #111827;
            --sidebar-hover: #1f2937;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family:
                Inter,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Arial,
                sans-serif;

            background: var(--background);
            color: var(--text);

            overflow-x: hidden;
        }

        button,
        input,
        select {
            font-family: inherit;
        }

        button {
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }


        /* =====================================================
           APP
        ===================================================== */

        .app {
            min-height: 100vh;
        }


        /* =====================================================
           SIDEBAR
        ===================================================== */

        .sidebar {
            position: fixed;

            left: 0;
            top: 0;
            bottom: 0;

            width: 250px;

            background: var(--sidebar);
            color: white;

            padding: 24px 16px;

            display: flex;
            flex-direction: column;

            z-index: 1000;
        }


        /* Logo */

        .logo {
            display: flex;
            align-items: center;

            gap: 12px;

            padding: 0 10px 30px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;

            background: var(--primary);

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
            font-weight: 700;

            flex-shrink: 0;
        }

        .logo-text strong {
            display: block;

            font-size: 16px;

            color: white;
        }

        .logo-text span {
            display: block;

            color: #9ca3af;

            font-size: 11px;

            margin-top: 3px;
        }


        /* Navigation */

        .nav {
            display: flex;
            flex-direction: column;

            gap: 5px;
        }

        .nav a {
            display: flex;
            align-items: center;

            gap: 12px;

            padding: 12px;

            border-radius: 8px;

            color: #9ca3af;

            font-size: 14px;

            transition: 0.2s ease;
        }

        .nav a:hover {
            background: var(--sidebar-hover);
            color: white;
        }

        .nav a.active {
            background: var(--primary);
            color: white;
        }

        .nav-icon {
            width: 22px;

            text-align: center;

            font-size: 17px;
        }


        /* Sidebar bottom */

        .sidebar-bottom {
            margin-top: auto;

            display: flex;
            flex-direction: column;

            gap: 5px;
        }

        .sidebar-bottom a {
            color: #9ca3af;

            padding: 12px;

            border-radius: 8px;

            font-size: 14px;
        }

        .sidebar-bottom a:hover {
            background: var(--sidebar-hover);

            color: white;
        }


        /* =====================================================
           MAIN
        ===================================================== */

        .main {
            margin-left: 250px;

            width: calc(100% - 250px);

            padding: 30px;

            min-width: 0;
        }


        /* =====================================================
           HEADER
        ===================================================== */

        .header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            gap: 20px;

            margin-bottom: 28px;
        }

        .header-title h1 {
            font-size: 27px;

            font-weight: 700;
        }

        .header-title p {
            color: var(--muted);

            font-size: 13px;

            margin-top: 5px;
        }

        .header-right {
            display: flex;

            align-items: center;

            gap: 15px;
        }


        /* System status */

        .system-status {
            display: flex;
            align-items: center;

            background: #ecfdf5;

            color: #15803d;

            padding: 9px 14px;

            border-radius: 20px;

            font-size: 12px;

            white-space: nowrap;
        }

        .status-dot {
            width: 7px;
            height: 7px;

            background: #22c55e;

            border-radius: 50%;

            margin-right: 7px;

            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.12);
        }


        /* Avatar */

        .avatar {
            width: 40px;
            height: 40px;

            border-radius: 50%;

            background: #dbeafe;

            color: #1d4ed8;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 12px;

            font-weight: 700;

            flex-shrink: 0;
        }


        /* =====================================================
           STATISTICS
        ===================================================== */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 18px;

            margin-bottom: 20px;
        }

        .stat-card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 20px;

            min-width: 0;

            transition:
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(15, 23, 42, 0.06);
        }

        .stat-top {
            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 10px;

            color: var(--muted);

            font-size: 13px;
        }

        .stat-card h2 {
            font-size: 29px;

            margin: 12px 0 5px;
        }

        .stat-card p {
            color: var(--muted);

            font-size: 11px;
        }


        /* Stat icons */

        .icon {
            width: 34px;
            height: 34px;

            border-radius: 8px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-weight: 700;

            flex-shrink: 0;
        }

        .icon.blue {
            background: #eff6ff;

            color: #2563eb;
        }

        .icon.green {
            background: #ecfdf5;

            color: #16a34a;
        }

        .icon.red {
            background: #fef2f2;

            color: #dc2626;
        }

        .icon.orange {
            background: #fff7ed;

            color: #ea580c;
        }

        .green-text {
            color: var(--green);
        }

        .red-text {
            color: var(--red);
        }

        .orange-text {
            color: var(--orange);
        }


        /* =====================================================
           DASHBOARD GRID
        ===================================================== */

        .dashboard-grid {
            display: grid;

            grid-template-columns:
                minmax(0, 2fr)
                minmax(300px, 1fr);

            gap: 20px;

            margin-bottom: 20px;
        }

        .card {
            background: var(--card);

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 20px;

            min-width: 0;
        }


        /* Card header */

        .card-header {
            display: flex;

            justify-content: space-between;
            align-items: center;

            gap: 15px;

            margin-bottom: 20px;
        }

        .card-header h3 {
            font-size: 16px;

            font-weight: 650;
        }

        .card-header p {
            color: var(--muted);

            font-size: 11px;

            margin-top: 4px;
        }


        /* Select */

        .period-select {
            border: 1px solid var(--border);

            background: white;

            color: var(--text);

            border-radius: 7px;

            padding: 8px 10px;

            font-size: 11px;

            outline: none;
        }


        /* =====================================================
           CPU CHART
        ===================================================== */

        .chart {
            position: relative;

            height: 280px;

            padding-left: 45px;
        }

        .chart svg {
            position: absolute;

            left: 45px;
            top: 10px;

            width: calc(100% - 55px);

            height: 220px;
        }

        .grid-line {
            position: absolute;

            left: 45px;
            right: 0;

            border-top:
                1px dashed #e5e7eb;
        }

        .line1 {
            top: 20px;
        }

        .line2 {
            top: 75px;
        }

        .line3 {
            top: 130px;
        }

        .line4 {
            top: 185px;
        }

        .chart-values {
            position: absolute;

            left: 0;
            top: 10px;
            bottom: 60px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            color: #9ca3af;

            font-size: 9px;
        }

        .chart-labels {
            position: absolute;

            left: 45px;
            right: 0;

            bottom: 20px;

            display: flex;

            justify-content: space-between;

            color: #9ca3af;

            font-size: 9px;
        }

        .chart-line {
            fill: none;

            stroke: var(--primary);

            stroke-width: 3;

            stroke-linecap: round;
        }

        .chart-area {
            fill: url(#area);
        }


        /* =====================================================
           ALERTS
        ===================================================== */

        .alert {
            display: flex;

            align-items: flex-start;

            gap: 12px;

            padding: 13px 0;

            border-bottom: 1px solid #f0f0f0;
        }

        .alert:last-child {
            border-bottom: none;
        }

        .alert-icon {
            width: 32px;
            height: 32px;

            border-radius: 8px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-weight: 700;

            flex-shrink: 0;
        }

        .alert-icon.critical {
            background: #fee2e2;

            color: var(--red);
        }

        .alert-icon.warning {
            background: #ffedd5;

            color: var(--orange);
        }

        .alert-icon.info {
            background: #dbeafe;

            color: var(--primary);
        }

        .alert-content {
            min-width: 0;
        }

        .alert-content strong {
            display: block;

            font-size: 12px;
        }

        .alert-content p {
            color: var(--muted);

            font-size: 10px;

            margin: 4px 0;
        }

        .alert-content small {
            color: #9ca3af;

            font-size: 9px;
        }

        .view-link {
            color: var(--primary);

            font-size: 11px;

            white-space: nowrap;
        }


        /* =====================================================
           DEVICES
        ===================================================== */

        .devices-card {
            padding-bottom: 0;
        }

        .add-button {
            border: none;

            background: var(--primary);

            color: white;

            padding: 9px 14px;

            border-radius: 7px;

            font-size: 11px;

            font-weight: 500;

            white-space: nowrap;

            transition: 0.2s;
        }

        .add-button:hover {
            background: var(--primary-dark);
        }


        /* Table */

        .table-wrapper {
            width: 100%;

            overflow-x: auto;

            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;

            min-width: 850px;

            border-collapse: collapse;

            font-size: 11px;
        }

        th {
            text-align: left;

            color: #9ca3af;

            font-size: 9px;

            font-weight: 600;

            padding: 12px 10px;

            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 15px 10px;

            border-bottom: 1px solid #f0f0f0;

            white-space: nowrap;
        }


        /* Device */

        .device {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .server-icon {
            width: 34px;
            height: 34px;

            border-radius: 7px;

            background: #eff6ff;

            color: var(--primary);

            display: flex;

            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .device-name {
            display: block;

            font-weight: 600;

            font-size: 11px;
        }

        .device-ip {
            display: block;

            color: #9ca3af;

            font-size: 9px;

            margin-top: 3px;
        }


        /* Status */

        .badge {
            display: inline-flex;

            align-items: center;

            gap: 5px;

            padding: 5px 8px;

            border-radius: 20px;

            font-size: 9px;
        }

        .badge-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;
        }

        .badge.online {
            background: #ecfdf5;

            color: #15803d;
        }

        .badge.online .badge-dot {
            background: #22c55e;
        }

        .badge.offline {
            background: #fef2f2;

            color: var(--red);
        }

        .badge.offline .badge-dot {
            background: #ef4444;
        }


        /* Metrics */

        .metric {
            width: 100px;
        }

        .metric-value {
            display: block;

            font-size: 10px;

            margin-bottom: 5px;
        }

        .progress {
            width: 100%;

            height: 5px;

            background: #e5e7eb;

            border-radius: 10px;

            overflow: hidden;
        }

        .progress-bar {
            height: 100%;

            border-radius: 10px;

            background: var(--primary);
        }

        .progress-bar.warning {
            background: var(--yellow);
        }

        .progress-bar.danger {
            background: var(--red);
        }


        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 1100px) {

            .stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

        }


        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 768px) {

            /* Top navigation */

            .sidebar {
                position: fixed;

                top: 0;
                left: 0;
                right: 0;

                bottom: auto;

                width: 100%;

                height: 64px;

                padding: 10px 15px;

                display: flex;

                flex-direction: row;

                align-items: center;

                justify-content: space-between;
            }

            .logo {
                padding: 0;

                gap: 8px;
            }

            .logo-icon {
                width: 36px;
                height: 36px;

                border-radius: 9px;

                font-size: 17px;
            }

            .logo-text strong {
                font-size: 14px;
            }

            .logo-text span {
                font-size: 8px;
            }


            /* Mobile nav */

            .nav {
                flex-direction: row;

                gap: 3px;
            }

            .nav a {
                width: 36px;
                height: 36px;

                padding: 0;

                display: flex;

                align-items: center;
                justify-content: center;

                border-radius: 8px;
            }

            .nav-label {
                display: none;
            }

            .nav-icon {
                width: auto;

                font-size: 17px;
            }


            /* Hide bottom sidebar */

            .sidebar-bottom {
                display: none;
            }


            /* Main */

            .main {
                margin-left: 0;

                width: 100%;

                padding:
                    84px
                    15px
                    25px;
            }


            /* Header */

            .header {
                margin-bottom: 20px;
            }

            .header-title h1 {
                font-size: 22px;
            }

            .header-title p {
                font-size: 11px;
            }

            .system-status {
                display: none;
            }

            .avatar {
                width: 36px;
                height: 36px;

                font-size: 11px;
            }


            /* Statistics */

            .stats {
                grid-template-columns:
                    repeat(2, minmax(0, 1fr));

                gap: 10px;
            }

            .stat-card {
                padding: 15px;
            }

            .stat-top {
                font-size: 11px;
            }

            .stat-card h2 {
                font-size: 24px;

                margin: 9px 0 4px;
            }

            .stat-card p {
                font-size: 10px;
            }


            /* Cards */

            .card {
                padding: 15px;

                border-radius: 10px;
            }


            /* Chart */

            .chart {
                height: 240px;
            }

            .chart svg {
                height: 190px;
            }


            /* Alerts */

            .alert {
                padding: 11px 0;
            }


            /* Device card */

            .devices-card .card-header {
                align-items: center;
            }

            .add-button {
                padding: 8px 10px;

                font-size: 10px;
            }

        }


        /* =====================================================
           SMALL PHONE
        ===================================================== */

        @media (max-width: 480px) {

            .sidebar {
                height: 60px;

                padding:
                    8px
                    10px;
            }

            .logo-text span {
                display: none;
            }

            .logo-icon {
                width: 34px;
                height: 34px;
            }

            .nav {
                gap: 2px;
            }

            .nav a {
                width: 32px;
                height: 32px;
            }

            .nav-icon {
                font-size: 15px;
            }


            /* Main */

            .main {
                padding:
                    75px
                    10px
                    20px;
            }


            /* Header */

            .header-title h1 {
                font-size: 20px;
            }


            /* Statistics */

            .stats {
                grid-template-columns: 1fr;

                gap: 9px;
            }

            .stat-card {
                padding: 14px;
            }

            .stat-card h2 {
                font-size: 22px;
            }


            /* Card */

            .card {
                padding: 14px;
            }


            /* Card header */

            .card-header {
                align-items: flex-start;
            }


            /* Chart */

            .chart-card .card-header {
                flex-direction: column;

                align-items: stretch;
            }

            .period-select {
                width: 100%;
            }

            .chart {
                height: 220px;

                padding-left: 35px;
            }

            .chart svg {
                left: 35px;

                width: calc(100% - 40px);

                height: 170px;
            }

            .grid-line {
                left: 35px;
            }

            .chart-values {
                font-size: 8px;
            }

            .chart-labels {
                left: 35px;

                font-size: 8px;
            }


            /* Alerts */

            .alert-icon {
                width: 29px;
                height: 29px;

                font-size: 10px;
            }

            .alert-content strong {
                font-size: 11px;
            }


            /* Device header */

            .devices-card .card-header {
                flex-direction: column;

                align-items: stretch;
            }

            .add-button {
                width: 100%;
            }

        }


        /* =====================================================
           EXTRA SMALL PHONE
        ===================================================== */

        @media (max-width: 360px) {

            .logo-text strong {
                font-size: 12px;
            }

            .nav a {
                width: 29px;
            }

            .nav-icon {
                font-size: 14px;
            }

            .main {
                padding-left: 8px;
                padding-right: 8px;
            }

            .stat-card {
                padding: 12px;
            }

        }

    </style>
</head>


<body>

<div class="app">


    <!-- =====================================================
         SIDEBAR / MOBILE NAVIGATION
    ===================================================== -->

    <aside class="sidebar">

        <!-- Logo -->

        <div class="logo">

            <div class="logo-icon">
                M
            </div>

            <div class="logo-text">

                <strong>
                    MonitorX
                </strong>

                <span>
                    System Monitoring
                </span>

            </div>

        </div>


        <!-- Navigation -->

        <nav class="nav">

            <a href="#" class="active">

                <span class="nav-icon">
                    ▦
                </span>

                <span class="nav-label">
                    Dashboard
                </span>

            </a>


            <a href="#">

                <span class="nav-icon">
                    ◉
                </span>

                <span class="nav-label">
                    Devices
                </span>

            </a>


            <a href="#">

                <span class="nav-icon">
                    ⌁
                </span>

                <span class="nav-label">
                    Metrics
                </span>

            </a>


            <a href="#">

                <span class="nav-icon">
                    ⚠
                </span>

                <span class="nav-label">
                    Alerts
                </span>

            </a>


            <a href="#">

                <span class="nav-icon">
                    ◷
                </span>

                <span class="nav-label">
                    Logs
                </span>

            </a>

        </nav>


        <!-- Sidebar bottom -->

        <div class="sidebar-bottom">

            <a href="#">
                ⚙ &nbsp; Settings
            </a>

            <a href="#">
                ⇥ &nbsp; Logout
            </a>

        </div>

    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ===================================================== -->

    <main class="main">


        <!-- =================================================
             HEADER
        ================================================= -->

        <header class="header">

            <div class="header-title">

                <h1>
                    Dashboard
                </h1>

                <p>
                    System monitoring overview
                </p>

            </div>


            <div class="header-right">

                <div class="system-status">

                    <span class="status-dot"></span>

                    All systems operational

                </div>


                <div class="avatar">
                    AD
                </div>

            </div>

        </header>



        <!-- =================================================
             STATISTICS
        ================================================= -->

        <section class="stats">


            <!-- Total devices -->

            <div class="stat-card">

                <div class="stat-top">

                    <span>
                        Total Devices
                    </span>

                    <span class="icon blue">
                        ◉
                    </span>

                </div>

                <h2>
                    24
                </h2>

                <p>
                    <strong class="green-text">
                        +2
                    </strong>

                    this month
                </p>

            </div>


            <!-- Online -->

            <div class="stat-card">

                <div class="stat-top">

                    <span>
                        Online
                    </span>

                    <span class="icon green">
                        ✓
                    </span>

                </div>

                <h2>
                    21
                </h2>

                <p>

                    <strong class="green-text">
                        87.5%
                    </strong>

                    availability

                </p>

            </div>


            <!-- Offline -->

            <div class="stat-card">

                <div class="stat-top">

                    <span>
                        Offline
                    </span>

                    <span class="icon red">
                        !
                    </span>

                </div>

                <h2>
                    3
                </h2>

                <p>

                    <strong class="red-text">
                        Needs attention
                    </strong>

                </p>

            </div>


            <!-- Alerts -->

            <div class="stat-card">

                <div class="stat-top">

                    <span>
                        Active Alerts
                    </span>

                    <span class="icon orange">
                        ⚠
                    </span>

                </div>

                <h2>
                    7
                </h2>

                <p>

                    <strong class="orange-text">
                        3 critical
                    </strong>

                </p>

            </div>

        </section>



        <!-- =================================================
             CHART + ALERTS
        ================================================= -->

        <section class="dashboard-grid">


            <!-- =================================================
                 CPU CHART
            ================================================= -->

            <div class="card chart-card">

                <div class="card-header">

                    <div>

                        <h3>
                            CPU Usage
                        </h3>

                        <p>
                            Average across all devices
                        </p>

                    </div>


                    <select class="period-select">

                        <option>
                            Last 24 hours
                        </option>

                        <option>
                            Last 7 days
                        </option>

                        <option>
                            Last 30 days
                        </option>

                    </select>

                </div>


                <div class="chart">


                    <!-- Horizontal grid -->

                    <div class="grid-line line1"></div>
                    <div class="grid-line line2"></div>
                    <div class="grid-line line3"></div>
                    <div class="grid-line line4"></div>


                    <!-- Values -->

                    <div class="chart-values">

                        <span>
                            100%
                        </span>

                        <span>
                            75%
                        </span>

                        <span>
                            50%
                        </span>

                        <span>
                            25%
                        </span>

                        <span>
                            0%
                        </span>

                    </div>


                    <!-- SVG chart -->

                    <svg
                        viewBox="0 0 700 250"
                        preserveAspectRatio="none"
                    >

                        <defs>

                            <linearGradient
                                id="area"
                                x1="0"
                                y1="0"
                                x2="0"
                                y2="1"
                            >

                                <stop
                                    offset="0%"
                                    stop-color="#2563eb"
                                    stop-opacity=".25"
                                />

                                <stop
                                    offset="100%"
                                    stop-color="#2563eb"
                                    stop-opacity="0"
                                />

                            </linearGradient>

                        </defs>


                        <!-- Area -->

                        <path
                            class="chart-area"
                            d="
                                M0,180
                                C50,160 80,170 120,140
                                S180,110 220,135
                                S280,170 320,125
                                S380,95 420,120
                                S470,150 510,100
                                S570,70 610,105
                                S660,80 700,90
                                L700,250
                                L0,250
                                Z
                            "
                        />


                        <!-- Line -->

                        <path
                            class="chart-line"
                            d="
                                M0,180
                                C50,160 80,170 120,140
                                S180,110 220,135
                                S280,170 320,125
                                S380,95 420,120
                                S470,150 510,100
                                S570,70 610,105
                                S660,80 700,90
                            "
                        />

                    </svg>


                    <!-- Time -->

                    <div class="chart-labels">

                        <span>
                            00:00
                        </span>

                        <span>
                            06:00
                        </span>

                        <span>
                            12:00
                        </span>

                        <span>
                            18:00
                        </span>

                        <span>
                            Now
                        </span>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 ALERTS
            ================================================= -->

            <div class="card">

                <div class="card-header">

                    <div>

                        <h3>
                            Recent Alerts
                        </h3>

                        <p>
                            Latest system events
                        </p>

                    </div>

                    <a
                        href="#"
                        class="view-link"
                    >
                        View all
                    </a>

                </div>


                <!-- Alert 1 -->

                <div class="alert">

                    <div class="alert-icon critical">
                        !
                    </div>

                    <div class="alert-content">

                        <strong>
                            Server-03 CPU critical
                        </strong>

                        <p>
                            CPU usage reached 96%
                        </p>

                        <small>
                            2 minutes ago
                        </small>

                    </div>

                </div>


                <!-- Alert 2 -->

                <div class="alert">

                    <div class="alert-icon warning">
                        !
                    </div>

                    <div class="alert-content">

                        <strong>
                            Server-07 memory high
                        </strong>

                        <p>
                            Memory usage reached 89%
                        </p>

                        <small>
                            8 minutes ago
                        </small>

                    </div>

                </div>


                <!-- Alert 3 -->

                <div class="alert">

                    <div class="alert-icon info">
                        i
                    </div>

                    <div class="alert-content">

                        <strong>
                            Server-12 restarted
                        </strong>

                        <p>
                            System reboot detected
                        </p>

                        <small>
                            15 minutes ago
                        </small>

                    </div>

                </div>

            </div>

        </section>



        <!-- =================================================
             DEVICES
        ================================================= -->

        <section class="card devices-card">


            <!-- Header -->

            <div class="card-header">

                <div>

                    <h3>
                        Monitored Devices
                    </h3>

                    <p>
                        Current device status and resource usage
                    </p>

                </div>


                <button class="add-button">
                    + Add Device
                </button>

            </div>


            <!-- Table -->

            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                DEVICE
                            </th>

                            <th>
                                STATUS
                            </th>

                            <th>
                                CPU
                            </th>

                            <th>
                                MEMORY
                            </th>

                            <th>
                                DISK
                            </th>

                            <th>
                                UPTIME
                            </th>

                            <th>
                                LAST CHECK
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <!-- =================================
                             SERVER 01
                        ================================== -->

                        <tr>

                            <td>

                                <div class="device">

                                    <div class="server-icon">
                                        ▣
                                    </div>

                                    <div>

                                        <span class="device-name">
                                            Server-01
                                        </span>

                                        <span class="device-ip">
                                            192.168.1.101
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="badge online">

                                    <span class="badge-dot"></span>

                                    Online

                                </span>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        42%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar"
                                            style="width:42%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        61%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar"
                                            style="width:61%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>
                                54%
                            </td>

                            <td>
                                12d 4h
                            </td>

                            <td>
                                10 sec ago
                            </td>

                        </tr>



                        <!-- =================================
                             SERVER 03
                        ================================== -->

                        <tr>

                            <td>

                                <div class="device">

                                    <div class="server-icon">
                                        ▣
                                    </div>

                                    <div>

                                        <span class="device-name">
                                            Server-03
                                        </span>

                                        <span class="device-ip">
                                            192.168.1.103
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="badge online">

                                    <span class="badge-dot"></span>

                                    Online

                                </span>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        96%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar danger"
                                            style="width:96%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        82%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar warning"
                                            style="width:82%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>
                                71%
                            </td>

                            <td>
                                3d 18h
                            </td>

                            <td>
                                5 sec ago
                            </td>

                        </tr>



                        <!-- =================================
                             SERVER 07
                        ================================== -->

                        <tr>

                            <td>

                                <div class="device">

                                    <div class="server-icon">
                                        ▣
                                    </div>

                                    <div>

                                        <span class="device-name">
                                            Server-07
                                        </span>

                                        <span class="device-ip">
                                            192.168.1.107
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="badge offline">

                                    <span class="badge-dot"></span>

                                    Offline

                                </span>

                            </td>


                            <td>
                                —
                            </td>

                            <td>
                                —
                            </td>

                            <td>
                                —
                            </td>

                            <td>
                                —
                            </td>

                            <td>
                                12 min ago
                            </td>

                        </tr>



                        <!-- =================================
                             SERVER 12
                        ================================== -->

                        <tr>

                            <td>

                                <div class="device">

                                    <div class="server-icon">
                                        ▣
                                    </div>

                                    <div>

                                        <span class="device-name">
                                            Server-12
                                        </span>

                                        <span class="device-ip">
                                            192.168.1.112
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="badge online">

                                    <span class="badge-dot"></span>

                                    Online

                                </span>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        31%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar"
                                            style="width:31%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <div class="metric">

                                    <span class="metric-value">
                                        48%
                                    </span>

                                    <div class="progress">

                                        <div
                                            class="progress-bar"
                                            style="width:48%"
                                        ></div>

                                    </div>

                                </div>

                            </td>


                            <td>
                                38%
                            </td>

                            <td>
                                21d 8h
                            </td>

                            <td>
                                3 sec ago
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>
</html>