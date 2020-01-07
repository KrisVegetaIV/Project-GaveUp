<?php require "modules/header-login.php";?>

<title>Login</title>

<div class="login-bg">

<div class="wallpaper-login">
        <div class="logo-1">
                <img width="200px" alt="Web Developer MasterClass PEDacademy" src="assets/MasterClass-Web-Developer-Logotype-white-1.png">
        </div>
        
                <img src="assets/krisbook-logotype.png" class="b" width="230" alt="krisbook" hidden>
                <h4 class="a" hidden><i>CONNECT WITH YOUR FRIENDS<BR>AROUND YOU ON MY LITTLE SPACE.</i></h4>
                <h2 class="one"><u><b></b></u></h2>
</div>

<br>

<!-- GRID-->
<div class="row mr-auto"> <!-- apertura riga-->

    <div class="col mr-auto"> <!-- apertura colonna lato sx-->

        <!-- DESIGN AREA-->
        <div class="list">
        <h4 class="a"><i>ENTER MY FIRST LITTLE WEBSITE</i></h4>
        <h6 class="one"><i>you can enjoy to:</i></h6>

        <br>
        <img src="assets/list-sign-up.png" alt="icons">
        </div>

    </div> <!-- chiusura col lato sx-->


    <!--MY CARD-->
    <div class="card-list">
        <div class="col"> <!-- apertura colonna lato dx-->

            <!--date card-->
                <div class="row">   <!-- apertura inner riga -->
                    <div class="col card bg-dark"> <!-- apertura inner colonna -->

                        <div class="card-body">
                        <h5 class="card-title", style="color:white"><b>Login</b></h5>
                        <h6 class="card-subtitle", style="color:white">It's easy and quick.</h6>
                        

                        <p class="group-box">
                            <form>
                                <div class="form-row"></div>
                            <br>
                                <div class="email-box block">
                                <label style="color: white;" for="inputEmail" hidden>Email:</label>
                                <input type="email" class="form-control" id="inputEmail" 
                                placeholder="Email address" required; 
                                style="font-style: oblique; background-color: lightgray">
                                </div>
                            <br>
                                <div class="psw-box block">
                                <label style="color: white;" for="inputPassword" hidden>Password:</label>
                                <input type="password" class="form-control" id="inputPassword" 
                                placeholder="Password" required; 
                                style="font-style: oblique; background-color: lightgray">
                                </div>
                            <br>
                                <div class="checkin-box"></div>
                                    <button type="submit" class="btn btn-primary btn-block"
                                    href="Kris's-Blog.php">SIGN IN</button>
                            </form>
                        </p>
                        </div>

                    </div> <!-- chiusura inner colonna-->
                </div> <!-- chiusura inner riga-->

        </div><!-- chiusura col lato dx -->
    </div>

</div> <!-- chiusura riga-->

<!-- copyright-->
<br><br><br><br><br><br>
<small class="copyright1"><small>©2019/2020 Designer & Developer Kris Vegeta Gennaro | <a href="#">Privacy Policy</a></small></small>

</div>

<?php require "modules/footer.php";?>