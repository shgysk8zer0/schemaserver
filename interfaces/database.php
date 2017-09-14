<?php
/**
 * @author Chris Zuber <chris@chriszuber.com>
 * @package superuserdev/schemaserver
 * @copyright 2017
 * @license https://opensource.org/licenses/LGPL-3.0 GNU Lesser General Public License version 3
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3.0 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library.
 */
namespace SuperUserDev\SchemaServer\Interfaces;

use \PDO;
use \SuperUserDev\SchemaServer\{Thing};

interface Database
{
	/**
	 * [connect description]
	 * @param  String  $username [description]
	 * @param  String  $password [description]
	 * @param  String  $host     [description]
	 * @param  Integer $port     [description]
	 * @param  String  $dbname   [description]
	 * @param  Array   $options  [description]
	 * @return PDO               [description]
	 */
	public static function connect(
		String $username,
		String $password,
		String $dbname    = null,
		String $host      = 'localhost',
		Int    $port      = 5432,
		Array  $options   = []
	): PDO;

	/**
	 * [save description]
	 * @param  PDO     $pdo          [description]
	 * @param  boolean $allow_update [description]
	 * @return Thing                 [description]
	 */
	public function save(PDO $pdo, Bool $allow_update = false): Thing;

	/**
	 * [update description]
	 * @param  String $identifier [description]
	 * @param  PDO    $pdo       [description]
	 * @return Thing             [description]
	 */
	public function update(String $identifier, PDO $pdo): Thing;

	/**
	 * [get description]
	 * @param  String  $identifier [description]
	 * @param  PDO     $pdo        [description]
	 * @param  array   $params     [description]
	 * @param  boolean $populate   [description]
	 * @return Thing               [description]
	 */
	public static function get(
		String $identifier,
		PDO    $pdo,
		Array  $params      = [],
		Bool   $populate    = false
	): Thing;

	/**
	 * [delete description]
	 * @param  String $identifier [description]
	 * @param  PDO    $pdo       [description]
	 * @return Bool              [description]
	 */
	public static function delete(String $identifier, PDO $pdo): Bool;
}
