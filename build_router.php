<?hh
require_once(__DIR__.'/vendor/hh_autoload.php');

use \Facebook\HackRouter\Codegen;

final class UpdateCodegen {
  public function main(): void {
    Codegen::forTree(
      __DIR__.'/src/controllers/',
      shape(
        'controller_base' => WebController::class,
        'router' => shape(
          'abstract' => false,
          'file' => __DIR__.'/src/codegen/Router.php',
          'class' => 'Router',
        ),
      ),
    )->build();
  }
}

$codegen = new UpdateCodegen();
$codegen->main();
