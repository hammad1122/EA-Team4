<?php


namespace EA\Engine\Types;

class Boolean extends Type {
    protected function _validate($value)
    {
        return is_bool($value);
    }
}
