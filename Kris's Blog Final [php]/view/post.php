<?php require "modules/header.php";?>

<title>Post</title>

<div class="post-bg">

<!--Cover sotto navabar-->
<div class="box">
        <div class="logo-1">
                <img width="200px" alt="Web Developer MasterClass PEDacademy" src="assets/MasterClass-Web-Developer-Logotype-white-1.png">
        </div>

        <h2 class="one"; ><b>FAQ</b></h2>
        <h4 class="a"><i>Freaking Annoying Questions</i>💁🏻‍♂️</h4>

</div>

<br><br>

<!-- POST CARD-->
<div class="row d-flex justify-content-center mr-auto">   <!-- apertura riga -->

        <div class="col"></div>   <!-- colonna -->
        <div class="col-8 card bg-dark">

            <div class="card-body">
            <h5 class="card-title", style="color:white"><b>ADD POST</b></h5>
            <h6 class="card-title", style="color: white;"> <i>Ask your existential doubts here</i></h6>

                <p class="group-box">

                    <form action="post.php" method="POST">
                            <div class="email-box">
                            <label style="color: white;" >Title:</label>
                            <input type="text" class="form-control" 
                            placeholder="Your question" required; style="font-style: oblique; 
                            background-color: lightgray">
                            </div>
                        <br>
                             <div class="msg-box">
                             <label style="color: white;">Message:</label>

                             <textarea class="form-control" placeholder="How can I help you? (maybe)" rows="4" 
                             style="font-style: oblique;" required></textarea>
                             </div>
                        <br>
                            <div class="tag-box">
                            <label style="color: white;">Tags:</label>
                            <input type="text" class="form-control" 
                            placeholder="" required; style="font-style: oblique;
                             background-color: lightgray">
                            </div>
                        <br>
                            <div class="checkin-box"></div>
                            <button type="submit" class="btn btn-primary ">SUBMIT</button>

                        


                    </form>
                </p>

            </div>

        </div>
        <div class="col"></div> <!-- colonna-->
</div> <!-- chiusura riga -->
<br><br><br>

<?php require "modules/footer.php";?>