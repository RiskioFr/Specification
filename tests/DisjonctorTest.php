<?php namespace Riskio\Specification;

class DisjonctorTest extends \PHPUnit_Framework_TestCase
{
    function orTruthTable()
    {
        return [
            [true,  true,  true ],
            [true,  false, true ],
            [false, true,  true ],
            [false, false, false]
        ];
    }

    /**
     * @test
     * @dataProvider orTruthTable
     */
    function it_behaves_like_an_or_truth_table(bool $op1, bool $op2, bool $expected)
    {
        $disjonctor = new Disjonctor;

        $result = $disjonctor->apply($op1, $op2);

        assertThat($result, equalTo($expected));
    }
}
