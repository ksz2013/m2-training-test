<?php
namespace Training\Test\Observer;

use Magento\Customer\Model\Logger;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class LogpageoutputObserver implements ObserverInterface
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
        return $this;;
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->_logger->addDebug("--------\n\n\n BODY \n\n\n ". $body);
    }
}
