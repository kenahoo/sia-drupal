<?php
use CRM_Afform_ExtensionUtil as E;

/**
 * Collection of upgrade steps.
 */
class CRM_Afform_Upgrader extends CRM_Afform_Upgrader_Base {

  /**
   * Update names of blocks and joins
   *
   * @return bool
   */
  public function upgrade_1000(): bool {
    $this->ctx->log->info('Applying update 1000');
    $scanner = new CRM_Afform_AfformScanner();
    $localDir = $scanner->getSiteLocalPath();

    // Update form markup with new block directive names
    $replacements = [
      'afjoin-address-default>' => 'afblock-contact-address>',
      'afjoin-email-default>' => 'afblock-contact-email>',
      'afjoin-i-m-default>' => 'afblock-contact-i-m>',
      'afjoin-phone-default>' => 'afblock-contact-phone>',
      'afjoin-website-default>' => 'afblock-contact-website>',
      'afjoin-custom-' => 'afblock-custom-',
    ];
    foreach (glob("$localDir/*." . $scanner::LAYOUT_FILE) as $fileName) {
      $html = file_get_contents($fileName);
      $html = str_replace(array_keys($replacements), array_values($replacements), $html);
      file_put_contents($fileName, $html);
    }

    // Update form metadata with new block property names
    $replacements = [
      'join' => 'join_entity',
      'block' => 'entity_type',
    ];
    foreach (glob("$localDir/*." . $scanner::METADATA_FILE) as $fileName) {
      $meta = json_decode(file_get_contents($fileName), TRUE);
      foreach ($replacements as $oldKey => $newKey) {
        if (isset($meta[$oldKey])) {
          $meta[$newKey] = $meta[$oldKey];
          unset($meta[$oldKey]);
        }
      }
      if (!empty($meta['entity_type'])) {
        $meta['type'] = 'block';
      }
      file_put_contents($fileName, json_encode($meta, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
    return TRUE;
  }

  /**
   * Upgrade 1000 - install civicrm_afform_submission table
   * @return bool
   */
  public function upgrade_1001(): bool {
    $this->ctx->log->info('Applying update 1001 - install civicrm_afform_submission table.');
    if (!CRM_Core_DAO::singleValueQuery("SHOW TABLES LIKE 'civicrm_afform_submission'")) {
      $this->executeSqlFile('sql/auto_install.sql');
    }
    return TRUE;
  }

}
