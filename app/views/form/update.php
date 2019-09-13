<div id="message"></div>

<script>
    function setSalaryProduced() {
        var maxSalary,produced,producedInt,depId,productPrice,salary;
        maxSalary = 1500;
        produced = document.getElementById("produced").value;
        producedInt = parseInt(produced);
        depId = document.getElementById("department_id");
        productPrice = depId.options[depId.selectedIndex].getAttribute('data-id');
        if (/^\d+$/.test(produced)) {
            salary = productPrice * producedInt * 0.15;
            document.getElementById('message').innerHTML = '';
            if (salary > maxSalary) {
                document.getElementById('message').innerHTML = 'Salary for worker is ' + salary + '. But max salary is for workes ' + maxSalary;
                salary = maxSalary;
            }
            document.getElementById('salary').value = salary;
        } else {
            if (produced.length > 0) {
                document.getElementById('message').innerHTML = 'Incorrect produced value';
                document.getElementById('salary').value = '';
            }
        }
    }
</script>

<section class="section section10">
    <div class="container">
        <div class="order">
            <form class="order_form" method="post" action="">
                <h4>Create payroll:</h4>
                <div class="col-sm-10">
                    <?php foreach ($messages as $message) : ?>
                        <div class="err"> <?= $message ?> </div>
                    <? endforeach; ?>
                </div>
                <div class="form-group">
                    <label for="worker_id" class="col-sm-2 control-label">Worker</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="data[worker_id]" id="worker_id" disabled>
                            <? foreach($workers as $worker): ?>
                                <option  value="<?= $worker['id'] ?>" <?= ($worker['id'] == $payroll['worker_id']) ? 'selected' :  ''; ?>><?= $worker['name'] ?></option>
                            <? endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="department_id" class="col-sm-2 control-label">Department</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="data[department_id]" onchange="setSalaryProduced()" id="department_id" disabled>
                            <? foreach($departments as $department): ?>
                                <option data-id="<?= $department['production_price'] ?>" value="<?= $department['id'] ?>" <?= ($department['id'] == $payroll['department_id']) ? 'selected' :  ''; ?>>
                                    <?= $department['department_name'] ?>
                                </option>
                            <? endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="produced" class="col-sm-2 control-label">Produced items</label>
                    <div class="col-sm-10">
                        <input type="text" onchange="setSalaryProduced()" name="data[produced]" id="produced" class="form-control"
                               value="<?= $payroll['produced'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="salary" class="col-sm-2 control-label">Salary</label>
                    <div class="col-sm-10">
                        <input type="text" name="data[salary]" id="salary" class="form-control"
                               value="<?= $payroll['salary'] ?> " readonly>
                    </div>
                </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
        </form>

    </div>
</section>
