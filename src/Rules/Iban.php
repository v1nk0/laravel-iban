<?php

namespace V1nk0\LaravelIban\Rules;

use Illuminate\Contracts\Validation\Rule;
use V1nk0\LaravelIban\Iban as Validator;

class Iban implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) : bool
    {
        return (new Validator)->verify($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'IBAN invalid';
    }
}
