<?php
$plugin = array(
    'description' => 'Converts XHTML to HTML.',
    'type' => 0,
    'version' => '0.3',
);


if (!defined('txpinterface')) @include_once '../zem_tpl.php';

if (0) {
?>
# --- BEGIN PLUGIN HELP ---

Simply enable the plugin to convert XHTML to HTML. Converts both @/>@ and @ />@ closures to @>@.

# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

if (txpinterface === 'public')
{
    ob_start('jmd_html');
}

/**
 * Converts XHTML ('/>') to HTML.
 * 
 * @param string $buffer
 */
function jmd_html($buffer)
{
    $out = str_replace(' >', '>', str_replace('/>', '>', $buffer));

    return $out;
}

# --- END PLUGIN CODE ---
?>
