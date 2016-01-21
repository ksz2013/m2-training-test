<?php
namespace Training\Test\Observer;

use Magento\Customer\Model\Logger;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LogrequestObserver implements ObserverInterface
{
    /**
     * @var Logger
     */
    protected $_logger;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');

        $pathInfo = $request->getPathInfo();
        $originalPathInfo = $request->getOriginalPathInfo();

//        $request->setModuleName('catalog');
//        $request->setControllerName('product');
//        $request->setActionName('view');
//        $request->setParams(array('id' => 1));

        /**
         * Logging can be accomplished by this ;) /var/debug.log
         *
        $this->_logger->addDebug($pathInfo);
        $this->_logger->addDebug($originalPathInfo);
        */
    }
}
