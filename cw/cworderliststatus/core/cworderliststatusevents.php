<?php

class cwOrderListStatusEvents {

	/**
	 * Execute action on activate event
	 */
	public static function onActivate(){
		oxDb::getDb()->execute("CREATE INDEX CWOXTRANSSTATUS ON oxorder (OXTRANSSTATUS);");
	}

	/**
	 * Execute action on deactivate event
	 *
	 * @return null
	 */
	public static function onDeactivate(){
		oxDb::getDb()->execute("DROP INDEX CWOXTRANSSTATUS ON oxorder;");
	}
}