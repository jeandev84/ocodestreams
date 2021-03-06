<?php
namespace Framework\Common;


/**
 * Class Collection
 * @package Framework\Common
 */
class Collection
{

    /** @var array  */
    protected $items = [];


    /**
     * Collection constructor.
     * @param array $items
    */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * @return array
    */
    public function all()
    {
        return $this->items;
    }


    /**
     * @return int
    */
    public function count()
    {
        return count($this->items);
    }


    /**
     * Determine if items is empty or not
     *
     * @return bool
    */
    public function isEmpty()
    {
        return empty($this->items);
    }


    /** @param $key */
    public function exists($key)
    {
        return isset($this->items[$key]);
    }


    /**
     * @param $key
     * @return bool
    */
    public function contains($item)
    {
        return in_array($item, $this->items);
    }


    /**
     * @param null $default
     * @return mixed|null
    */
    public function first($default = null)
    {
        return isset($this->items[0]) ? $this->items[0] : $default;
    }


    /**
     * @param null $default
     * @return bool
    */
    public function last($default = null)
    {
        $reversed = array_reverse($this->items);

        return isset($reversed[0]) ? $reversed[0] : $default;
    }
}