Description
-----------------
This module unobtrusively adds additional checkboxes to the permissions 
form located at admin/user/permissions. The checkboxes provide a much
friendlier interface for dealing with the hundreds of checkboxes that 
accumulate on the permissions page as roles and modules are added to a 
Drupal installation. 

The checkboxes placed along the header of the permissions page next 
to each role allow an administrator, with a single click, to select or 
deselect every item for a user role, which is useful if you have an 
administrative-type role, or wish to banish anonymous users from any
access.

The checkboxes placed next to each module name/section allow an 
administrator to select or deselect every permission associated with 
that module for all user roles.

The checkboxes placed in the header above the permissions boxes to the
right of the module name/section allow every checkbox for the current
user role and module to be enabled or disabled.

The checkboxes next to each individual permission allow all roles to be
enabled or disabled for that particular permission.

All additional checkboxes are inserted into the DOM using a jQuery
plugin that also binds the new checkboxes with the events to handle
their role.

To visually seperate the check-all checkboxes from the permission boxes,
an additional jQuery plugin is used named jquery.checkbox.js, written by
Khavilo Dmitry (wm.morgun at gmail.com), distributed under the MIT 
license, available here: http://widowmaker.kiev.ua/checkbox/. The safari
theme was chosen for the graphical checkboxes, but the colors were 
changed to reduce confusion for Mac users.


Configuration
-----------------
All configuration is performed on an Administer -> User management -> 
Check Heavy UI (admin/user/check_heavy_ui). Currently, only one option
exists, which is to enable the use of the module on 
admin/user/permissions. There are also two permissions for the module,
which are to administer and access.



Authors
-----------------
Rich Siomporas <richietommy@yahoo.com>
http://drupal.org/user/343807
