-- +--------------------------------------------------------------------+
-- | Copyright CiviCRM LLC. All rights reserved.                        |
-- |                                                                    |
-- | This work is published under the GNU AGPLv3 license with some      |
-- | permitted exceptions and without any warranty. For full license    |
-- | and copyright information, see https://civicrm.org/licensing       |
-- +--------------------------------------------------------------------+
--
-- Generated from schema.tpl
-- DO NOT EDIT.  Generated by CRM_Core_CodeGen
--
-- /*******************************************************
-- *
-- * Clean up the existing tables - this section generated from drop.tpl
-- *
-- *******************************************************/

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_search_segment`;
DROP TABLE IF EXISTS `civicrm_search_display`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_search_display
-- *
-- * Search Kit - saved search displays
-- *
-- *******************************************************/
CREATE TABLE `civicrm_search_display` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique SearchDisplay ID',
  `name` varchar(255) NOT NULL COMMENT 'Unique name for identifying search display',
  `label` varchar(255) NOT NULL COMMENT 'Label for identifying search display to administrators',
  `saved_search_id` int unsigned NOT NULL COMMENT 'FK to saved search table.',
  `type` varchar(128) NOT NULL COMMENT 'Type of display',
  `settings` text DEFAULT NULL COMMENT 'Configuration data for the search display',
  `acl_bypass` tinyint DEFAULT 0 COMMENT 'Skip permission checks and ACLs when running this display.',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `UI_saved_search__id_name`(saved_search_id, name),
  CONSTRAINT FK_civicrm_search_display_saved_search_id FOREIGN KEY (`saved_search_id`) REFERENCES `civicrm_saved_search`(`id`) ON DELETE CASCADE
)
ENGINE=InnoDB ROW_FORMAT=DYNAMIC;

-- /*******************************************************
-- *
-- * civicrm_search_segment
-- *
-- * Data segmentation sets for searches.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_search_segment` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique SearchSegment ID',
  `name` varchar(255) NOT NULL COMMENT 'Unique name',
  `label` varchar(255) NOT NULL COMMENT 'Label for identifying search segment (will appear as name of calculated field)',
  `description` varchar(255) COMMENT 'Description will appear when selecting SearchSegment in the fields dropdown.',
  `entity_name` varchar(255) NOT NULL COMMENT 'Entity for which this set is used.',
  `items` text COMMENT 'All items in set',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `UI_name`(name)
)
ENGINE=InnoDB ROW_FORMAT=DYNAMIC;
