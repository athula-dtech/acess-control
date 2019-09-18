<?php

namespace App\Services;

use App\Repository;
use DB;
use Illuminate\Support\Facades\Auth;

class CmsService {

    private $roleRepository;

    /**
     *
     * @param \App\Repository\EmployeeRepository $empRepository
     * @param \App\Repository\DepartmentRepository $deptRepository
     * @param \App\Repository\SalaryRepository $salaryRepository
     */
    public function __construct(Repository\RoleRepository $roleRepository) {

        $this->roleRepository = $roleRepository;

    }
}
