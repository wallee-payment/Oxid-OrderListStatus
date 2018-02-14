#

## About

Plugin | cworderliststatus
--- | ---
Version | 1.0.0
Vendor / Prefix | cw
Author | customweb GmbH
Email | [info@customweb.com](https://www.customweb.com)
Website | [https://www.customweb.com](https://www.customweb.com)


## Description
This module adds a column in the order list which displays the order status, as well as an option to filter the listed orders by the current status.

#### Requirements
Oxid CE / PE 4.8+  
Oxid EE 5.1+  
The plugin does not support composer but works in Oxid 4.10+ and Oxid 6.0+

### Install
Copy the cw folder into your [shop_root]/modules folder. Activate the module in administration area.

### Uninstall
Disable the module in administration area and clear the tmp folder to ensure the smarty cache is cleared. Additionally, the folder cw/cworderliststatus may be deleted.

### Files
Type | Class | File
--- | --- | ---
controller | cwOrderListStatusOrder\_List | cw/cworderliststatus/controller/admin/cwOrderListStatusOrder\_List.php
model | cwOrderListStatusStatusProvider | cw/cworderliststatus/model/cwOrderListStatusStatusProvider.php
installer | cwOrderListStatusEvents | cw/cworderliststatus/core/cwOrderListStatusEvents.php
block | admin\_order\_list\_colgroup | cw/cworderliststatus/views/blocks/cwOrderListStatusadmin\_order\_list\_colgroup.php
block | admin\_order\_list\_filter | cw/cworderliststatus/views/blocks/cwOrderListStatusadmin\_order\_list\_filter.php
block | admin\_order\_list\_item | cw/cworderliststatus/views/blocks/cwOrderListStatusadmin\_order\_list\_item.php
block | admin\_order\_list\_sorting | cw/cworderliststatus/views/blocks/cwOrderListStatusadmin\_order\_list\_sorting.php

### Notes
Adds an index on the column OXTRANSSTATUS in the oxorder table. This index is removed upon uninstalling.
The plugin lists every available status, as well as an 'All' status which encompasses every state.