<?php require "modules/header.php";?>

<title>Kris's WebSite</title>

<!--cover sotto navabar-->
<div class="box">
        <div class="logo-1">
                <img width="200px" alt="Web Developer MasterClass PEDacademy" src="assets/MasterClass-Web-Developer-Logotype-white-1.png">
        </div>

        <h3 class="one"><u><b>O PRIMEIRO WEBSITE PESSOAL DA KRIS</b></u></h3>
        <h4 class="a"><i>Welcome to the my little space.</i></h4>

</div>

<!--blog-->
<section class="x">
                <div class="row mr-auto">   <!-- apertura riga-->

                        <!-- colonna lato sx-->
                        <div class="col-3 mr-auto">

                                <h4 class="b"><b>Let's Talk about HTML</b></h4>

                                <img width="300" alt="HTML codes" src="assets/programming-html.jpg.jpg" class="c">
                                <small><i> fig. - Html codes</i></small>

                        </div>

                        <!-- colonna lato dx-->
                        <div class="col-8 mr-auto">

                                <!-- Blog-->
                                <br>
                                <p>     The <b>HTML</b> is the acronym of <i>Hyper Text Markup Language</i> and 
                                        isn't a programming language but a <b>markup language</b> which 
                                        allows to indicate how to arrange the elements within a page. 
                                        <br>
                                        These indications are given through special markers called <b>tag</b>,
                                        which have the characteristic of being included in angle brackets 
                                        (eg. < code >).
                                </p>

                                <p>     Every HTML page is built  in a minimal structure:
                                        <ul><i>
                                        <li>Doctype</li>
                                        <li>Html</li>
                                        <li>Head</li>
                                        <li>Body</li>
                                        </ul>

                                        The structure within HTML page that emerges is that of a tree, in which the branches are 
                                        all container tags and the ends are composed of texts, images or other elements 
                                        like input boxes. 
                                        <br>
                                        These all final elements aren't containers and don't need an closing tag.
                                </p>

                                <p>     The <b>DOM</b> <i>(Document Object Model)</i>, so, describes the structure within a HTML 
                                        document:
                                </p>
                                        <img width="300" alt="DOM scheme" src="assets/DOM-graphic-2.png">
                        </div> 

                </div> <!-- chiusura riga-->
</section>


<?php require "modules/footer.php";?>