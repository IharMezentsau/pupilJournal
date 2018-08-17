<form action="/pupil/update" method="POST" class="form-signin">

    <div class="text-center mb-4">
        <p class="h3 mb-3 font-weight-normal">Редактировать ученика</p>
        <p class="h3 mb-3 font-weight-normal"><?php echo $vars['name'] . ' ' .
                $vars['familyname'] . ' ' .  $vars['fathername']?></p>
    </div>
    <div class="container">
        <div class="form-group">
            <input type="text" name="name" class="form-control"
                   value="<?php echo $vars['name']?>" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="familyname" class="form-control"
                   value="<?php echo $vars['familyname']?>" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="fathername" class="form-control"
                   value="<?php echo $vars['fathername']?>" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="bidth" class="form-control"
                   value="<?php echo $vars['bidth']?>" required="" autofocus="">
        </div>

        <span>
            <button class="btn btn-secondary" type="submit">Сохранить</button>
            <a class="btn btn-secondary float-right" href="/">Отменить</a>
        </span>
    </div>
</form>