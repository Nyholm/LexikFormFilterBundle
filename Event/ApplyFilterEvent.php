<?php

namespace Lexik\Bundle\FormFilterBundle\Event;

use Symfony\Component\EventDispatcher\Event;

use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;

/**
 * @author Jeremy Barthe <j.barthe@lexik.fr>
 */
class ApplyFilterEvent extends Event
{
    /**
     * @var QueryInterface $filterQuery
     */
    private $filterQuery;

    /**
     * @var string $field
     */
    private $field;

    /**
     * @var array $values
     */
    private $values;

    /**
     * Construct.
     *
     * @param QueryInterface $filterQuery
     * @param string         $field
     * @param array          $values
     */
    public function __construct(QueryInterface $filterQuery, $field, $values)
    {
        $this->filterQuery = $filterQuery;
        $this->field       = $field;
        $this->values      = $values;
    }

    /**
     * @return QueryInterface
     */
    public function getFilterQuery()
    {
        return $this->filterQuery;
    }

    /**
     * @return object
     */
    public function getQueryBuilder()
    {
        return $this->filterQuery->getQueryBuilder();
    }

    public function getField()
    {
        return $this->field;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function getAlias()
    {
        return $this->alias;
    }
}
