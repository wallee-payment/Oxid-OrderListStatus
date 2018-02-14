<?php

/**
 * OXID OrderList Status
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category module
 * @package OrderListStatus
 * @author customweb GmbH
 * @link https://www.customweb.com
 * @copyright (C) customweb GmbH2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
/**
 */
$aModule = array(
	'id' => 'cworderliststatus',
	'title' => 'Order List Status',
	'description' => array(
		'de' => 'Dieses Modul fügt eine Spalte in der Bestellübersicht ein welche den Bestellstatus anzeigt.',
		'en' => 'This module adds a column in the order list which displays the order status.' 
	),
	'thumbnail' => 'out/pictures/customweb.png',
	'version' => '1.0.0',
	'author' => 'customweb GmbH',
	'url' => 'https://www.customweb.com',
	'email' => 'info@customweb.com',
	'extend' => array(
		'order_list' => 'cw/cworderliststatus/controller/admin/cworderliststatusorder_list'
	),
	'files' => array(
		'cwOrderListStatusStatusProvider' => 'cw/cworderliststatus/model/cworderliststatusstatusprovider.php',
		'cwOrderListStatusEvents' => 'cw/cworderliststatus/core/cworderliststatusevents.php'
	),
	'templates' => array(),
	'blocks' => array(
		array(
			'template' => 'order_list.tpl',
			'block' => 'admin_order_list_colgroup',
			'file' => '/views/blocks/cwOrderListStatus_admin_order_list_colgroup.tpl' 
		),
		array(
			'template' => 'order_list.tpl',
			'block' => 'admin_order_list_filter',
			'file' => '/views/blocks/cwOrderListStatus_admin_order_list_filter.tpl' 
		),
		array(
			'template' => 'order_list.tpl',
			'block' => 'admin_order_list_sorting',
			'file' => '/views/blocks/cwOrderListStatus_admin_order_list_sorting.tpl' 
		),
		array(
			'template' => 'order_list.tpl',
			'block' => 'admin_order_list_item',
			'file' => '/views/blocks/cwOrderListStatus_admin_order_list_item.tpl' 
		) 
	),
	'settings' => array(),
	'events' => array(
		'onActivate' => 'cwOrderListStatusEvents::onActivate',
		'onDeactivate' => 'cwOrderListStatusEvents::onDeactivate' 
	) 
);