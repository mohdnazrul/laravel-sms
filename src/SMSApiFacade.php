<?php
/**
 * API Library for SMS - Using One Way SMS.
 * User: Mohd Nazrul Bin Mustaffa
 * Date: 25/04/2018
 * Time: 11:16 AM
 */

namespace MohdNazrul\SMSLaravel;

use Illuminate\Support\Facades\Facade;


class SMSApiFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'SMSApi'; }
}