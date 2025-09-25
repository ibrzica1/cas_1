<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderni Login</title>
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

        .login-container {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            /* Moderan, mekani box shadow */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); 
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px); /* Lagani efekt lebdenja */
        }

        .login-form {
            display: flex;
            flex-direction: column;
            width: 350px;
        }

        .login-form h2 {
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

        /* Stilovi za dugme za PRIJAVU */
        .login-btn {
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 10px;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .login-btn:active {
            transform: scale(0.99);
        }
        
        /* Stilovi za dugme za REGISTRACIJU (sekundarni stil) */
        .register-btn {
            padding: 15px;
            background-color: #6c757d; /* Diskretna siva */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 10px; /* Razmak između dugmadi */
            text-align: center;
            text-decoration: none; /* Uklanjanje podvlačenja ako je <a> tag */
            display: block; /* Omogućuje mu da zauzme punu širinu */
        }

        .register-btn:hover {
            background-color: #5a6268;
        }

        .register-btn:active {
            transform: scale(0.99);
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form class="login-form" method="POST" action="decisionMaker.php">
          <input type="hidden" name="login">
            <h2>Prijavite se</h2>
            
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Korisničko ime" required>
            </div>
            
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Lozinka" required>
            </div>
            
            <button type="submit" class="login-btn">Prijavi se</button>
            
            <a href="view/signup.php" class="register-btn">Registriraj se</a>

            <div class="forgot-password">
                <a href="#">Zaboravili ste lozinku?</a>
            </div>
        </form>
    </div>
</body>
</html>