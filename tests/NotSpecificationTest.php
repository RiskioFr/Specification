<?php
namespace Riskio\SpecificationTest;

use PHPUnit\Framework\TestCase;
use Riskio\Specification\NotSpecification;
use Riskio\SpecificationTest\Fixtures\NotSatisfiedSpecification;
use Riskio\SpecificationTest\Fixtures\SatisfiedSpecification;

class NotSpecificationTest extends TestCase
{
    /**
     * @test
     */
    public function isSatisfiedBy_GivenSpecificationsSatisfied_ShouldReturnFalse(): void
    {
        $spec = new NotSpecification(
            new SatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(false));
    }

    /**
     * @test
     */
    public function isSatisfiedBy_GivenSpecificationNotSatisfied_ShouldReturnFalse(): void
    {
        $spec = new NotSpecification(
            new NotSatisfiedSpecification()
        );

        $isSatisfied = $spec->isSatisfiedBy('foo');

        $this->assertThat($isSatisfied, $this->equalTo(true));
    }
}
