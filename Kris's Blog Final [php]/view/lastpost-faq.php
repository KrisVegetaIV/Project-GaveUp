<?php require "modules/header.php";?>

<title>FAQ</title>

<!--Cover sotto navabar-->
<div class="box">
        <div class="logo-1">
                <img width="200px" alt="Web Developer MasterClass PEDacademy" src="assets/MasterClass-Web-Developer-Logotype-white-1.png">
        </div>

        <h3 class="one"><b>Frequently Asked Question</b></h3>
        <h4 class="a"><i>Ask your existential doubts here</i>💁🏻‍♂️</h4>

</div>

<br>

<!-- Comments/Ultimi Post -->

<div class="row mr-auto">   <!-- apertura riga-->

    <div class="col-1"></div>   <!-- colonna vuota lato sx-->
    <div class="col-10 mr-auto">

    <!-- funzionalità post in PHP-->
    <div>
        <?php if (isset($_GET['tag'])) {?>
            There are questions? Go to POST <i>[with tag]</i> <?= $_GET['tag'];?>
            <?php } else {?>
                There are questions? Go to POST
            <?php }?>
    </div>

    <br><br><br>

    <!-- NON RIESCO A CAPIRE DOVE SBAGLIO 🤔-->
    <?php
        $username = 'root';
        $password = '';
        $dbh = new PDO('mysql:host=127.0.0.1;dbname=db_posts', $username, $password);
        $rows = $pdo->query('SELECT `title`, `content`, `tag` FROM `post` WHERE 1');
        $items = $rows->fetchAll(PDO::FETCH_ASSOC);
        print_r($items);
    ?>

        <?php foreach ($items as $item) { ?>
            <article>
        <hr><h5 class="b1"><b><?php echo $item['title']; ?></b></h5>
            <p><?php echo $item['content']; ?> </p>
            <h6 class="tags"> <p>Tags: <?php foreach ($items["tag"] as $item => $tag) { ?></p></h6>
            <h6 class="typed-tags"> <p><?php
                                $delimiter = $items < (count($item["tag"]) - 1) ? ', ' : '.'; ?>
                                <a href="lastpost-faq.php?tag=<?= $tag ?>"><?= $tag ?></a><?= $delimiter ?>
                                <?php } ?></p></h6>
            </article>
        <?php } ?>


    <br><br>

            <!--Qui l'avevo già scritto prima di trasformare in PHP e come OUTPUT dovrebbe risultare
            come ho scritto sotto in HTML-->
        <div hidden>
            <h5 class="b1"><b>Why Patrick is a Back-End?</b></h5>
            <p>
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
             Itaque ipsa voluptatum maxime esse omnis veniam, facere minus dignissimos voluptates eveniet! 
             Molestiae atque quas necessitatibus temporibus, velit ut ducimus minus ipsam.
            </p>
            <h6 class="tags"> Tags: </h6>
            <h6 class="typed-tags">
                <a href="post.php?tag=backend">#Backend</a>
                <a href="post.php?tag=programming">#Programming</a>
             </h6>
    <hr>

             <h5 class="b1"><b>How to become a Web Developer?</b></h5>
             <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
              Itaque ipsa voluptatum maxime esse omnis veniam, facere minus dignissimos voluptates eveniet! 
              Molestiae atque quas necessitatibus temporibus, velit ut ducimus minus ipsam.
            </p>
            <h6 class="tags"> Tags: </h6>
            <h6 class="typed-tags"> 
                <a href="post.php?tag=developer">#Developer</a>
                <a href="post.php?tag=bejedi">#BeJedi</a>
                <a href="post.php?tag=learning">#Learning</a>
                <a href="post.php?tag=codelover">#CodeLover</a>
            </h6>

    <hr>
            <h5 class="b1"><b>Which is better between Designer and Developer? </b></h5>
            <p>
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
             Itaque ipsa voluptatum maxime esse omnis veniam, facere minus dignissimos voluptates eveniet! 
             Molestiae atque quas necessitatibus temporibus, velit ut ducimus minus ipsam.
            </p>
            <h6 class="tags"> Tags: </h6>
            <h6 class="typed-tags"> 
                <a href="post.php?tag=designer">#Designer</a>
                <a href="post.php?tag=developer">#Developer</a>
                <a href="post.php?tag=code">#Code</a>
                <a href="post.php?tag=webdesigner">#WebDesigner</a>
                <a href="post.php?tag=webdeveloper">#WebDeveloper</a> </h6>
        </div>


    </div>
    </div>
</div> <!-- chiusura riga-->

<br><br>

<?php require "modules/footer.php";?>