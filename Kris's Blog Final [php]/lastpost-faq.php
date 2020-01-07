<?php
require_once "core/post-repository.php";

if (!empty($_GET['tag'])) {
    $items = getAllPostsByTag($_GET['tag']);
   } 

include "view/lastpost-faq.php";
?>