<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $productRepository;
    public function __construct(Context $context, PencilInterface $pencilInterface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }
    public function execute()
    {
        echo $this->pencilInterface->getPencilType();
        // echo get_class($this->productRepository);
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        var_dump($pencil);
        $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        var_dump($book);
    }
}