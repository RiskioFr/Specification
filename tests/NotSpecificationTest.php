<?php namespace Riskio\Specification;

use Riskio\Specification\Fixtures\SpecificationReturning;

class NotSpecificationTest extends \PHPUnit_Framework_TestCase
{
    function notTruthTable()
    {
        return [
            [true, false],
            [false, true]
        ];
    }

    /**
     * @test
     * @dataProvider notTruthTable
     */
    function it_negates_composed_specification(bool $isSatisfied, bool $result)
    {
        $spec = new NotSpecification(new SpecificationReturning($isSatisfied));

        $isSatisfied = $spec->isSatisfiedBy('foo');

        assertThat($isSatisfied, equalTo($result));
    }
}
