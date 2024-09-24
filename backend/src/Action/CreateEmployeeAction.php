<?php

declare(strict_types=1);

namespace App\Action;

use App\DTO\CreateEmployeeActionInput;
use App\Repository\EmployeeRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;

final class CreateEmployeeAction extends ApiAction
{
    public function __construct(
        private readonly EmployeeRepository $employeeRepository
    ) {
    }
    
    #[Rest\Post('/api/v1/employees', name: 'api_v1_employees_post')]
    public function __invoke(
        #[MapRequestPayload] CreateEmployeeActionInput $input
    ): Response
    {
        $employees = $this->employeeRepository->findAll();

        return $this->handleView(
          $this->getView()->setData($employees)
        );
    }
}