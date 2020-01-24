<?php
/**
 *
 * JSON Schema for Kirby 3
 *
 * @version   0.0.1
 * @author    James Steel <https://hashandsalt.com>
 * @copyright James Steel <https://hashandsalt.com>
 * @link      https://github.com/HashandSalt/kirby3-schema
 * @license   MIT <http://opensource.org/licenses/MIT>
 */

@include_once __DIR__ . '/vendor/autoload.php';

use Spatie\SchemaOrg\Schema;

Kirby::plugin('hashsandsalt/kirby3-schema', [

    'siteMethods' => [
        'schema' => function ($type) {
          $schema = Schema::{$type}();
          return $schema;
        }
    ],

]);
