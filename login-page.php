<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina web streaming de peliculas">
    <meta name="author" content="Freddy Muñoz">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="js/process_usuarios.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Films+</title>
</head>
<body class="body-login-page-php">
    <div class="d-flex justify-content-center p-5 login-page-form text-white">
        <div>
            <div class="d-flex justify-content-center align-items-center mb-4 mt-4">
                <a href="index.html" class="text-decoration-none"><img src="img/logo.png" class="img-logo-header logo-header-login" alt=""></a>
            </div>
            <h4 class="mb-3 d-flex justify-content-center align-items-center">Iniciar sesión con tu correo</h4>
            <div class="input-group mb-3">
                <input id="email" name="email" type="text" class="form-control p-3" placeholder="Ingrese su correo" aria-label="Ingrese su correo" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
            <div class="input-group mb-3">
                <input id="password" name="password" type="password" class="form-control p-3" placeholder="Ingrese su contraseña" aria-label="contraseña" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-chat-square-dots-fill"></i></span>
            </div>
            <a href="#" onclick="loginuser()"><button type="button" class="btn btn-primary btn-lg w-100 mt-3">Iniciar Sesion</button><a/>
            <div id="mensajelogin" class="d-flex justify-content-center align-items-center mt-4 text-danger"></div>
            <div>
                <h4 class="mt-4 fs-6 text-secondary">¿No estas registrado en Films+? <a href="register-page.php" class="nav-item text-white text-decoration-none" title="Registrate">Registrate</a></h4>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>