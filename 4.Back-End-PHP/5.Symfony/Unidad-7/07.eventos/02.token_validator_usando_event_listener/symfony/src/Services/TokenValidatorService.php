<?php
// src/Services/TokenValidatorService.php
namespace App\Services;

class TokenValidatorService
{
  public function validate(?string $token): bool
  {
    $authorizationType = 'Bearer';
    $desiredToken = '123a';
    $tokenEvaluated = $authorizationType.' '.$desiredToken;
    $result = ( $token === $tokenEvaluated)? true : false ;
    return $result;
  }
}