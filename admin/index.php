<!-- admin dashboard -->
<?php
// Start the session 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-symbols-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-symbols-outlined">notifications</span>
                <span class="material-symbols-outlined">mail</span>
                <span class="material-symbols-outlined">account_circle</span>
                
            </div>

        </header>
        <aside class="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-symbols-outlined">school</span> LMS
                </div>
                <span class="material-symbols-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">dashboard</span> Dashboard
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/students/register.html'">
                    <span class="material-symbols-outlined">people</span> Register Student
                </li>
                <li class="sidebar-list-item" onclick="location.href='../modules/students/list.html'">
                    <span class="material-symbols-outlined">view_list</span> View Students
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">notifications</span> Notifications
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">group</span> Staff Members
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">view_list</span> View Staff Members
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">network_node</span> Departments
                </li>
                <li class="sidebar-list-item">
                    <span class="material-symbols-outlined">book</span> Courses units
                </li>
            </ul>
        </aside>
        <main class="main-content">
            <div class="main-title">
                <h2>DASHBOARD</h2>
            </div>
            <div class="main-cards">
                <div class="card">
                    <div class="card-inner">
                        <h3>Students</h3>
                        <!-- <img src="../assets/image/icon/student-icon-32.svg" alt=""> -->
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change positive">↑ +12% from last month</div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h3>Lecturers</h3>
                        <!-- <img src="../assets/image/icon/lecturer-icon-32.svg" alt=""> -->
                        <span class="material-symbols-outlined">podium</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change positive">↑ +3 this semester</div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h3>Dean</h3>
                        <!-- <img src="../assets/image/icon/leadership-icon-32 (2).svg" alt=""> -->
                        <span class="material-symbols-outlined">manage_accounts</span>
                    </div>
                    <h1>249</h1>
                    <div class="stat-change negative">↓ -1 from last year</div>
                </div>
                <div class="card">
                    <div class="card-inner">
                        <h3>Active Courses</h3>
                        <!-- <img src="../assets/image/icon/admin-icon-32.svg" alt=""> -->
                        <span class="material-symbols-outlined">library_books</span>
                    </div>
                    <h1>142</h1>
                    <div class="stat-change neutral">→ Same as last term</div>
                </div>
            </div>
            <div class="charts">
                <div class="charts-card">
                    <h2 class="chart-title">Student Enrollment</h2>
                    <div id="bar-chart"></div>
                </div>
                <div class="charts-card">
                    <h2 class="chart-title">students by department</h2>
                    <div id="bar-chart-2"></div>
                </div>
            </div>
        </main>
    </div>
    <!-- apexchart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/5.3.5/apexcharts.min.js"></script>
    <script src="../assets/js/admin.js"></script>
</body>
</html>