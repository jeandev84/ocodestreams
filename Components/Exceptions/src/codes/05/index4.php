<?php

class ValidationException extends Exception
{
    protected $errors;

    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }
}

class Validator
{
    public function validate()
    {
        throw new ValidationException([
            'first_name' => [
                'First name is required'
            ]
        ]);
    }
}

$validator = new Validator();

try {
    $validator->validate();
} catch (ValidationException $e) {
    echo '<pre>', print_r($e, true), '</pre>';
}