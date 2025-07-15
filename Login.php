<?php
include('./connection.php');
session_start();
error_reporting(-1);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username; // Store username in session
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // ✅ plain-text check based on your database
        if ($password === $row['PASSWORD_hash']) {
            $_SESSION['username'] = $username;
            header("Location: /mustang/admin-pannal/index1.php");
            exit();
        }
    }

    // ❌ wrong login
    echo "<script>
        alert('Invalid Username And Password');
        window.location.href='index.php';
      </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUSTANG TECHNOLOGIES – Admin Login</title>

    <!-- ====  Basic Reset + Google Font  ==== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

    <style>
        :root {
            /* brand palette */
            --clr-red: #e63946;
            --clr-blue: #457b9d;
            --clr-green: #2a9d8f;
            --clr-white: #ffffff;
            --clr-shadow: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        /* === background gradient using brand colours === */
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--clr-blue), var(--clr-green));
        }

        /* === glassy card === */
        .login-card {
            width: 340px;
            padding: 2rem 2.5rem 2.8rem;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 1.25rem;
            box-shadow: 0 10px 25px var(--clr-shadow);
            text-align: center;
            color: var(--clr-white);
        }

        .login-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Fills box, may crop */
            border-radius: 3px;
            border: 3px solid var(--clr-red);
            margin-bottom: 1.2rem;
        }

        h1 {
            font-size: 1.6rem;
            margin-bottom: 1.8rem;
            font-weight: 600;
        }

        label {
            display: block;
            text-align: left;
            font-size: 0.9rem;
            margin-bottom: 0.35rem;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 0.55rem 0.8rem;
            margin-bottom: 1.1rem;
            border: none;
            border-radius: 0.5rem;
            outline: none;
        }

        /* button with brand accent */
        button {
            width: 100%;
            padding: 0.6rem 0;
            background: var(--clr-red);
            border: none;
            border-radius: 0.5rem;
            color: var(--clr-white);
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 200ms ease;
        }

        button:hover {
            background: #c22e39;
            /* darker red */
        }

        /* error message */
        .error-msg {
            background: var(--clr-red);
            color: var(--clr-white);
            padding: 0.45rem;
            border-radius: 0.35rem;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <main class="login-card">
        <img src="./images/logo.png" alt="Mustang Logo" />
        <h1>Admin Login</h1>

        <!-- error block (PHP will echo ?err=1) -->
        <?php if (!empty($_GET['err'])): ?>
            <div class="error-msg">Invalid username or password</div>
        <?php endif; ?>

        <form method="post">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" required autofocus />

            <label for="password">Password</label>
            <input id="password" type="password" name="password" required />

            <button type="submit" name="submit">Move to Admin Panel</button>
        </form>
    </main>
</body>

</html>