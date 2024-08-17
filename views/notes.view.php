<?php
require "partials/header.php";
?>
<?php
require "partials/nav.php";
?>

<main class="container">
    <h2>Notes page</h2>
<?php foreach ($notes as $note): ?>
    <li> <a href="<?= "/phprouting/note/?id={$note['id']}" ?>"><?= $note['title'] ?></a> </li>
<?php endforeach; ?>
</main>

<?php
require "partials/script.php";
?>

<?php
require "partials/footer.php";
?>