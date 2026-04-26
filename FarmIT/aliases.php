<?php

/**
 * FarmIT namespace aliases.
 *
 * Maps FarmIT\ClassName to Tina4\ClassName so both namespaces
 * work during the migration period. Existing Tina4\ imports are
 * unaffected. New code may use FarmIT\ imports.
 */

$__t4 = 'Tina4\\Debug';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\Debug');
}
$__t4 = 'Tina4\\DebugCodeHandler';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DebugCodeHandler');
}
$__t4 = 'Tina4\\DebugErrorHandler';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DebugErrorHandler');
}
$__t4 = 'Tina4\\DebugExceptionHandler';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DebugExceptionHandler');
}
$__t4 = 'Tina4\\DebugRender';
if (class_exists($__t4, false) || interface_exists($__t4, false) || trait_exists($__t4, false)) {
    class_alias($__t4, 'FarmIT\\DebugRender');
}
unset($__t4);
