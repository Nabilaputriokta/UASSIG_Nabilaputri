<?php
include 'header.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pagePath = $page . '.php';

if (file_exists($pagePath)) {
    include $pagePath;
} else {
    echo "<p>Page not found!</p>";
}

include 'footer.php';
?>
