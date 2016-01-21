<?php
namespace Training\Test\Controller;

/**
 * Training Controller NoRouteHandler
 * redirects users to home page if page was not found
 */
class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    /**
     * Check and process no route request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName = 'cms';
        $actionPath = 'index';
        $actionName = 'index';

        $request->setModuleName($moduleName)->setControllerName($actionPath)->setActionName($actionName);

        return true;
    }
}
