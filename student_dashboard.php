<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003F77;
            color: white;
            padding: 20px 0;
            text-align: left;
            font-size: 24px;
            font-weight: bold;
        }

        .dashboard-container {
            max-width: 600px;
            margin: 60px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 30px 40px;
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .button-group a {
            display: inline-block;
            margin: 10px;
            padding: 12px 25px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button-group a.logout {
            background-color: #e74c3c;
        }

        .button-group a:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<header>
    Student Dashboard
</header>

<div class="dashboard-container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']['firstname'] ?? 'Student'); ?>!</h2>
    <div class="button-group">
        <a href="submit_feedback.php">Submit Feedback</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</div>

</body>
</html>
