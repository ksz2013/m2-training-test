<?php

namespace Training\Test\Controller\Action;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Action extends \Magento\Framework\App\Action\Action
{
    /**
     * Redirect to a custom category page ;)
     */
    public function execute()
    {
        $this->_redirect('catalog/category/view/id/10');
    }
}
