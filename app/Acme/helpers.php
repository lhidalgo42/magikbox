<?php

/*
|--------------------------------------------------------------------------
| Defines the error message span
|--------------------------------------------------------------------------
|
*/
function errors_for($attribute, $errors)
{
    return $errors->first($attribute, '<span class="label label-danger">:message</span>');
}