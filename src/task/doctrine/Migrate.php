<?php declare(strict_types=1);

namespace de\codenamephp\deployer\flow\task\doctrine;

use de\codenamephp\deployer\flow\task\AbstractFlowTask;

/**
 * Runs the doctrine migrations
 *
 * @see https://neos.readthedocs.io/en/stable/References/CommandReference.html#neos-flow-doctrine-migrate
 */
final class Migrate extends AbstractFlowTask {

  public function getCommand() : string {
    return 'doctrine:migrate';
  }

  public function getArguments() : array {
    return [];
  }
}