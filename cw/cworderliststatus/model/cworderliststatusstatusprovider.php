<?php

class cwOrderListStatusStatusProvider {

	public function getAvailableOrderStatusses(){
		$statuses = oxDb::getDb()->getCol('SELECT DISTINCT OXTRANSSTATUS FROM oxorder;');
		$statuses = array_combine($statuses, $statuses); // key/value mapping
		$allStatus = array(
			'' => oxRegistry::getLang()->translateString('CW_STATUS_ALL') 
		);
		return array_merge($allStatus, $statuses);
	}
}
