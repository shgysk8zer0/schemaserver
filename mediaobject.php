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
namespace SuperUserDev\SchemaServer;

/**
 * @see https://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{
	/**
	 * [setWidth description]
	 * @param Int $width [description]
	 */
	final public function setWidth(Int $width)
	{
		$this->_set('width', $width);
	}

	/**
	 * [setHeight description]
	 * @param Int $height [description]
	 */
	final public function setHeight(Int $height)
	{
		$this->_set('height', $height);
	}

	/**
	 * [setUploadDate description]
	 * @param DateTime $date [description]
	 */
	final public function setUploadDate(\DateTime $date)
	{
		$this->_set('uploadDate', $date);
	}
}
