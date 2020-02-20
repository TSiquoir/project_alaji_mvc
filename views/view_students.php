<?php require ('views/header.php'); ?>

<div class="container ">
    <div class="row">    
        <?php foreach($students as $student){?>
            <div class="col-md-6 student_card">
                <div class="avatar"><?= $student['avatar'] ?></div>
                <div class="row mail_row">
                    <div class="col-md-6 offset-md-6 text-right mail"><?= $student['email'] ?></div>
                </div>                
                <div class="full_name"><?= $student['full_name'] ?></div>        
            </div>
        <?php } ?>
    </div>
</div>