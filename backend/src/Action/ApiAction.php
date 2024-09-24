<?php

declare(strict_types=1);

namespace App\Action;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class ApiAction extends AbstractFOSRestController
{
    protected function getView(
        mixed $data = 'ok',
        int $status = Response::HTTP_OK
    ): View {
        return $this->view(
            $data,
            $status
        )->setFormat('json');
    }
}