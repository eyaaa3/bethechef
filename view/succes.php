<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .error-container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #f44336;
        }
        .error-details {
            margin-top: 20px;
            color: #666;
        }
        .back-link {
            margin-top: 30px;
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .back-link:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Utilisateur </h1>
        <p class="error-details">créé avec succes</p>
        <?php if(isset($_GET['error_message'])): ?>
            <p class="error-details"><?php echo htmlspecialchars($_GET['error_message']); ?></p>
        <?php endif; ?>
        <a href="admin/viewCreatedAdmin.php" class="back-link">Go Back</a>
        <a href="login.php" class="back-link">connexion !</a>
        <p class="error-details">If the problem persists, please <a href="contact.php">contact support</a>.</p>
    </div>
</body>
</html>