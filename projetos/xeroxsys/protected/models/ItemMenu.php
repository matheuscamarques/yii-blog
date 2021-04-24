<?php

class ItemMenu{
	public $label;
	public $url;
	public $visible;

	public function __construct(){}
	public function init($label,$url = [],$visible = true){
		$this->label   = $label;
		$this->url     = $url;
		$this->visible = $visible;
		return $this;
	}
}