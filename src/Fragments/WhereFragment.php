<?php

namespace SecureMy\Fragments;


use SecureMy\Expressions\Expression;
use SecureMy\QueryBuilder;

class WhereFragment extends QueryBuilder
{
    protected $expression;

    public function __construct(QueryBuilder $prev, Expression $expression)
    {
        parent::__construct($prev);
        $this->expression = $expression;
    }

    public function __toString()
    {
        return (string)$this->expression;
    }

    /**
     * @inheritdoc
     */
    protected function getValues()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    protected function getExpressions()
    {
        return [$this->expression];
    }
}
