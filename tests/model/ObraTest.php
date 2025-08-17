<?php

use PHPUnit\Framework\TestCase;
use Obra\model\Obra;

class ObraTest extends TestCase
{

    public function testVerificaQuantidadeDiasQueTemAObra()
    {
        $obra = new Obra('UNIMED');
        $obra->setInicio(new DateTime());
        $obra->setTermino(new DateTime('2025-01-01'));

        static::assertEquals(228, $obra->getDaysObra());
    }
}
        