<?php

namespace Gyds\RpcServicesIntefeces\interfaces;

interface AlipayServiceInterface
{
    public function pay(string $name): string;
}