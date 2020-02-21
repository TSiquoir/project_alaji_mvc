<?php require ('views/header.php'); ?>

<div class="container">
  <table class="table table-striped">
    <tbody>
    <?php foreach ($quizzes as $quiz) { ?>
        <tr>
          <td class="text-left">
            <a href="candidats?idquiz=<?php echo $quiz['id']; ?>" rel="noopener noreferrer">
              <?= $quiz['name'] ?>
            </a>
          </td> 
        </tr>
      
    <?php } ?>
    </tbody>
  </table>
</div>
