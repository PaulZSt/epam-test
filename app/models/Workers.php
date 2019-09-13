<?php

class Workers
{

    public function getAllWorkers()
    {
        // Get all products fro DB from 'product'
        $product = R::findAll('workers');
        return $product;
    }

    public static function getWorkerName($id)
    {
        // Get all products fro DB from 'product'
        $data = R::findOne('workers', 'id = ?', [$id]);
        return $data['name'];
    }


    public function getWorkerById($id)
    {
        // Get one prodct by id from 'product'
        $data = R::findOne('workers', 'id = ?', [$id]);
        return $data;
    }

    public function createWorker($data)
    {
        // Creating new product from 'product'
        $worker = R::dispense('workers');
        $worker->name = $data['name'];
        $worker->produced_items = $data['produced_items'];
        $worker->department_id = $data['department_id'];
        $worker->net_pay = $data['net_pay'];
        $worker->url = '34534';
        $id = R::store($worker);
        return $id;
    }


    public function updateWorker($id, $data)
    {
        // Update product by ID from 'product'
        $worker = R::load('workers', $id);
        $worker->name = $data['name'];
        $worker->produced_items = $data['produced_items'];
        $worker->department_id = $data['department_id'];
        $worker->net_pay = $data['net_pay'];
        $worker->price = '555';
        $worker->url = '34534';
        $id = R::store($worker);
        return $id;
    }


}

