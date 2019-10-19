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
}


