<form action="/pupil/update" method="POST">

    <div class="text-center mb-4">
        <p class="h3 mb-3 font-weight-normal">Редактировать ученика</p>
        <p class="h3 mb-3 font-weight-normal"><?php echo $vars['familyname'] . ' ' .
                $vars['name'] . ' ' .  $vars['fathername'];?></p>
    </div>
    <div class="container">
        <div class="form-group">
            <input type="text" name="familyname" class="form-control"
                   minlength="3" maxlength="30" value="<?php echo $vars['familyname'];?>"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="name" class="form-control"
                   minlength="2" maxlength="20" value="<?php echo $vars['name'];?>"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="fathername" class="form-control"
                   minlength="5" maxlength="40" value="<?php echo $vars['fathername'];?>"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="bidth" id="bidthDay" class="form-control"
                   minlength="10" maxlength="10" value="<?php echo $vars['bidth'];?>"
                   required="" autofocus="">
        </div>

        <input name="id" type="hidden" value="<?php echo $vars['id'];?>">

        <span>
            <button class="btn btn-secondary" type="submit">Сохранить</button>
            <a class="btn btn-secondary float-right" href="/">Отменить</a>
        </span>
    </div>
</form>
<?php if (isset($vars['error'])) : ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $vars['error'];?>
    </div>
<?php endif;?>