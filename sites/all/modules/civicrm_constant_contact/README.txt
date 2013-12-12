test

Description
-----------
This Module Integrate CiviCRM with Constant Contact.
The module allows you to use CiviCRM as your CRM while getting the benefits of using Constant Contact to manage and send your bulk e-mail.

The Initial release (version 1.0) was built on CiviCRM 2.2.x.

The Module has 3 major features

1.) Import Contacts from CiviCRM to Constant Contact
2.) Synchronize groups from CiviCRM to Constant Contact
3.) Record opt-out from Constant Contact to CiviCRM

Requirements
------------
Drupal 6.x

Installation
------------
1. Copy the entire civicrm_constant_contact directory the Drupal sites/all/modules directory.

2. Download the Constant Contact PHP library from Source Forge
   at http://sourceforge.net/projects/ctctphplib
   (wget 'http://sourceforge.net/projects/ctctphplib/files/PHP_API_Library.zip/download')

3. Extract the zip file and copy the ctctWrapper.php file into you module directory

4. Login as an administrator. Enable the module in the "Administer" -> "Site
   Building" -> "Modules"

5. Edit the settings under "Administer" -> "Site configuration" ->
   "Constant Contact Push Modules settings"

Upgrading from any previous version
-----------------------------------
1. Copy the entire webform directory the Drupal modules directory.

2. Login as the FIRST user or change the $access_check in upgrade.php to FALSE

3. Run upgrade.php (at http://www.example.com/update.php)

Support
-------
Please use the issue queue for filing bugs with this module at
http://drupal.org/project/issues/civicrm_constant_contact
