<?php

declare(strict_types=1);

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

final class CreateEmployeeActionInput
{
    #[Assert\NotBlank(
        message: 'The name is required.',
    )]
    public string $name;
    
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    public string $email;
    
    #[Assert\NotBlank(
        message: 'The address is required.',
    )]
    public string $address;
    
    #[Assert\NotBlank(
        message: 'The phone is required.',
    )]
    public string $phone;
}