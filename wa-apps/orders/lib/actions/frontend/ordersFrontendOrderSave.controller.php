<?php

/**
 * JSON: сохранение заказа из личного кабинета.
 * URL: my/orders/<id>/save/ (POST)
 *
 * Доступ к заказу проверяется в ordersOrderAccess (см. ordersConfig).
 */
class ordersFrontendOrderSaveController extends waJsonController
{
    public function execute()
    {
        $id = waRequest::param('id', 0, 'int');

        waRequest::validate(array(
            'title' => 'required|string|max:255',
        ));

        $order_model = new ordersOrderModel();
        $order_model->updateById($id, waRequest::post());

        $this->response = $order_model->getById($id);
    }
}
