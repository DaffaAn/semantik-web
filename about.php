<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLBB Database</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <style>
        input {
            border-radius: 5px;
            border-color: black;
            border-style: solid;
            margin-right: 15px;
            width: 1145px;
        }
    </style>
</head>

<body style="background-color: #1a1a1a ;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #be9e44 ;">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo.jpg" style="width:50px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="home.php">View Database</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="accordion container my-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" style="background-color: #1a1a1a; color:aliceblue;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                    Pengertian Semantik Web
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p>semantik web adalah website yang memiliki makna. Dengan itu dapat diartika bahwa semantic web adalah suatu inovasi dalam berbentuk website yang mempunyai knowledge sehingga bisa dikatakan mempunyai sifat lebih pintar dari web sebelumnya.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" style="background-color: #1a1a1a; color:aliceblue;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    About the Project
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <p>MLBB Database adalah sebuah website untuk membantu para pemula yang memainkan game mobile legends: Bang Bang untuk dapat dengan mudah mengerti tentang hero yang ada di mobile legend</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" style="background-color: #1a1a1a; color:aliceblue;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Profil Developer
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="src/img/foto.jpg" style="width: 18rem;" alt="Author">
                        </div>
                        <div class="col-md-8">
                            <h4>
                                Dibuat oleh:
                            </h4>
                            <div class="card-body">
                                <h6>Daffa Anov Arkan Javier</h6>
                                <span>140810190008<br>Universitas Padjajaran</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
    </div>



    <!-- Footer -->
    <footer class="footer text-light text-center footer-light pb-1 fixed-bottom" style="background-color: #be9e44 ;">
        <p>Copyright &copy; All rights reserved - MLBB Database</p>
    </footer>
</body>

</html>