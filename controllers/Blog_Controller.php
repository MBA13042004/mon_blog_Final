<?php
require_once "models/Blog_Model.php";

function Billets() {
    $billets = getBillets();
    require "views/vueBlog.php"; // ou vueBlog selon ton organisation
}


