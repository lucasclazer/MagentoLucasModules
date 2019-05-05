<?php

namespace MagentoLucasModules\HelloWorldIp\Controller\Page;

class View extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $resultJsonFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     */
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
       $this->resultJsonFactory = $resultJsonFactory;
       parent::__construct($context);
    }
    /**
     * View  page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
            //IDEs utilizadas
            //VSCode - inicialmente
            //PHPStorm


            //Configuração utilizada
            //https://bitnami.com/stack/magento
            // vmware / Debian
            // Php 7.1 + Zend + Xdebug
                // PHP 7.1.27 (cli) (built: Apr  3 2019 17:37:46) ( NTS )
                // Copyright (c) 1997-2018 The PHP Group
                // Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies
                // with Zend OPcache v7.1.27, Copyright (c) 1999-2018, by Zend Technologies
                // with Xdebug v2.7.1, Copyright (c) 2002-2019, by Derick Rethans
            // xdebug configurado posteriormente.
            //Magento 2.2


            //Sites de referências:

            //https://xdebug.org/
            //https://stackoverflow.com/
            //https://bitnami.com/stack/magento
            //https://www.tutorialsplane.com/magento-2-get-ip-address/
            //https://devdocs.magento.com/guides/
            //https://mage2gen.com/
            //https://www.jetbrains.com/help/phpstorm/2019.1/configuring-remote-interpreters.html
            //https://belvg.com/blog/controllers-routers-and-responses-in-magento-2.html

            /** @var \Magento\Framework\ObjectManagerInterface */
            $objctManager = \Magento\Framework\App\ObjectManager::getInstance();
            /** @var \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $a */
            $remote = $objctManager->get('Magento\Framework\HTTP\PhpEnvironment\RemoteAddress');

            $result = $this->resultJsonFactory->create();

            $data = ['Teste Inicial:' => 'Hello world!', 'IP:' => $remote->getRemoteAddress()];

      return $result->setData($data);
} }