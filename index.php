<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARSTATION | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="website icon" type="png" href="img/logo-car.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/login.js"></script>
</head>
<body>
    <div class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column gap-2">
            <div class="p-2"id="resp"></div>
            <form class="p-4 rounded-2" onsubmit="return LogIn()">
                <div class="ps-4 pe-4">
                    <img src="img/logo-car.png" class="img-fluid" alt="logo"> 
                </div>
                <div>
                    <h5 class="h5 text-secondary text-center">Iniciar Sesión</h5>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="user" placeholder="correo electrónico" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="contraseña" required>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>