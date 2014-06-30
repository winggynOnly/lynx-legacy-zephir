<?php

namespace Lynx\Stdlib\Collections;

class ArrayCollection extends \Lynx\Stdlib\Collections\Collection
{

    protected $elements;

    /**
     * {@inheritDoc}
     * 	
     *
     * @param array $elements 
     */
	public function __construct($elements = array()) {}

    /**
     * {@inheritDoc}
     * 	
     *
     * @param mixed $element 
     */
	public function add($element) {}

    /**
     * Checks is collection empty?
     * 	
     *
     * @return bool 
     */
	public function isEmpty() {}

    /**
     * {@inheritDoc}
     * 	
     *
     * @param \Closure $func 
     */
	public function map($func) {}

    /**
     * {@inheritDoc}
     * 	
     *
     * @param mixed $func 
     */
	public function filter($func) {}

    /**
     * {@inheritDoc}
     * 	
     */
	public function first() {}

    /**
     * {@inheritDoc}
     * 	
     */
	public function last() {}

    /**
     * {@inheritDoc}
     * 	
     *
     * @return ArrayIterator 
     */
	public function getIterator() {}

    /**
     * {@inheritDoc}
     * 	
     *
     * @return int 
     */
	public function count() {}

}
