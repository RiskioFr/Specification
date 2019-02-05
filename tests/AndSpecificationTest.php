<?php
namespace Riskio\SpecificationTest;

use Riskio\Specification\AndSpecification;
use Riskio\SpecificationTest\Fixtures\NotSatisfiedSpecification;
use Riskio\SpecificationTest\Fixtures\SatisfiedSpecification;

class AndSpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsSatisfied_ShouldReturnTrue()
    {
        $spec = new AndSpecification(
            new SatisfiedSpecification(),
            new SatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(true));
    }

    /**
     * @test
     */
    public function isSatisfiedBy_GivenOneSpecificationNotSatisfied_ShouldReturnFalse()
    {
        $spec = new AndSpecification(
            new SatisfiedSpecification(),
            new NotSatisfiedSpecification(),
            new SatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }

    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsNotSatisfied_ShouldReturnFalse()
    {
        $spec = new AndSpecification(
            new NotSatisfiedSpecification(),
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }
}
