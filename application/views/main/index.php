<span>
    <p class="h3 font-weight-normal float-left">Школьный журнал</p>
    <a class="btn btn-secondary float-right" href="/add">Добавить ученика</a>
</span>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ФИО</th>
            <th>День рождения</th>
            <th>Возраст</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pupils as $value): ?>
        <tr>
            <td><?php echo ($value['familyname'] . ' ' .
                            $value['name'] . ' ' .
                            $value['fathername']); ?></td>
            <td><?php echo $value['bidth']; ?></td>
            <td><?php echo 'test'; ?></td>
            <td>
                <a href="/update/<?php echo $value['id']; ?>" class="btn btn-secondary">
                    Редактировать
                </a>
            </td>
            <td>
                <a href="/delete/<?php echo $value['id']; ?>" class="btn btn-secondary">
                    Удалить
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
