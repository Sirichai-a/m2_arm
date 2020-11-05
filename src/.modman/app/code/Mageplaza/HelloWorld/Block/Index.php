<?php
namespace Mageplaza\HelloWorld\Block;
class Index extends \Magento\Framework\View\Element\Template
{
    public function Test(){
        return "Hi Admin";
    }

    public function getPostCollection(){
        $post = [
            [
                "id" => 1,
                "name" => "topvalue 1",
                "content" => "Content Data 1"
            ],
            [
                "id" => 2,
                "name" => "topvalue 2",
                "content" => "Content Data 2"
            ]
        ];
        return $post;
        

	}
}