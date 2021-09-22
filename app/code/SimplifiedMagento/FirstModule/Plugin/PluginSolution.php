<?php

namespace SimplifiedMagento\FirstModule\Plugin;

class PluginSolution {
    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject) {
        echo "before execute sort order 10"."</br>";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject) {
        echo "after execute sort order 10"."</br>";
    }

    public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable $proceed) {
        echo "before proceed sort order 10"."</br>";
        $proceed();
        echo "after proceed sort order 10"."</br>";
    }
    // public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name) {
    //     return "Before Plugin ". $name;
    // }

    // public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
    //     return $result ." After Plugin";
    // }
    // public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed, $sku) {
    //     echo "Before proceed"."</br>";
    //     $id = $proceed($sku);
    //     echo $id."</br>";
    //     echo "after proceed"."</br>";
    //     return $id;
    // }
    // public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed) {
    //     echo "Before proceed"."</br>";
    //     $name = $proceed();
    //     echo $name."</br>";
    //     echo "after proceed"."</br>";
    //     return $name;
    // }
}