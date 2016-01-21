<?php

namespace Training\Test\Block\Product\View;

class DescriptionPlugin {

    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        $originalDescription = $originalBlock->getProduct()->getDescription();
        $originalBlock->getProduct()->setDescription('<b>Szabi Test Description PRE MESSAGE </b><br/>' . $originalDescription);
    }
}
