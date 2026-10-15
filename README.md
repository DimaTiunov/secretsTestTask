# Orders: приложение для Webasyst

Учебное приложение для собеседования: заказы в личном кабинете клиента и просмотр заказов сотрудником в бэкенде.

## Структура

```
wa-apps/orders/
├── lib/
│   ├── config/        app.php, db.php, routing.php, права, конфиг приложения
│   ├── models/        ordersOrderModel, ordersOrderItemModel
│   ├── classes/       ordersOrderAccess
│   └── actions/
│       ├── frontend/  личный кабинет: список, карточка, сохранение
│       └── backend/   карточка заказа для сотрудника
├── templates/         Smarty-шаблон «Мои заказы»
└── js/orders.js       поиск по заказам (jQuery)
```

## Маршруты личного кабинета

| URL | Обработчик |
|---|---|
| `my/orders/` | `ordersFrontendMyOrdersAction`, страница «Мои заказы» |
| `my/orders/list/?q=` | `ordersFrontendOrdersController`, JSON-список с поиском |
| `my/orders/<id>/` | `ordersFrontendOrderController`, JSON-карточка заказа |
| `my/orders/<id>/save/` | `ordersFrontendOrderSaveController`, сохранение (POST) |

Бэкенд: `orders/?module=backend&action=order&id=<id>`.

## Запуск (необязательно)

Для задания запускать приложение не обязательно. Если хочется проверить вживую:

1. Скопируйте `wa-apps/orders` в `wa-apps/` любой установки Webasyst.
2. Добавьте `'orders' => true` в `wa-config/apps.php`. Таблицы создадутся из `db.php`.
3. Добавьте маршрут приложения в настройках сайта.
4. Тестовые данные: `demo-data.sql` (контакты с ID 1 и 2 должны существовать).

## Фреймворк

Исходники Webasyst: https://github.com/webasyst/webasyst-framework

## Задание

См. [TASK.md](TASK.md).
