<?php
require "partials/header.php";
?>

<?php
require "partials/nav.php";
?>

<main class="container">
    <h2>Note page</h2>
    <li>Note Title: <?= $note['title'] ?> Note Content: <?= $note['content'] ?></li>
</main>

<?php
require "partials/script.php";
?>

<?php
require "partials/footer.php";
?>