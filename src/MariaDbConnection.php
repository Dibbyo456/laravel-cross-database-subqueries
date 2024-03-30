<?php

namespace Hoyvoy\CrossDatabase;

class MariaDbConnection extends \Illuminate\Database\MariaDbConnection implements CanCrossDatabaseShazaamInterface
{
    /**
     * Get the default query grammar instance.
     *
     * @return \Illuminate\Database\Query\Grammars\MySqlGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new \Hoyvoy\CrossDatabase\Query\Grammars\MariaDbGrammar());
    }
}
