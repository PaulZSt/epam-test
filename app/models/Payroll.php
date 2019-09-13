<?php

class Payroll
{

    public function getAllPayrolls($sort)
    {
        // Get all workers fro DB from 'worker'
        if ($sort != null) {
            $query = 'SELECT * FROM payroll JOIN departments, workers WHERE departments.id = payroll.department_id AND workers.id = payroll.worker_id ORDER BY  payroll.' . $sort;
        } else {
            $query = 'SELECT * FROM payroll JOIN departments, workers WHERE departments.id = payroll.department_id AND workers.id = payroll.worker_id';
        }
        $data = R::getAll($query);
        return $data;
    }

 
    public function getPayrollById($id)
    {
        // Get one prodct by id from 'product'
        $data = R::findOne('payroll', 'worker_id = ?', [$id]);
        return $data;
    }

    public function createPayroll($data)
    {
        // Creating new product from 'product'
        $payroll = R::dispense('payroll');
        $payroll->worker_id = $data['worker_id'];
        $payroll->produced = $data['produced'];
        $payroll->department_id = $data['department_id'];
        $payroll->salary = $data['salary'];
        $id = R::store($payroll);
        return $id;
    }


    public function updatePayroll($id, $data, $payrol_db)
    {
        // Update product by ID from 'product'
        $payroll = R::load('payroll', $id);
        $payroll->worker_id = $payrol_db['worker_id'];
        $payroll->produced = $data['produced'];
        $payroll->department_id = $payrol_db['department_id'];
        $payroll->salary = $data['salary'];
        $id = R::store($payroll);
        return $id;
    }



}

