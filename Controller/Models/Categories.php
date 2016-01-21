<?php

namespace Training\Test\Controller\Models;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Categories extends \Magento\Framework\App\Action\Action
{

    /**
     * list all categories from the rootcategory
     */
    public function execute()
    {

        $rootCategoryId = 2;

        $collectionFactory = $this->_objectManager->create('Magento\Catalog\Model\ResourceModel\Category\CollectionFactory');;
        $collection = $collectionFactory->create();
        $collection->addAttributeToSelect('name')
            ->addAttributeToFilter('path', array('like' => "1/$rootCategoryId/%"));


        echo '<pre>';
        echo "Number of categories: " .  $collection->count() . '<br/><br/>';

        foreach ($collection as $category) {
            print_r($category->getData('name'));
            echo '<br>';
        }

        exit;
    }

}
