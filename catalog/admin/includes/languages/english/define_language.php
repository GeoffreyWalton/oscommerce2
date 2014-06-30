<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Edit Screen Text');

define('TABLE_HEADING_FILES', 'Files');
define('TABLE_HEADING_WRITABLE', 'Writable');
define('TABLE_HEADING_LAST_MODIFIED', 'Last Modified');

define('TEXT_EDIT_NOTE', '<strong>Editing Screen Text</strong><br /><br />Each piece of text that appears on a screen is set up in a language file, normally specific to the screen being displayed. It is passed to the script using the PHP <a href="http://www.php.net/define" target="_blank">define()</a> function in the following manner:<br /><br /><nobr>define(\'TEXT_MAIN\', \'<span style="background-color: #FFFF99;">This text can be edited. It\\\'s really easy to do!</span>\');</nobr><br /><br />The highlighted text can be edited. As this definition is using single quotes to contain the text, any single quotes within the text definition must be escaped with a backslash (eg, It\\\'s).<br /><br />');

define('TEXT_FILE_DOES_NOT_EXIST', 'File does not exist.');

define('ERROR_FILE_NOT_WRITEABLE', 'Error: I can not write to this file. Please set the user permissions on: %s so it is writeable.');
?>