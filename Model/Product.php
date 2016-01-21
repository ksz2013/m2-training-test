<?php

namespace Training\Test\Model;

class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return 5;
    }
}
