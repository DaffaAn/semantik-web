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
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>

    <style>
        input {
            border-radius: 5px;
            border-color: black;
            border-style: solid;
            margin-right: 15px;
            width: 900px;
        }
    </style>
</head>

<body style="background-color: #1a1a1a ;">
    <!-- Connector untuk menghubungkan PHP dan SPARQL -->
    <?php
    require_once("sparqllib.php");
    $searchInput = "";
    $filter = "";

    if (isset($_POST['search'])) {
        $searchInput = $_POST['search'];
        $data = sparql_get(
            "http://localhost:3030/hero",
            "
            PREFIX p: <http://hero.com>
            PREFIX d: <http://hero.com/ns/data#>

                SELECT ?NamaHero ?Role ?Hp ?Mana ?Offense ?Defense
                WHERE
                { 
                    ?s
                        d:NamaHero       ?NamaHero ;
                        d:Role           ?Role ;
                        d:Hp             ?Hp ;
                        d:Mana           ?Mana ;
                        d:Offense        ?Offense ;
                        d:Defense        ?Defense ;
                        FILTER 
                        (regex (?NamaHero, '$searchInput', 'i') 
                        || regex (?Role, '$searchInput', 'i') 
                        || regex (?Hp, '$searchInput', 'i') 
                        || regex (?Mana, '$searchInput', 'i') 
                        || regex (?Offense, '$searchInput', 'i') 
                        || regex (?Defense, '$searchInput', 'i')) 
                }
            "
        );
    } else {
        $data = sparql_get(
            "http://localhost:3030/hero",
            "
            PREFIX p: <http://hero.com>
            PREFIX d: <http://hero.com/ns/data#>

                SELECT ?NamaHero ?Role ?Hp ?Mana ?Offense ?Defense
                WHERE
                { 
                    ?s
                        d:NamaHero       ?NamaHero ;
                        d:Role           ?Role ;
                        d:Hp             ?Hp ;
                        d:Mana           ?Mana ;
                        d:Offense        ?Offense ;
                        d:Defense        ?Defense ;
                }
            "
        );
    }

    if (!isset($data)) {
        print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #be9e44 ;">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo.jpg" style="width:50px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-25 mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" style="width: 100px ;" aria-current="page" href="home.php">View Database</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="about.php">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="" method="post" id="search" name="search">
                    <input class="form" type="search" placeholder="Nama Hero" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container container-fluid my-3">
        <?php
        if ($searchInput != NULL) {
        ?>
            <span style="color: white;">Pencarian hero: <b>"<?php echo $searchInput; ?>"</b></span>
        <?php
        }
        ?>
        <table class="table table-bordered table-hover text-center table-responsive table-dark">
            <thead class="table-light align-middle">
                <tr>
                    <th>No.</th>
                    <th>Nama Hero</th>
                    <th>Role</th>
                    <th>HP</th>
                    <th>Mana</th>
                    <th>Offense</th>
                    <th>Defense</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $i = 0; ?>
                <?php foreach ($data as $data) : ?>
                    <td><?= ++$i ?></td>
                    <td><?= $data['NamaHero'] ?></td>
                    <td><?= $data['Role'] ?></td>
                    <td><?= $data['Hp'] ?></td>
                    <td><?= $data['Mana'] ?></td>
                    <td><?= $data['Offense'] ?></td>
                    <td><?= $data['Defense'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php
    if ($searchInput != NULL) {
    ?>
        <footer class="footer text-light text-center footer-light pb-1 fixed-bottom" style="background-color: #be9e44 ;">
            <p>Copyright &copy; All rights reserved - MLBB Database</p>
        </footer>
    <?php
    } else {
    ?>
        <footer class="footer text-light text-center footer-light pb-1" style="background-color: #be9e44 ;">
            <p>Copyright &copy; All rights reserved - MLBB Database</p>
        </footer>
    <?php
    }
    ?>
</body>

</html>