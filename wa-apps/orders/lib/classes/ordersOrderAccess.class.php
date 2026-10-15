<?php

/**
 * Проверка доступа клиента к заказу.
 */
class ordersOrderAccess
{
    /**
     * @param array $order
     * @return bool
     */
    public static function check($order)
    {
        // TODO: перенести проверку из старого модуля личного кабинета
        return true;
    }
}
