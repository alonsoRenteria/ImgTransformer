<?php
    require_once("ImgTransformer.php");
    $imgTmr = new ImgTransformer();
    $imgTmr->resizeAll("input/apple.jpg");
?>