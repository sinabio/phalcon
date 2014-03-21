<?php
namespace Radio\Components;
use Phalcon\Mvc\User\Component;

class Menu extends Component
{
	public function __construct($controller, $action) {
        $this->controller = $controller;
        $this->action = $action;
    }
    public function getChannel(){
		$links = array(
				array('title'=>'Home', 'link'=>'/'),
				array('title'=>'Technology','link'=>'technology'),
				array('title'=>'Photography','link'=>'photography'),
				array('title'=>'Radio','link'=>'radio'),
				array('title'=>'About','link'=>'about')
		);
		return($links);
	}
    public function getMenu()
    {
		$menu = array(
            array('title'=>'Home', 'link'=>'radio/index'),
            array('title'=>'Repeater', 'link'=>'radio/repeater'),
            array('title'=>'Logging','link'=>'radio/logging'),
            array('title'=>'台网','link'=>'radio/net'),
            array('title'=>'信标','link'=>'radio/beacon'),
            array('title'=>'产品','link'=>'radio/product'),
            array('title'=>'知识','link'=>'radio/knowledge'),
            array('title'=>'Contesting','link'=>'radio/contesting'),
            array('title'=>'Propagation','link'=>'radio/contesting'),
            array('title'=>'Software','link'=>'/radio/software')
		);
		return( $menu );
    }
	public function getSubmenu($menu = null)
    {
		$submenu = array(
            'index' => array(
                array('title'=>'Morse','link'=>'radio/morse'),
                array('title'=>'Zone','link'=>'radio/zone'),
                array('title'=>'APRS','link'=>'radio/aprs'),
            ),    
			'logging' => array(
				array('title'=>'HF','link'=>'/radio/logging'),
                array('title'=>'VHF','link'=>'radio/logging'),
                array('title'=>'UHF','link'=>'radio/logging'),
				array('title'=>'KUHF','link'=>'radio/logging'),
				array('title'=>'FSK','link'=>'radio/logging'),
                array('title'=>'USB','link'=>'radio/logging'),
                array('title'=>'LSB','link'=>'radio/logging'),
                array('title'=>'SSB','link'=>'radio/logging'),
                array('title'=>'FM','link'=>'radio/logging'),
                array('title'=>'AM','link'=>'radio/logging'),
			),
            'repeater' => array(
				array('title'=>'Download','link'=>'/radio/repeater/download'),
                array('title'=>'UHF', 'link'=>'/radio/repeater/uhf'),
				array('title'=>'VHF','link'=>'/radio/repeater/vhf'),
                array('title'=>'Digital','link'=>'/radio/repeater/digital'),
                array('title'=>'TDMA','link'=>'/radio/repeater/digital'),
                array('title'=>'FDMA','link'=>'/radio/repeater/digital')
			),
             'product' => array(
				array('title'=>'Yaesu', 'link'=>'/radio/product/yaesu'),
				array('title'=>'ICOM','link'=>'/radio/product/icom'),
				array('title'=>'Kenwood','link'=>'/radio/product/kenwood'),
                array('title'=>'Alinco','link'=>'/radio/product/alinco'),
                array('title'=>'Motorola','link'=>'/radio/product/motorola'),
                array('title'=>'Hytera','link'=>'/radio/product/hytera')
			),
            'knowledge' => array(
                array('title'=>'Morse','link'=>'/radio/knowledge/morse'),
                array('title'=>'Zone','link'=>'/radio/knowledge/zone'),
                array('title'=>'APRS','link'=>'/radio/knowledge/aprs'),
			),
            'net' => array(
                array('title'=>'什么是台网','link'=>'/radio/knowledge/net'),
                array('title'=>'Zone','link'=>'/radio/knowledge/zone'),
                array('title'=>'APRS','link'=>'/radio/knowledge/aprs'),
			),
		);
		if(array_key_exists($this->controller,$submenu)){
			
			return($submenu[$this->controller]);
		}
		return( array());
    }
    public function getTabs()
    {
        //...
    }

}
