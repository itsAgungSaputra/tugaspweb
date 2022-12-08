<?php
function isLogin()
{
    if (!isset($_SESSION['login'])) {
        header('Location: ../home.php');
    }
}
