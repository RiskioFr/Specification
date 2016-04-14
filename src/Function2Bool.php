<?php namespace Riskio\Specification;

interface Function2Bool
{
    public function apply(bool $op1, bool $op2): bool;
}
