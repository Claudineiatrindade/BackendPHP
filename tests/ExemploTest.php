<?php

namespace Reweb\Job\Backend\Tests;

use Reweb\Job\Backend;

/**
 * Teste unit�rio da classe Reweb\Job\Backend\Exemplo
 */
class ExemploTest extends \PHPUnit_Framework_TestCase
{
    /** @var Backend\Exemplo */
    protected $exemplo;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->exemplo = new Backend\Exemplo();
    }

    /**
     * @covers Reweb\Job\Backend\Example::examplo
     */
    public function testExemplo()
    {
        $this->assertEquals('Exemplo', $this->exemplo->exemplo());
    }
}
