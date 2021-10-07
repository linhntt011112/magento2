<?php

namespace SimplifiedMagento\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;

class ResponseType extends Action{

    protected $pageFactory;
    protected $jsonFactory;
    protected $raw;
    protected $forwardFactory;

    public function __construct(Context $context, PageFactory $pageFactory, JsonFactory $jsonFactory, Raw $raw, ForwardFactory $forwardFactory)
    {
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->forwardFactory = $forwardFactory;
        parent::__construct($context);
    }
    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        // return $this->pageFactory->create();
        // return $this->jsonFactory->create()->setData(['key' => 'value', 'key2' => ['one', 'two']]);
        // $result = $this->raw->setContents('hello world');
        // return $result;
        $result = $this->forwardFactory->create();
        $result->setModule('noroutefound')->setController('page')->forward('customnoroute');
        return $result;
    }
}