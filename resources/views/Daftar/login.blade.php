<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fcfc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            text-align: center;
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2rem;
            color: #00A4C7;
            font-weight: 600;
        }

        p {
            margin-top: 10px;
            font-size: 1rem;
            color: #666;
        }

        form {
            margin-top: 20px;
        }

        input, select {
            width: 100%;
            padding: 12px 20px;
            margin: 10px 0;
            border: 1px solid #d6f8f9;
            border-radius: 30px;
            background-color: #d6f8f9;
            color: #00A4C7;
            font-size: 1rem;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #00A4C7;
        }

        button {
            width: 100%;
            padding: 15px 20px;
            border: none;
            border-radius: 30px;
            background-color: #00A4C7;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: #008bb0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <p>Masukkan informasi Anda</p>
        <form method="POST" action="process_login.blade.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <select name="role" required>
                <option value="" disabled selected>Pilih Role</option>
                <option value="parent">Parent</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

