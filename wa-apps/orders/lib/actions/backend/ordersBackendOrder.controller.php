<?php

/**
 * JSON: карточка заказа для сотрудника в бэкенде.
 * URL: orders/?module=backend&action=order&id=<id>
 */
class ordersBackendOrderController extends waJsonController
{
    public function execute()
    {
        $id = waRequest::get('id', 0, 'int');

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
