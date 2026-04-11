<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="/css/partials/header.css">
    <link rel="stylesheet" href="/css/partials/footer.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/user.css">
</head>
<body>
    <?php require '/app/src/Views/partials/header.php';?>

    <main class="login-main">
        <div class="login-container">
            <h3 class="login-label">Login</h3>

            <form method="post" action="/login">
                <div class="login-input-container">
                    <label for="email">Email</label>
                    <input class="login-input" type="email" name="email">
                </div>
                <div class="login-input-container">
                    <label for="password">Password</label>
                    <input class="login-input" type="password" name="password">
                </div>
                
                <button class="login-login-btn" type="submit">Login</button>
            </form>

            <div>Don't have an account? <a href="/register">Register</a></div>
            <div>Forgot password? <a href="/password-reset">Password Reset</a></div>
        </div>
    </main>

    <?php require '/app/src/Views/partials/footer.php';?>
</body>