<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 13:21
 */

namespace Project\Domain\User;


use Repo\CollectionInterface;

class UserCollection implements CollectionInterface
{

    protected $data = [];

    public function offsetExists($offset)
    {

        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {

        return isset($this->data[$offset]) ? $this->data[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {

        $this->data[$offset] = $value;
    }

    public function push($value)
    {

        $this->data[] = $value;

        return $this;
    }

    public function offsetUnset($offset)
    {

        unset($this->data[$offset]);
    }

    public function current()
    {

        return current($this->data);
    }

    public function next()
    {

        next($this->data);
    }

    public function key()
    {

        return key($this->data);
    }

    public function valid()
    {

        return ($this->current() !== false);
    }

    public function rewind()
    {

        reset($this->data);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        // TODO: Implement toJson() method.
    }


}