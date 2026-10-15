<?php

class ordersOrderItemModel extends waModel
{
    protected $table = 'orders_order_item';

    /**
     * @param int $order_id
     * @return array
     */
    public function getByOrder($order_id)
    {
        return $this->getByField('order_id', $order_id, true);
    }
}
