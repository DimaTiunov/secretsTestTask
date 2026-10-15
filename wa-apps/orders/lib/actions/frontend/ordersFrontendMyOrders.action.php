<?php

/**
 * Страница «Мои заказы» в личном кабинете.
 * URL: my/orders/
 */
class ordersFrontendMyOrdersAction extends waViewAction
{
    public function execute()
    {
        $order_model = new ordersOrderModel();
        $orders = $order_model->getByContact(wa()->getUser()->getId());

        $this->view->assign('orders', $orders);
    }
}
