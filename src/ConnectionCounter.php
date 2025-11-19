<?php

namespace FaradTech\Port443Monitor;

class ConnectionCounter
{
    protected int $port;

    /**
     * Constructor of connection counter class
     * @param int $port
     */
    public function __construct(int $port = 443)
    {
        $this->port = $port;
    }

    public function count(): int
    {
        return (int)trim(`netstat -plan | grep :$this->port | wc -l`);
    }

}