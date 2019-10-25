<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'lexik_jwt_authentication.encoder' shared service.

include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/JWTEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/HeaderAwareJWTEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/LcobucciJWTEncoder.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/JWSProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/LcobucciJWSProvider.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

return $this->services['lexik_jwt_authentication.encoder'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder(new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'openssl', 'RS256', 172000, 0));
