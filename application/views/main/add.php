<form action="/pupil/add" method="POST">

    <div class="text-center mb-4">
        <p class="h3 mb-3 font-weight-normal">Добавить ученика</p>
    </div>

    <div class="container">
        <div class="form-group">
            <input type="text" name="familyname" class="form-control" placeholder="Фамилия"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Имя"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="fathername" class="form-control" placeholder="Отчество"
                   required="" autofocus="">
        </div>

        <div class="form-group">
            <input type="text" name="bidth" class="form-control" placeholder="День рождения"
                   required="" autofocus="">
        </div>

        <span>
            <button class="btn btn-secondary" type="submit">Сохранить</button>
            <a class="btn btn-secondary float-right" href="/">Отменить</a>
        </span>
    </div>
</form>