<?php

use Aaran\Aadmin\Src\Customise;
use Aaran\Aadmin\Src\SaleEntry;

return [

    'features' => [
        Customise::todoList()
    ],

    'customise' => [
        SaleEntry::order(),

        SaleEntry::shippingAddress(),

    ],
];
