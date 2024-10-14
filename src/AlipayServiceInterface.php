<?php

namespace Gyds\RpcServicesInterface;

interface AlipayServiceInterface
{
    public function pay(string $name): string;
}