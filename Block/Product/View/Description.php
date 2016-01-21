<?php

namespace Training\Test\Block\Product\View;

class Description extends \Magento\Catalog\Block\Product\View\Description {

    protected function _beforeToHtml() {
        echo $this->getTemplate();
        print_r($this->getProduct()->getDescription());
    }

//    public function toHtml() {
//        return 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
//    }

}
