<?php

/**
 * JSON: карточка заказа в личном кабинете.
 * URL: my/orders/<id>/
 *
 * Доступ к заказу проверяется в ordersOrderAccess (см. ordersConfig).
 */
class ordersFrontendOrderController extends waJsonController
{
    public function execute()
    {
        $id = waRequest::param('id', 0, 'int');

        $order_model = new ordersOrderModel();
        $item_model = new ordersOrderItemModel();

        $order = $order_model->getById($id);
        if (!$order) {
            throw new waException('Заказ не найден', 404);
        }

        $order['items'] = $item_model->getByOrder($id);

        $this->response = $order;
    }
}
