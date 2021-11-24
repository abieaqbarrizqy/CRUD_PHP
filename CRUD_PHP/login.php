<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrao -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrao -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Righteous&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- Google Font -->

    <!-- Own CSS -->
    <link rel="stylesheet" href="css/login.css">
    <title>Login | CRUD PHP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CRUD WITH PHP</a> <!-- Text Judul -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center" style="background-image: url('img/memphis-colorful.png');">
                <form action="" method="POST">
                    <h4 class="my-5 fw-">Login</h4>
                    <div class="my-4">
                        <input type="text" class="form-control w-50" name="username" placeholder="Username">
                    </div>
                    <div class="my-4">
                        <input type="password" class="form-control w-50" name="password" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary text-uppercase">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Of Container -->


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>