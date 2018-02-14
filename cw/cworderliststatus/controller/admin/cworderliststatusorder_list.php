<?php

class cwOrderListStatusOrder_List extends cwOrderListStatusOrder_List_parent {
	private $_oStatusProvider = null;

	public function __construct(){
		parent::__construct();
		$this->_oStatusProvider = oxNew('cwOrderListStatusStatusProvider');
	}

	public function render(){
		$template = parent::render();
		
		$this->_aViewData['cwSelectedStatus'] = '';
		$where = oxRegistry::getConfig()->getRequestParameter('where');
		if (isset($where['oxorder']) && isset($where['oxorder']['oxtransstatus'])) {
			$this->_aViewData['cwSelectedStatus'] = $where['oxorder']['oxtransstatus'];
		}
		
		$this->_aViewData["cwStatuses"] = $this->_oStatusProvider->getAvailableOrderStatusses();
		
		return $template;
	}
}