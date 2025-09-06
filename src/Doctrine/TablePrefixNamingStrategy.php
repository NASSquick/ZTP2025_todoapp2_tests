<?php

/**
 * This file is part of the TODO app project.
 *
 * (c) Hlib Ivanov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Doctrine;

use Doctrine\ORM\Mapping\UnderscoreNamingStrategy;

/**
 * TablePrefixNamingStrategy.
 *
 * Custom naming strategy for Doctrine that adds a prefix to table names.
 */
class TablePrefixNamingStrategy extends UnderscoreNamingStrategy
{
    private string $prefix;

    /**
     * Constructor.
     *
     * @param string $prefix the table prefix to use
     */
    public function __construct(string $prefix = 'test_')
    {
        parent::__construct(self::CASE_LOWER, true);
        $this->prefix = $prefix;
    }

    /**
     * Converts a class name to a table name with the prefix applied.
     *
     * @param string $className the class name to convert
     *
     * @return string the prefixed table name
     */
    public function classToTableName($className): string
    {
        return $this->prefix.parent::classToTableName($className);
    }
}
