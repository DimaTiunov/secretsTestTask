-- Тестовые данные. Контакты 1 и 2 — клиенты.

INSERT INTO orders_order (id, contact_id, title, status, create_datetime) VALUES
(1, 1, 'Ноутбук для офиса', 'new', NOW()),
(2, 1, 'Канцелярия', 'paid', NOW()),
(3, 2, '<img src=x onerror="alert(document.cookie)">', 'new', NOW());

INSERT INTO orders_order_item (order_id, name, price, quantity) VALUES
(1, 'Ноутбук', 89990.00, 1),
(1, 'Сумка', 2490.90, 1),
(2, 'Ручка', 0.10, 3),
(2, 'Блокнот', 0.20, 1),
(3, 'Монитор', 24990.00, 2);
