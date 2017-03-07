<?php

namespace OpenLoyalty\Domain\Customer;

use Assert\Assertion as Assert;
use OpenLoyalty\Domain\Identifier;

/**
 * Class PosId.
 */
class PosId implements Identifier
{
    /**
     * @var string
     */
    protected $posId;

    /**
     * PosId constructor.
     *
     * @param string $posId
     */
    public function __construct($posId)
    {
        Assert::string($posId);
        Assert::uuid($posId);

        $this->posId = $posId;
    }

    public function __toString()
    {
        return $this->posId;
    }
}
