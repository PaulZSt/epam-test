<?php


class FormController extends Controller
{
    //action for form/index
    function actionIndex($sort = null)
    {

        $payroll = new Payroll();
        $payrolls = $payroll->getAllPayrolls($sort);
        print($payrolls);
        //$products = 'My first product';
        $view = new View();
        $view->render('form/index', array('payrolls' => $payrolls));
    }

    // action for form/create
    function actionCreate()
    {
        $payroll_data['worker_id'] = '';
        $payroll_data['department_id'] = '';
        $payroll_data['produced'] = '';
        $payroll_data['salary'] = '';
        $messages[] = '';

        $workers = new Workers();
        $workers = $workers->getAllWorkers();
        $departments = new Departments();
        $departments = $departments->getAllDepartments();
        // Get worker data from DB
        if (isset($_POST['submit'])) {
            $payroll = new Payroll();
            $id = $payroll->createPayroll($_POST['data']);
            // If have id from DB and no errors go to redirect
            if (!empty($id)) {
                //$messages[] = 'Worker payroll succesfully created';
                Redirect::go('/');
            } else {
                // getting all errors from validation
                $messages[] = 'Some error with form validation';
                $payroll_data = $_POST['data'];

            }
        }

        $view = new View();
        $view->render('form/create', array('payroll' => $payroll_data, 'workers' => $workers, 'departments' => $departments, 'messages' => $messages));
    }


    // action for form/update
    function actionUpdate($id)
    {

        $payroll = new Payroll();
        $payroll_data = $payroll->getPayrollById($id);
        $messages[] = '';
        $workers = new Workers();
        $workers = $workers->getAllWorkers();
        $departments_model = new Departments();
        $departments = $departments_model->getAllDepartments();
        if (isset($_POST['submit'])) {
            $payroll = new Payroll();
            $id = $payroll->updatePayroll($id, $_POST['data'], $payroll_data);
            // If have id from DB and no errors go to redirect
            if (!empty($id)) {
                //Redirect::go('/');
            } else {
                // getting all errors from validation
                $messages[] = 'Some error with form validation';
            }
        }
        $view = new View();
        $view->render('form/update', array('payroll' => $payroll_data, 'workers' => $workers, 'departments' => $departments, 'messages' => $messages));
    }


    function actionDelete($id)
    {

    }

}

