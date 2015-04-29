<?php
namespace Riskio\Specification;

interface SpecificationInterface
{
    /**
     * @param  object $object
     * @return bool
     */
    public function isSatisfiedBy($object);
}
