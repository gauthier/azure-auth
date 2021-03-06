<?php

namespace LouisSicard\AzureAuth\Classes;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

interface AzureUserProvider extends UserProviderInterface
{
  function getSupportedClass();
  function persist(UserInterface $user);

}