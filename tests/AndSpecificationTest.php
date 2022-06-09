<?php
namespace Riskio\SpecificationTest;

use PHPUnit\Framework\TestCase;
use Riskio\Specification\AndSpecification;
use Riskio\SpecificationTest\Fixtures\NotSatisfiedSpecification;
use Riskio\SpecificationTest\Fixtures\SatisfiedSpecification;

class AndSpecificationTest extends TestCase
{
    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsSatisfied_ShouldReturnTrue(): void
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
    public function isSatisfiedBy_GivenOneSpecificationNotSatisfied_ShouldReturnFalse(): void
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
    public function isSatisfiedBy_GivenBothSpecificationsNotSatisfied_ShouldReturnFalse(): void
    {
        $spec = new AndSpecification(
            new NotSatisfiedSpecification(),
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }
}
