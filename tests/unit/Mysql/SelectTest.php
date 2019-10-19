<?php

namespace App\Mysql;

class SelectTest extends \PHPUnit\Framework\TestCase
{
    public function testSelectSemFiltro()
    {
        $select = new Select();
        $select->table('pages');
        $actual = $select->getSQL();
        $expected = 'SELECT * FROM pages';
        $this->assertEquals($expected, $actual);
    }

    public function testSelectEspecificandoOsCampos()
    {
        $select = new Select();
        $select->table('users');
        $select->fields(['name', 'email']);
        $actual = $select->getSQL();
        $expected = 'SELECT name, email FROM users';
        $this->assertEquals($expected, $actual);
    }
}


