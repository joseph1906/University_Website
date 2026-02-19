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
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <h2>Welcome, Admin!</h2>
            <p>This is your dashboard where you can manage the university website.</p>
        </main>
    </div>
    <script src="../../assets/js/admin.js"></script>
</body>
</html>