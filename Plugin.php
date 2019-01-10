<?php namespace OBuchmann\Phone;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        App::register('Propaganistas\LaravelPhone\PhoneServiceProvider');

        Validator::replacer('phone', function($message, $attribute, $rule, $parameters) {
            return "Invalid number format for Field ".$attribute;
        });
    }
}
