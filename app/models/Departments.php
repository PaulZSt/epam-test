<?php

class Departments
{

    public function getAllDepartments()
    {
        // Get all products fro DB from 'product'
        $data = R::findAll('departments');
        return $data;

    }


    public function getDepartmentbyId($id)
    {
        // Get one prodct by id from 'product'
        $data = R::findOne('departments', 'id = ?', [$id]);
        return $data;
    }
}