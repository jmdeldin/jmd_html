<?php

$plugin['version'] = '0.2';
$plugin['author'] = 'Jon-Michael Deldin';
$plugin['author_uri'] = 'http://jmdeldin.com/';
$plugin['description'] = 'Converts XHTML to HTML.';

if (!defined('txpinterface')) @include_once '../../jmd-plugins/zem_tpl.php';

if (0) {
?>
# --- BEGIN PLUGIN HELP ---

Simply enable the plugin to convert XHTML to HTML. Converts both @/>@ and @ />@ closures to @>@.

# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

// convert '/>' to '>'
function jmd_html($doc)
{
	$out = str_replace(' >', '>', str_replace('/>', '>', $doc));
	return $out;
}
ob_start('jmd_html');

# --- END PLUGIN CODE ---

?>
