# ONE WAYS SMS - SMS API Package

This Library allows to Send SMS using ONE WAYS SMS Service Provider

You need the access details that were provided to you to make any calls to the API.
For exact parameters in the data mobile phone to send and sms, refer to your offline documentation.

If you do not know what all this is about, then you probably do not need or want this library.

# Configuration

## .env file

Configuration via the .env file currently allows the following variables to be set:

- SMS\_URL='http://api.endpoint/url/'
- SMS\_USERNAME=demouser 
- SMS\_PASSWORD=demoPassword

## Available functions

```php
SMS::sendSMS($mobile_phone, $sms)
```

This function tries to retrieve boolean true or false if sms already send or not,

**FOR LARAVEL SETUP CONFIGURATION:-**

- Do composer require mohdnazrul/laravel-sms
```php
   composer require mohdnazrul/laravel-sms
```
- Add this syntax inside config/app.php
```php
   ....
   'providers'=> [
     .
     MohdNazrul\SMSLaravel\SMSServiceProvider::class,
     .
   ],
   'aliases' => [
      .
      'SMSApi' => MohdNazrul\SMSLaravel\SMSApiFacade::class,
      '
    ],
``` 
- Do publish as below
```php
php artisan vendor:publish --tag=sms
```
- You can edit the default configuration SMS inside config/sms.php based your account as below
```php
return [
    'serviceUrl'    =>  env('SMS_URL','http://localhost'),
    'username'      =>  env('SMS_USERNAME','username'),
    'password'      =>  env('SMS_PASSWORD','password')
];
``` 







     
