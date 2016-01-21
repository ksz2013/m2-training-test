<?php

namespace Training\Test\Controller\Block;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * render a block directly from the controller
     */
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Training\Test\Block\Test');

        $this->getResponse()->appendBody($block->toHtml());
    }

}
