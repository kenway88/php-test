<?php

class Rss
{
    private $dom = null;
    private $rssNode = null;
    private $channelNode = null;

    //channel必须的3个子节点
    public $title = '';
    public $link='';
    public $description = '';

    //items是多条数据集合，每条数据必须包含title或description两个中的一个
    public $items = array();

    public function __construct()
    {
        $this->dom = new DOMDocument('1.0','utf-8');
        $this->createRssNode();
    }

    private function createRssNode()
    {
        $this->rssNode = $this->dom->createElement('rss');
        $rssVersion = $this->dom->createAttribute('version');
        $rssVersion->value = '2.0';
        $this->rssNode->appendChild($rssVersion);
        $this->dom->appendChild($this->rssNode);
    }

    private function createChannelNode()
    {
        $this->channelNode = $this->dom->createElement('channel');
        $this->rssNode->appendChild($this->channelNode);
        $this->channelNode->appendChild($this->dom->createElement('title',$this->title));
        $this->channelNode->appendChild($this->dom->createElement('link',$this->link));
        $this->channelNode->appendChild($this->dom->createElement('description',$this->description));
    }

    private function createItemNode()
    {
        foreach ($this->items as $item) {
            $itemNode = $this->dom->createElement('item');
            foreach ($item as $k=>$v) {
                $itemNode->appendChild($this->dom->createElement($k,$v));
            }
            $this->channelNode->appendChild($itemNode);
        }
    }

    public function create()
    {
        $this->createChannelNode();
        $this->createItemNode();
        return $this->dom->saveXML();
    }

}