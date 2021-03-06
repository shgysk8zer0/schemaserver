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
 * @see https://schema.org/PriceSpecification
 */
class Product extends Thing
{
	use Traits\DateTime;

	final public function setAdditionalProperty(PropertyValue $prop): self
	{
		return $this->_set('additionalProperty', $prop);
	}

	final public function setAggregateRating(ArrgregateRating $rating): self
	{
		return $this->_set('addregateRating', $rating);
	}

	final public function setAudience(Audience $audience): self
	{
		return $this->_set('audience', $audience);
	}

	final public function setAward(String $award): self
	{
		return $this->_set('award', $award);
	}

	final public function setBrand(Thing $brand): self
	{
		if ($brand instanceof Organization or $brand instanceof Brand)
		{
			return $this->_set('brand', $brand);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Brand must be an instance of Brand or Organization. Instance of %s given',
				$brand::getType()
			));
		}
	}

	final public function setCategory(Thing $category): self
	{
		return $this->_set('category', $category);
	}

	final public function setColor(String $color): self
	{
		return $this->_set('color', $color);
	}

	final public function setDepth(Thing $depth): self
	{
		if ($depth instanceof Distance or $depth instanceof QuantitativeValue) {
			return $this->_set('depth', $depth);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Depth must be an instance of Distance or QuantitativeValue. Instance of %s given',
				$depth::getType()
			));
		}
	}

	final public function setGtin12(String $code): self
	{
		return $this->_set('gtin12', $code);
	}

	final public function setGtin13(String $code): self
	{
		return $this->_set('gtin13', $code);
	}

	final public function setGtin14(String $code): self
	{
		return $this->_set('gtin14', $code);
	}

	final public function setGtin8(String $code): self
	{
		return $this->_set('gtin8', $code);
	}

	final public function setHeight(Thing $height): self
	{
		if ($height instanceof Distance or $height instanceof QuantitativeValue) {
			return $this->_set('height', $height);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Height must be an instance of Distance or QuantitativeValue. Instance of %s given',
				$height::getType()
			));
		}
	}

	final public function setIsAccessoryOrSparePartFor(Product $product): self
	{
		return $this->_set('isAccessoryOrSparePartFor', $product);
	}

	final public function setIsConsumableFor(Product $product): self
	{
		return $this->_set('isConsumableFor', $product);
	}

	final public function setIsRelatedTo(Thing $related_to): self
	{
		if ($related_to instanceof Product or $related_to instanceof Service)
		{
			return $this->_set('isRelatedTo', $related_to);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Related to must be an instance of Product or Service. Instance of %s given',
				$related_to::getType()
			));
		}
	}

	final public function setIsSimilarTo(Thing $similar_to): self
	{
		if ($similar_to instanceof Product or $similar_to instanceof Service)
		{
			return $this->_set('isSimilarTo', $similar_to);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Similar to must be an instance of Product or Service. Instance of %s given',
				$similar_to::getType()
			));
		}
	}

	final public function setItemCondition(OfferItemCondition $condition): self
	{
		return $this->_set('itemCondition', $condition);
	}

	final public function setLogo(ImageObject $logo): self
	{
		return $this->_set('logo', $logo);
	}

	final public function setManufacturer(Organization $manufacturer): self
	{
		return $this->_set('manufacturer', $manufacturer);
	}

	final public function setMaterial(Product $material): self
	{
		return $this->_set('material', $material);
	}

	final public function setModel(ProductModel $model): self
	{
		return $this->_set('pruductModel', $model);
	}

	final public function setMpn(String $mpn): self
	{
		return $this->_set('mpn', $mpn);
	}

	// final public function setOffers(Offer $offer)
	// {
	// 	return $this->_set('offer', $offer);
	// }

	final public function setProductID(String $id): self
	{
		return $this->_set('productID', $id);
	}

	final public function setProductionDate(String $date): self
	{
		return $this->_set('productionDate', static::formatDate($date, true, false));
	}

	final public function setPurchaseDate(String $date): self
	{
		return $this->_set('purchaseDate', static::formatDate($date, true, false));
	}

	final public function setReleaseDate(String $date): self
	{
		return $this->_set('releaseDate', static::formatDate($date, true, false));
	}

	final public function setReview(Review $review): self
	{
		return $this->_set('review', $review);
	}

	final public function setSku(String $sku): self
	{
		return $this->_set('sku', $sku);
	}

	final public function setWeight(QuantitativeValue $weight): self
	{
		return $this->_set('weight', $weight);
	}

	final public function setWidth(Thing $width): self
	{
		if ($width instanceof Distance or $width instanceof QuantitativeValue) {
			return $this->_set('width', $width);
		} else {
			throw new \InvalidArgumentException(sprintf(
				'Width must be an instance of Distance or QuantitativeValue. Instance of %s given',
				$width::getType()
			));
		}
	}
}
