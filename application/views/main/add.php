<form action="/pupil/add" method="POST">

    <div class="text-center mb-4">
        <p class="h3 mb-3 font-weight-normal">Добавить ученика</p>
    </div>

    <div class="container">
        <div class="form-group">
            <input type="text" name="familyname" class="form-control" placeholder="Фамилия"
                   minlength="3" maxlength="30" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Имя"
                   minlength="2" maxlength="20" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="fathername" class="form-control" placeholder="Отчество"
                   minlength="5" maxlength="40" required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="bidth" id="bidthDay" class="form-control" placeholder="День рождения"
                   minlength="10" maxlength="10" required="" autofocus="">
        </div>

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