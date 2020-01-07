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

        <!--JavaScript-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--scriptsheet JS-->
        <script src="script.js"></script>

</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="assets/krisbook-logotype-1.png" width="" height="35" alt="krisbook"hidden></a>
        <img src="assets/krisbook-logotype.png" width="" height="35" alt="krisbook" class="brandlogin"></a>

        <!-- ESC/exit-->
        <a class="nav-link active" href="Kris's-Blog.php">[❌ exit ]</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- HIDDEN- MENUS-->
                        <ul class="navbar-nav mr-auto" hidden>
                                <li class="nav-item">
                                        <a class="nav-link active" href="Kris's-Blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="who-i-am.php">About</a>
                                </li>

                                <li class="nav-item" hidden>
                                        <a class="nav-link" href="Gallery.php">Gallery</a>
                                </li>

                                <!--⚠️ Fake dropdown but working, just no files -->
                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" onclick="myFunction()" data-toggle="dropdown" role="button" 
                                            aria-expanded="false">Practices<span class="angle-down s7-angle-down"></span></a>
                                                <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="#">HTML Basics</a>
                                                        <a class="dropdown-item" href="#">CSS Basics</a>
                                                        <a class="dropdown-item" href="#">JS Basics</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">what's a CMS?</a>
                                                        <a class="dropdown-item" href="#">Exercises</a>
                                                </div>
                                </li>

                                <li class="nav-item" hidden>
                                        <a class="nav-link" href="lastpost-faq.php">FAQ</a>


                                </li>
                        </ul>

                                <ul class="navbar-nav" hidden>

                                        <!--Search Form-->
                                        <form class="form-inline">
                                        <input class="form-control mr-sm-1" type="search" placeholder="Search" 
                                        aria-label="Search" style="font-style: oblique;">
                                        <button class="btn btn-outline-primary my-2 my-sm-0 mr-3" type="submit">Search</button>
                                        </form>

                                        <!--Login/Post Buttons-->
                                        <a class="btn btn-danger px-3 mr-2" href="login.php">Login </a>
                                        <a class="btn btn-primary px-3" href="post.php">Post</a>
                                </ul>
        </div>
</nav>
