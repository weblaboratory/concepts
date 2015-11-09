<?php

namespace Weblab\Concepts;

/**
 * Description of Iterator
 *
 * @author Tim
 * 
 * @template <T>
 */
interface Iterator {
    
    public function hasNext();
    
    /**
     * @return T Description
     */
    public function next();
}
