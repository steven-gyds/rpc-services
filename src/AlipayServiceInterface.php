<?php

namespace Gyds\RpcServicesIntefeces;

interface AlipayServiceInterface
{
    public function pay(string $name): string;
}