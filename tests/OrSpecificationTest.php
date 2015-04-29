<?php
namespace Riskio\SpecificationTest;

use Riskio\Specification\OrSpecification;
use Riskio\SpecificationTest\Fixtures\NotSatisfiedSpecification;
use Riskio\SpecificationTest\Fixtures\SatisfiedSpecification;

class OrSpecificationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsSatisfied_ShouldReturnTrue()
    {
        $spec = new OrSpecification(
            new SatisfiedSpecification(),
            new SatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(true));
    }

    /**
     * @test
     */
    public function isSatisfiedBy_GivenOneSpecificationSatisfied_ShouldReturnTrue()
    {
        $spec = new OrSpecification(
            new SatisfiedSpecification(),
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(true));
    }

    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsNotSatisfied_ShouldReturnFalse()
    {
        $spec = new OrSpecification(
            new NotSatisfiedSpecification(),
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }
}
