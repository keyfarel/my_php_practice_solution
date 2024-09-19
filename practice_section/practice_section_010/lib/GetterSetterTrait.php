<?php

namespace practice_section_10\lib;

trait GetterSetterTrait {
    public function __call($name, $arguments) {
        $prefix = substr($name, 0, 3);
        $property = lcfirst(substr($name, 3));

        if ($prefix == "get") {
            return $this->$property;
        }

        if ($prefix == "set") {
            $this->$property = $arguments[0];
            return $this;
        }
    }
}
