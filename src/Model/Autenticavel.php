<?php

namespace Estudo\Banco\Model;

interface Autenticavel
{

    public function realizaAutenticação(string $senha): bool;
}
