<?php

namespace Drupal\bouvet_drush_commands\Commands;

use Drush\Commands\DrushCommands;

class BouvetDrushCommands extends DrushCommands {
  /**
   * @command bouvet_drush_commands:import
   * @aliases dcim
   */
  public function import() {
      $this->output()->writeln('Importing both configuration and (menu items, taxonomy terms and custom blocks from structure_sync module');
      exec('drush cim;drush import-all;drush cr');

  }

  /**
   * @command bouvet_drush_commands:export
   * @aliases dcex
   */
  public function export() {
      $this->output()->writeln('Exporting both configuration and (menu items, taxonomy terms and custom blocks from structure_sync module');
      exec('drush cex;drush export-all;drush cr');
  }
}
