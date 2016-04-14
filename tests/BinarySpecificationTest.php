<?php namespace Riskio\Specification;

use Prophecy\Argument;
use Riskio\Specification\Fixtures\SpecificationReturning;

class BinarySpecificationTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    function it_takes_two_specifications_and_a_functor()
    {
        $spec1 = $spec2 = $this->prophesize(Specification::class)->reveal();
        $functor = $this->prophesize(Function2Bool::class)->reveal();

        $spec = new BinarySpecification($spec1, $spec2, $functor);

        assertThat($spec, isInstanceOf(BinarySpecification::class));
    }

    /** @test */
    function it_passes_the_result_of_both_specifications_to_the_functor()
    {
        $first  = new SpecificationReturning(true);
        $second = new SpecificationReturning(false);

        $functor = $this->prophesize(Function2Bool::class);
        $method = $functor->apply($first->isSatisfied, $second->isSatisfied)->willReturn(true);

        $spec = new BinarySpecification($first, $second, $functor->reveal());

        $spec->isSatisfiedBy('any object');

        $method->shouldHaveBeenCalled();
    }

    /** @test */
    function it_returns_the_result_of_the_functor()
    {
        $expectedResult = true;
        $first = $second = new SpecificationReturning(true);

        $functor = $this->prophesize(Function2Bool::class);
        $functor
            ->apply(Argument::type('bool'), Argument::type('bool'))
            ->willReturn($expectedResult);

        $spec = new BinarySpecification($first, $second, $functor->reveal());

        $actualResult = $spec->isSatisfiedBy('any object');

        assertThat($actualResult, equalTo($expectedResult));
    }
}
