<?php

class sms_nav{
    private $_label = array();
    private $_link = array();
    private $_icon = array();

    private $_labelu = array();
    private $_linku = array();
    private $_iconu = array();

    public function add($link, $label,$icon ="fa fa-external-link-square-alt")
    {
        $this->_label[] = $label;
        $this->_link[] = $link;
        $this->_icon[] = $icon;
    }
    public function addu($link, $label,$icon ="fa fa-external-link-square-alt")
    {
        $this->_labelu[] = $label;
        $this->_linku[] = $link;
        $this->_iconu[] = $icon;
    }
/*



*/
    public function gethtml($classes = "w3-hover-black")
    {
        foreach($this->_label as $key => $label){
           echo "<a href='?serve=".$this->_link[$key]."' class='w3-bar-item w3-button $classes'><i class='".$this->_icon[$key]."' style='padding-right:2pt;'></i>$label</a>";
            
            
        }

       
    }

    public function gethtmlu($classes = "w3-hover-black")
    {
        foreach($this->_labelu as $key => $label){
           echo "<a href='?serve=".$this->_linku[$key]."' class='w3-bar-item w3-button $classes'><i class='".$this->_iconu[$key]."' style='padding-right:2pt;'></i>$label</a>";
            
            
        }

       
    }

    public function getlinkArr()
    {
        return $this->_link;

       
    }

    public function getlabelArr()
    {
        return $this->_label;

       
    }

    public function getAll()
    {
        foreach($this->_label as $key => $label){
           echo "Label: $label<br>";
            echo "Link:". $this->_link[$key]."<br>";
            
        }

       
    }
}
