<h2>Payroll</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>Worker name</th>
            <th>sort:  <a href="/index/department_id">Department</a></th>
            <th>sort:  <a href="/index/produced">Produced Items</a></th>
            <th>sort: <a href="/index/salary">Salary</a></th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?
        foreach ($payrolls as $payroll) {
            ?>
            <tr>
                <td><?=$payroll['name'];?></td>
                <td><?=$payroll['department_name'];?></td>
                <td><?=$payroll['produced'];?></td>
                <td><?=$payroll['salary'];?></td>
                <td>
                    <a href="/update/<?=$payroll['id'];?>">Edit</a>
                </td>
            </tr>
            <?
        }
        ?>
        </tbody>
    </table>
</div>