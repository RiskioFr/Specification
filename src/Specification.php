<?php namespace Riskio\Specification;

interface Specification
{
    function isSatisfiedBy($object) : bool;
}
