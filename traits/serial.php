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
namespace SuperUserDev\SchemaServer\Traits;

/**
 * @see http://php.net/manual/en/class.serializable.php
 * @see http://php.net/manual/en/class.jsonserializable.php
 */
trait Serial
{
	/**
	 * [serialize description]
	 * @return String [description]
	 */
	final public function serialize(): String
	{
		return serialize($this->getMinified());
	}

	/**
	 * [unserialize description]
	 * @param  String $data [description]
	 * @return Void         [description]
	 */
	final public function unserialize($data): Void
	{
		$parsed = unserialize($data);
		if (array_key_exists('@id', $parsed)) {
			$this->_set('identifier', $parsed['@id']);
		} else {
			$this->_data = $parsed;
		}
	}

	/**
	 * [jsonSerialize description]
	 * @return Array [description]
	 */
	final public function jsonSerialize(): Array
	{
		$data = static::getInfo();
		if (isset($this->identifier)) {
			$data['@id'] = "/{$data['@type']}/{$this->identifier}";
		}
		return array_merge($data, $this->_data);
	}

	final public function getMinified(): Array
	{
		$data = static::getInfo();
		$data['@id'] = md5(spl_object_hash($this));
		return $data;
	}
}
