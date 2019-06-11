<?php

namespace DotykackaPHPApiClient\Object;

use DotykackaPHPApiClient\ObjectBase;

class AddItemRequest extends ObjectBase
{
    /** @var string */
    public $action;

    /** @var OrderItem[] */
    public $items;

    /** @var int */
    public $order_id;

    /** @var string */
    public $webhook;

    // ugly fix
    public function __toString()
    {
        $arr = [];
        foreach ($this as $k => $v) {
            if (!(null === $v)) {
                $field = $this->mapPropertyToField($k);

                if ($k === 'items') {
                    $items = [];
                    foreach ($v as $item) {
                        $itemsArr = [];
                        foreach ($item as $kk => $vv) {
                            if (!(null === $vv)) {
                                $subField = $this->mapPropertyToField($kk);
                                $itemsArr[$subField] = $vv;
                            }
                        }
                        $items[] = $itemsArr;
                    }
                    $arr[$field] = $items;

                } else {
                    $arr[$field] = $v;
                }
            }
        }

        return json_encode($arr);
    }
}
