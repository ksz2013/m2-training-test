<?php

namespace Training\Test\Controller\Models;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Stores extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {

        /**
         * Collection creation directly from objectmanager
         */
        //$collection = $this->_objectManager->create('Magento\Store\Model\ResourceModel\Store\Collection');;

        /**
         *
         * it can be created in this way as well
         */
        $collectionFactory = $this->_objectManager->create('Magento\Store\Model\ResourceModel\Store\CollectionFactory');;
        $collection = $collectionFactory->create();

        echo "Number of stores: " .  $collection->count() . '<br/><br/>';

        foreach ($collection as $store) {
            echo get_class($store);
            print_r($store->getData());
            echo '<br/>';
            echo 'rootCategoryId: ' . $store->getRootCategoryId() . '<br/>' ;
        }

        exit;
    }

}
