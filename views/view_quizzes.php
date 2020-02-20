<?php require ('views/header.php'); ?>

<div class="container">
  <table class="table table-striped">
    <tbody>
    <?php foreach ($quizzes as $quiz) { ?>
        <tr>
        <a href="http://" target="_blank" rel="noopener noreferrer"><td class="text-left"><?= $quiz['name'] ?></td> </a> 
        </tr>
      
    <?php } ?>
    </tbody>
  </table>
</div>
