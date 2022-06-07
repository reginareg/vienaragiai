<? phpinfo

define('KYE', 1);

// echo KYE;

echo __DIR__;

require _once __DIR_ .'/kitas/vienas.php';
require _once __DIR_ .'/kitas/vienas1.php';
require __DIR_ .'/kitas/vienas.php';
include _once __DIR_ .'/kitas/vienas.php';
include __DIR_ .'/dar-kitas/du.php';

$data = require __DIR_ .'/data.php';

print_r($data);