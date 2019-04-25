<?php


namespace EA\Engine\Types;

class Integer extends Type {
    protected function _validate($value)
    {
        return is_numeric($value) && ! is_float($value);
    }
}
