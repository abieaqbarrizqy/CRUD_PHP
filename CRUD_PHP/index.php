<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Righteous&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- Google Font -->

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- Data Tabls CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>DATA | CRUD PHP</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
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
                <a class="nav-link" href="#">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-3">
            <div class="col-md">
                <h2 class="text text-uppercase text-center fw-bold ">Data</h2>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md">
                <a href="#" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp; Tambah Data</a>
                <a href="#" class="btn btn-success ms-1" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i>&nbsp;Ekspor Ke Excel</a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Of Container -->

    <!-- Footer -->
        <div class="container-fluid bg-dark text-white">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-uppercase fw-bold">About</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nulla voluptatibus nam ipsa, magnam quidem illum temporibus officia ullam dolores?</p>
                </div>
                <div class="col-md-6 text-center Link">
                    <h4 class="text-uppercase fw-bold">Link Account</h4>
                    <a href="https://www.instagram.com/jennierubyjane/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                    <a href="https://www.instagram.com/lalalalisa_m/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                    <a href="https://www.instagram.com/sooyaaa__/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                    <a href="https://www.instagram.com/roses_are_rosie/" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
                </div>
            </div>
            <footer class="text-center" style="padding: 8px;">
                <p>Created with by <i class="bi bi-file-arrow-down-fill" style="color: red;"></i> <u class="fw-bold">Abie Aqbarrizqy</u></p>
            </footer>
        </div>
    <!-- End Of Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
</body>
</html>