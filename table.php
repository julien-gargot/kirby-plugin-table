<?php
/**
 * Table Plugin
 * based on Bastian Allgeier <bastian@getkirby.com> Columns plugin.
 *
 * @author Julien Gargot <julien@g-u-i.net>
 * @version 1.1.0
 */
kirbytext::$pre[] = function($kirbytext, $text) {
  $text = preg_replace_callback('!\(table(…|\.{3})\)(.*?)\((…|\.{3})table\)!is', function($matches) use($kirbytext) {
    $rows = preg_split('!(\n|\r\n)(\+{4}|\((…|\.{3})row(…|\.{3})\))\s+(\n|\r\n)!', $matches[2]);
    $html = array();
    foreach($rows as $row) {
      $field       = new Field($kirbytext->field->page, null, trim($row));
      $columns     = preg_split('!(\n|\r\n)(\/{4}|\((…|\.{3})column(…|\.{3})\))\s+(\n|\r\n)!', $field);
      $htmlColumns = array();
      foreach($columns as $column) {
        $field = new Field($kirbytext->field->page, null, trim($column));
        $htmlColumns[] = '<td>' . kirbytext($field) . '</td>';
      }
      $html[] = '<tr>' . implode($htmlColumns) . '</tr>';
    }
    return '<table class="' . c::get('table.container', 'table') . '">' . implode($html) . '</table>';
  }, $text);
  return $text;
};
