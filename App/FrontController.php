<?php

namespace Training\Test\App;

class FrontController extends \Magento\Framework\App\FrontController
{

    protected $_logger;

    /**
     * @param \Magento\Framework\App\RouterList $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_logger = $logger;
        parent::__construct($routerList, $response);
    }


    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->_logger->addDebug(get_class($router));
        }
        return parent::dispatch($request);
    }
}
