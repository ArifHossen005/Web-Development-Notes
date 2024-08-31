  "firstName": "Arif Hossen",
    "lastName" : "Sohag",
    "email" : "arifsohag2500@gmail.com",
    "mobile":"01510515",
    "password" : "12345678"



iss = issuer name
iat = creation time 

============jwt token ===========
<?php


namespace App\Helper;


use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Exception;

class JWTToken
{

    function CreateToken(string $userEmail): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel-token',
            'iat' => time(),
            'exp' => time() + 60 * 60, // Token expires in 1 hour
            'userEmail' => $userEmail
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    function VerifyToken($token)
    {
        try {

            $key = env('JWT_KEY');
            $decode = JWT::decode($token,new Key($key,'HS256'));
            return   $decode->userEmail;
        }
        catch(Exception $e)
            
        {
            return   'unauthorized';

        }
        
        
       
    }
}
 

Email===otp======

php artisan make:mail OTPMail (eta banalam otp asbe tay )

mail dewaer jonno smtp lagbe 
password reset er jonno ekta middleware lagbe 







