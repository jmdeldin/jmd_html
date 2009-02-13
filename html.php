<?php
/**
 * @name         jmd_html
 * @description  Converts XHTML to HTML
 * @author       Jon-Michael Deldin
 * @author_uri   http://jmdeldin.com
 * @version      0.4
 * @type         0
 * @order        9
 */

if (txpinterface === 'public')
    ob_start('jmd_html');

/**
 * Converts XHTML ('/>') to HTML.
 *
 * @param string $buffer
 */
function jmd_html($buffer)
{
    return preg_replace('/(\s+)?\/>/', '>', $buffer);
}

