<?php

/**
 * JSON: список заказов текущего клиента с поиском по названию.
 * URL: my/orders/list/?q=...
 */
class ordersFrontendOrdersController extends waJsonController
{
    public function execute()
    {
        $search = waRequest::get('q', '');

        $order_model = new ordersOrderModel();
        $item_model = new ordersOrderItemModel();

        $orders = $order_model->getByContact(wa()->getUser()->getId(), $search);

        $result = array();
        foreach ($orders as $order) {
            $total = 0;
            foreach ($item_model->getByOrder($order['id']) as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            $result[] = array(
                'id'     => $order['id'],
                'title'  => $order['title'],
                'status' => $order['status'],
                'total'  => round($total, 2),
            );
        }

        $this->response = $result;
    }
}
