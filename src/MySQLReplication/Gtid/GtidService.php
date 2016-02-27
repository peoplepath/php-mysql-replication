<?php

namespace MySQLReplication\Gtid;

class GtidService
{
    /**
     * GtidSet constructor.
     */
    public function __construct()
    {
        $this->GtidCollection = new GtidCollection();
    }

    /**
     * @param string $gtids
     * @return GtidCollection
     */
    public function makeCollectionFromString($gtids)
    {
        foreach (array_filter(explode(',', $gtids)) as $gtid)
        {
            $this->GtidCollection->add(new GtidEntity($gtid));
        }

        return $this->GtidCollection;
    }
}