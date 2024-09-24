<?php

declare(strict_types=1);

namespace App\Action;

use App\Repository\EmployeeRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

final class GetEmployeesAction extends ApiAction
{
    public function __construct(
        private readonly EmployeeRepository $employeeRepository
    ) {
    }
    
    #[Rest\Get('/api/v1/employees', name: 'api_v1_employees_get')]
    public function __invoke(): Response
    {
        $employees = $this->employeeRepository->findAll();

        return $this->handleView(
          $this->getView()->setData($employees)
        );
    }
}