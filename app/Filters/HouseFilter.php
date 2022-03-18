<?php

namespace App\Filters;

class HouseFilter extends QueryFilter
{

    /**
     * Filter by type.
     *
     * @param string $type
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function type(string $type = null)
    {
        return $this->builder->when($type, function ($query) use ($type) {
            $query->where('type', $type);
        });
    }

    /**
     * Filter by numberofrooms.
     *
     * @param int $number_of_rooms
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function number_of_rooms(int $number_of_rooms = null)
    {
        return $this->builder->when($number_of_rooms, function ($query) use ($number_of_rooms) {
            $query->where('number_of_rooms', $number_of_rooms);
        });
    }

    /**
     * Filter by numberofbedrooms.
     *
     * @param int $number_of_bedrooms
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function number_of_bedrooms(int $number_of_bedrooms = null)
    {
        return $this->builder->when($number_of_bedrooms, function ($query) use ($number_of_bedrooms) {
            $query->where('number_of_bedrooms', $number_of_bedrooms);
        });
    }

    /**
     * Filter by numberofbathrooms.
     *
     * @param int $number_of_bathrooms
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function number_of_bathrooms(int $number_of_bathrooms = null)
    {
        return $this->builder->when($number_of_bathrooms, function ($query) use ($number_of_bathrooms) {
            $query->where('number_of_bathrooms', $number_of_bathrooms);
        });
    }

    /**
     * Filter by min price.
     *
     * @param int $min
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function min_price(int $min = 0)
    {
        return $this->builder->when($min, function ($query) use ($min) {
            $query->where('price', '>', $min);

        });
    }

    /**
     * Filter by max price.
     *
     * @param int $max
     * @return Illuminate\Database\Eloquent\Builder;
     */

    public function max_price(int $max = 0)
    {
        return $this->builder->when($max, function ($query) use ($max) {
            $query->where('price', '<', $max);

        });
    }
}
