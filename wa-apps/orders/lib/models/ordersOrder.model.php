<?php

class ordersOrderModel extends waModel
{
    protected $table = 'orders_order';

    /**
     * Заказы клиента с поиском по названию.
     *
     * @param int $contact_id
     * @param string $search
     * @return array
     */
    public function getByContact($contact_id, $search = '')
    {
        $sql = "SELECT * FROM {$this->table}
                WHERE contact_id = ".(int) $contact_id;

        if ($search) {
            $sql .= " AND title LIKE '%".$search."%'";
        }

        $sql .= " ORDER BY id DESC";

        return $this->query($sql)->fetchAll();
    }
}
