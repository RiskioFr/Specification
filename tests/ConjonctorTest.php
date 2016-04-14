<?php namespace Riskio\Specification;

class ConjonctorTest extends \PHPUnit_Framework_TestCase
{
    function andTruthTable()
    {
        return [
            [true,  true,  true ],
            [true,  false, false],
            [false, true,  false],
            [false, false, false]
        ];
    }

    /**
     * @test
     * @dataProvider andTruthTable
     */
    function it_behaves_like_an_and_truth_table(bool $op1, bool $op2, bool $expected)
    {
        $conjonctor = new Conjonctor;

        $result = $conjonctor->apply($op1, $op2);

        assertThat($result, equalTo($expected));
    }
}
