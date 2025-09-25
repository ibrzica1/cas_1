<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* Globalni stilovi i centriranje */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f4f8; /* Blago siva/plava pozadina */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .register-container {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            /* Moderan, mekani box shadow */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease;
        }

        .register-container:hover {
            transform: translateY(-5px); /* Lagani efekt lebdenja */
        }

        .register-form {
            display: flex;
            flex-direction: column;
            width: 350px; /* Ista širina kao login forma */
        }

        .register-form h2 {
            text-align: center;
            color: #334e68;
            margin-bottom: 30px;
            font-weight: 600;
        }

        /* Stilovi za polja za unos */
        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #c9d6e4;
            border-radius: 8px;
            padding: 10px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-group:focus-within {
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.2);
        }

        .input-group i {
            color: #a7b7c9;
            font-size: 18px;
            margin-right: 10px;
        }

        .input-group input {
            border: none;
            outline: none;
            flex-grow: 1;
            font-size: 16px;
            padding: 5px 0;
        }

        /* Stilovi za glavno dugme za REGISTRACIJU */
        .register-btn-main {
            padding: 15px;
            background-color: #28a745; /* Zelena boja za novu akciju/registraciju */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 10px;
        }

        .register-btn-main:hover {
            background-color: #1e7e34;
        }

        .register-btn-main:active {
            transform: scale(0.99);
        }

        /* Link za povratak na prijavu */
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }

        .login-link p {
            margin: 0;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <form class="register-form" method="POST" action="../decisionMaker.php">
            <input type="hidden" name="signup">
            <h2>Registrirajte se</h2>
            
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Korisničko ime" required>
            </div>
            
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Lozinka" required>
            </div>
            
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_confirm" placeholder="Potvrdi lozinku" required>
            </div>
            
            <button type="submit" class="register-btn-main">Registriraj se</button>
            
            <div class="login-link">
                <p>Već imate račun? <a href="index.php">Prijavite se ovdje</a></p>
            </div>
        </form>
    </div>
</body>
</html>