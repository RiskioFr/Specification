<?php
namespace Riskio\SpecificationTest;

use PHPUnit\Framework\TestCase;
use Riskio\Specification\OrSpecification;
use Riskio\SpecificationTest\Fixtures\NotSatisfiedSpecification;
use Riskio\SpecificationTest\Fixtures\SatisfiedSpecification;

class OrSpecificationTest extends TestCase
{
    /**
     * @test
     */
    public function isSatisfiedBy_GivenBothSpecificationsSatisfied_ShouldReturnTrue(): void
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
    public function isSatisfiedBy_GivenOneSpecificationSatisfied_ShouldReturnTrue(): void
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
    public function isSatisfiedBy_GivenBothSpecificationsNotSatisfied_ShouldReturnFalse(): void
    {
        $spec = new OrSpecification(
            new NotSatisfiedSpecification(),
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }
}
