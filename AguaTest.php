<?php

use PHPUnit\Framework\TestCase;

require_once('Agua.php');
class AguaTest extends TestCase
{
    private $miAgua
    =
    null;
    public function setUp(): void
    {
        $this->miAgua = new Agua();
    }
    public function testSolido(): void
    {
        foreach (range(-273, 0) as $temperatura) {
            $estado =
                $this->miAgua->getEstado($temperatura);
            $this->assertSame('Sólido', $estado, "Temperatura $temperatura 
no es sólida");
        }
    }
    public function testLiquida(): void
    {
        foreach (range(1, 99) as $temperatura) {
            $estado = $this->miAgua->getEstado($temperatura);
            $this->assertSame('Líquido', $estado, "Temperatura $temperatura no es Líquido");
        }
    }
}