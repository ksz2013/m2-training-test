<?php

namespace Training\Test\Controller\Product;

/**
 *
 * Used as preference rewrite and also as plugin rewrite for Catalog/product/View
 *
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class View extends \Magento\Catalog\Controller\Product\View
{
    /*
     * Rewrite with preference
     */
//    public function execute() {
//        echo "ONE"; exit;
//    }


    /**
     * Plugin rewrites can be accomplished this way
     */

//    public function beforeExecute() {
////        echo "BEFORE<BR>"; exit;
//    }

//    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result) {
////        echo "AFTER"; exit;
////        return $result;
//    }

}
