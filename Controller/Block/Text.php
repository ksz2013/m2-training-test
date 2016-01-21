<?php

namespace Training\Test\Controller\Block;

/**
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Text extends \Magento\Framework\App\Action\Action
{

    /**
     * render a block directly from the controller
     */
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("Hello world from text block !");

        $this->getResponse()->appendBody($block->toHtml());
    }

}
