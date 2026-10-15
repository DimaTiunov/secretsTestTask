<?php

class ordersRightConfig extends waRightConfig
{
    public function init()
    {
        // Сотрудник может просматривать заказы клиентов в бэкенде
        $this->addItem('view_orders', 'Просмотр заказов клиентов', 'checkbox');
    }
}
