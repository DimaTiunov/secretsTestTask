<?php

class ordersConfig extends waAppConfig
{
    /**
     * Все фронтенд-запросы к заказам проходят через ordersOrderAccess::check(),
     * поэтому в контроллерах проверять владельца заказа не нужно.
     */
}
