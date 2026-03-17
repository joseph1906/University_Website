<!-- Admin Dashboard - Modern Material Design 3 -->
<?php
// Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#2962FF">
    <meta name="description" content="University LMS Admin Dashboard">
    <title>Admin Dashboard - University LMS</title>

    <!-- Google Fonts - Roboto for Material Design 3 -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Admin Dashboard Styles -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <style>
        /* Loading Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .grid-container {
            animation: fadeIn 0.3s ease-out;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()" title="Open Menu">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-symbols-outlined" title="Search">search</span>
            </div>
            <div class="header-right">
                <span class="material-symbols-outlined" title="Notifications">notifications</span>
                <span class="material-symbols-outlined" title="Messages">mail</span>
                <span class="material-symbols-outlined" title="Account">account_circle</span>
            </div>
        </header>

        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-symbols-outlined">school</span>
                    <span>LMS</span>
                </div>
                <span class="material-symbols-outlined" onclick="closeSidebar()" title="Close Menu">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Dashboard</span>
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/students/register.html'">
                    <span class="material-symbols-outlined">person_add</span>
                    <span>Register Student</span>
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/students/list.html'">
                    <span class="material-symbols-outlined">people</span>
                    <span>View Students</span>
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">notifications_active</span>
                    <span>Notifications</span>
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/staff/register.html'">
                    <span class="material-symbols-outlined">badge</span>
                    <span>Register Staff</span>
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/staff/list.html'">
                    <span class="material-symbols-outlined">admin_panel_settings</span>
                    <span>View Staff</span>
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">apartment</span>
                    <span>Departments</span>
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">library_books</span>
                    <span>Course Units</span>
                </li>
            </ul>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Page Title -->
            <div class="main-title">
                <h2>Dashboard</h2>
            </div>

            <!-- Statistics Cards -->
            <div class="main-cards">
                <div class="card">
                    <div class="card-inner">
                        <h3>Students</h3>
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change positive">↑ +12% from last month</div>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <h3>Lecturers</h3>
                        <span class="material-symbols-outlined">podium</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change positive">↑ +3 this semester</div>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <h3>Dean</h3>
                        <span class="material-symbols-outlined">manage_accounts</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change negative">↓ -1 from last year</div>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <h3>Active Courses</h3>
                        <span class="material-symbols-outlined">library_books</span>
                    </div>
                    <h1>142</h1>
                    <div class="stat-change neutral">→ Same as last term</div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts">
                <div class="charts-card">
                    <h2 class="chart-title">Student Enrollment Trend</h2>
                    <div id="bar-chart"></div>
                </div>
                <div class="charts-card">
                    <h2 class="chart-title">Students by Department</h2>
                    <div id="bar-chart-2"></div>
                </div>
            </div>
        </main>
    </div>

    <!-- Third-party scripts -->
    <!-- ApexCharts for data visualization -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/5.3.5/apexcharts.min.js"></script>

    <!-- Admin Dashboard Scripts -->
    <script src="../assets/js/admin.js"></script>
</body>
</html>