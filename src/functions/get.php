<?php

/*
 * This file is part of felpado.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace felpado;

use felpado as f;

/**
 * f\get($coll, $key)
 *
 * Returns a element of a collection by key.
 * An InvalidArgumentException is thrown if the key does not exist.
 *
 * f\get(array('a' => 1, 'b' => 2), 'a');
 * => 1
 *
 * f\get(array('a' => 1, 'b' => 2), 'b');
 * => 2
 */
function get($coll, $key) {
    foreach ($coll as $k => $v) {
        if ($key == $k) {
            return $v;
        }
    }

    throw new \InvalidArgumentException(sprintf('The key "%s" does not exist.', $key));
}
