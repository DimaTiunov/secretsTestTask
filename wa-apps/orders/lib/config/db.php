<?php

return array(
    'orders_order' => array(
        'id'              => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'contact_id'      => array('int', 11, 'null' => 0),
        'title'           => array('varchar', 255, 'null' => 0),
        'status'          => array('varchar', 32, 'null' => 0, 'default' => 'new'), // new | paid | cancelled
        'create_datetime' => array('datetime', 'null' => 0),
        ':keys'           => array(
            'PRIMARY'    => 'id',
            'contact_id' => 'contact_id',
        ),
    ),
    'orders_order_item' => array(
        'id'       => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'order_id' => array('int', 11, 'null' => 0),
        'name'     => array('varchar', 255, 'null' => 0),
        'price'    => array('decimal', "15,2", 'null' => 0, 'default' => '0.00'),
        'quantity' => array('int', 11, 'null' => 0, 'default' => '1'),
        ':keys'    => array(
            'PRIMARY'  => 'id',
            'order_id' => 'order_id',
        ),
    ),
);
