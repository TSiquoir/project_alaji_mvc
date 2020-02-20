<?php require ('views/header.php'); ?>

<div class="container">
  <table class="table table-striped">
    <tbody>
    <?php foreach ($quizzes as $quiz) { ?>
      <a href="http://" target="_blank" rel="noopener noreferrer">
        <tr>
          <td class="text-left"><?= $quiz['name'] ?></td>
        </tr>
      </a>  
    <?php } ?>
    </tbody>
  </table>
</div>
