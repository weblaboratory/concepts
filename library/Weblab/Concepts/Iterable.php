<?php

namespace Weblab\Concepts;

/**
 * Description of Iterable
 *
 * @author Tim
 * @template <T>
 */
interface Iterable {
    
    /**
     * @return Iterator<T> Description
     */
    public function iterate();
}
