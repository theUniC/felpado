<?php

namespace felpado\tests;

use felpado as f;

class assoc_inTest extends felpadoTestCase
{
    /**
     * @dataProvider provideAssocIn
     */
    public function testItReplacesExistingValue($coll)
    {
        $this->assertSame(array('foo' => 'bar'), f\assoc_in($coll, ['foo'], 'bar'));
    }

    /**
     * @dataProvider provideAssocIn
     */
    public function testItShouldCreateTheDepth($coll)
    {
        $expected = array(
            'foo' => 3,
            'bar' => array(
                'ups' => array(
                    'in' => 5
                )
            ),
        );
        $this->assertSame($expected, f\assoc_in($coll, array('bar', 'ups', 'in'), 5));
    }

    /**
     * @dataProvider provideAssocIn
     */
    public function testItShouldDoNothingWithAnEmptyIn($coll)
    {
        $this->assertSame($coll, f\assoc_in($coll, array(), 'bar'));
    }

    public function provideAssocIn()
    {
        return $this->provideColl(array(
            'foo' => 3
        ));
    }
}
