<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/navbar-style.css">
    <style src="./scripts/bootstrap.min.js"></style>
</head>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand text-info" href="#">SMA</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-collapse-init
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link active" aria-current="page" href="./">
                            <div>
                                <i class="fas fa-home fa-lg mb-1"></i>
                            </div>
                            Home
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link active" aria-current="page" href="list.php">
                            <div>
                                <i class="fas fa-home fa-lg mb-1"></i>
                            </div>
                            List
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link active" aria-current="page" href="./insert.php">
                            <div>
                                <i class="fas fa-home fa-lg mb-1"></i>
                            </div>
                            Insert
                        </a>
                    </li>
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link active" aria-current="page" href="#!">
                            <div>
                                <i class="fas fa-home fa-lg mb-1"></i>
                            </div>
                            About-us
                        </a>
                    </li>
                </ul>
              
                <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
                    <li class="nav-item text-center mx-2 mx-lg-1">
                        <a class="nav-link" href="#!">
                            <div>
                                <i class="fas fa-bell fa-lg mb-1"></i>
                                <span class="badge rounded-pill badge-notification bg-info"><?php if(isset($_SESSION['students'])) printf(count($_SESSION['students'])) ?></span>
                            </div>
                            Students
                        </a>
                    </li>
                   
                </ul>
                <!-- Right links -->

                <!-- Search form -->
                <form class="d-flex input-group w-auto ms-lg-3 my-3 my-lg-0" method="get" action="./search-result.php" >
                    <input type="search" class="form-control" placeholder="Search" name="cin" aria-label="Search" />
                    <button class="btn btn-primary" type="submit" data-mdb-ripple-init data-mdb-ripple-color="dark">
                        Search
                    </button>
                </form>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>

<body>