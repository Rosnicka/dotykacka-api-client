<?php

namespace DotykackaPHPApiClient\Object;

use DotykackaPHPApiClient\ObjectBase;

class OrderItem extends ObjectBase
{
    /** @var int */
    public $id;

    /** @var string */
    public $note;

    /** @var int */
    public $discount_percent;

    /** @var float */
    public $qty;

    /** @var float */
    public $manual_price;

    /** @var string[] */
    public $tags;
}
