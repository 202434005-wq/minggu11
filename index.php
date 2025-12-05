<?php include "header.php"; ?>
<?php require "functions.php"; ?>

<h2>Welcome!</h2>
<p>This page uses reusable components.</p>

<h2>Testing Functions</h2>

<p><?php echo greetUser("Devina"); ?></p>

<p>5 + 7 = <?php echo addNumbers(5, 7); ?></p>

<p>Average of 10, 20, 30 = <?php echo averageThree(10, 20, 30); ?></p>

<p>Formatted email: <?php echo formatEmail(" 202434005@gmail.com "); ?></p>

<?php include "footer.php"; ?>