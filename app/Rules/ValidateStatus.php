<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateStatus implements Rule
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
    public function passes($attribute, $value)
    {
        $validValues = [0,1,true,false];

        return \in_array($value, $validValues);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute field is not correct';
    }
}