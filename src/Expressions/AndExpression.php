<?php

namespace SecureMy\Expressions;


class AndExpression extends Expression
{
    public function __toString()
    {
        return '(' . implode(' AND ', $this->operands) . ')';
    }
}
