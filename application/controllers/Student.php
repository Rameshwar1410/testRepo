<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Student controller
 *
 * Class Student
 */
class Student extends CI_Controller
{
    /**
     * Student constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->service('student_service', '', true);
    }

    /**
     * Shows all user list
     */
	public function index()
	{
        $this->student_service->getAllStudents();
	}

	public function add()
    {
        $data = array();
        $this->student_service->saveStudentData($data);
    }
}
