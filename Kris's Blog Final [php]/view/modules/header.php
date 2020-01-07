<!DOCTYPE html>
<html lang="eng">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        

        <!--bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--css-->
        <link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="assets/krisbook-logotype-1.png" width="" height="35" alt="krisbook"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                        <a class="nav-link active" href="Kris's-Blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="who-i-am.php">About</a>
                                </li>

                                <li class="nav-item">
                                        <a class="nav-link" href="Gallery.php">Gallery</a>
                                </li>

                                <!--⚠️ Fake dropdown but working, just no files -->
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" onclick="myFunction()" data-toggle="dropdown" role="button" aria-expanded="false">Practices<span class="angle-down s7-angle-down"></span></a>
                                                <div class="dropdown-menu" role="menu" id="myDropdown">
                                                        <a class="dropdown-item" href="#">HTML Basics</a>
                                                        <a class="dropdown-item" href="#">CSS Basics</a>
                                                        <a class="dropdown-item" href="#">JS Basics</a>
                                                   <div class="dropdown-divider" id="myDropdown"></div>
                                                        <a class="dropdown-item" href="#">what's a CMS?</a>
                                                        <a class="dropdown-item" href="#">Exercises</a>
                                                </div>
                                </li>

                                <li class="nav-item">
                                        <a class="nav-link" href="lastpost-faq.php">FAQ</a>

                                </li>
                        </ul>

                                <ul class="navbar-nav">

                                        <!--Search Form-->
                                        <form class="form-inline">
                                        <input class="form-control mr-sm-1" type="search" placeholder="Search"  
                                        aria-label="Search" style="font-style: oblique;">
                                        <button class="btn btn-outline-primary my-2 my-sm-0 mr-3" type="submit">Search</button>
                                        </form>

                                        <!--Login e Post Buttons-->
                                        <a class="btn btn-danger px-3 mr-2" href="login.php">Login</a>
                                        <a class="btn btn-primary px-3" href="post.php">Post</a>
                                        <!-- Logout / ho nascosto perché non riesco a mettere la funzione php -->
                                        <a class="btn btn-danger px-3 mr-2" href="login.php" hidden>Logout</a>
                                </ul>

</nav>
