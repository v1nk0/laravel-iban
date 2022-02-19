<?php

namespace V1nk0\LaravelIban;

use PHP_IBAN\IBAN as Validator;

class Iban
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator;
    }

    /**
     * @param $iban
     * @return bool
     */
    public function verify($iban) : bool
    {
        return $this->validator->verify($iban);
    }
}
