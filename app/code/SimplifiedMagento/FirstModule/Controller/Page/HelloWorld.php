<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
    protected $productRepository;
    protected $pencilFactory;
    public function __construct(Context $context, PencilFactory $pencilFactory, PencilInterface $pencilInterface, ProductRepositoryInterface $productRepository)
    {
        $this->pencilFactory = $pencilFactory;
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        parent::__construct($context);
    }
    public function execute()
    {
        $pencil = $this->pencilFactory->create(array("name"=>"Bob", "school"=>"International College"));
        var_dump($pencil);
    }

    

}