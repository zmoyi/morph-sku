<?php

return [
    // 金额字段精度配置
    'precision' => [
        'int' => 10, // 整型部分精度(位)
        'decimal' => 2  // 小数部分精度(位)
    ],

    'models' => [
        // 商品sku
        'sku' => \Gtd\Sku\Models\Sku::class,

        // 选项
        'option' => \Gtd\Sku\Models\Option::class,

        // 属性
        'attr' => \Gtd\Sku\Models\Attr::class,
    ],

    // 表名
    'table_names' => [
        // 商品sku
        'skus' => 'skus',

        // 选项属性
        'options' => 'options',

        // 属性键值
        'attrs' => 'attrs',

        'attr_sku' => 'attr_sku',
    ],

    'morph_name' => 'producible'
];