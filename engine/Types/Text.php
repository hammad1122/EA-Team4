<?php


namespace EA\Engine\Types;

class Text extends Type {
    protected function _validate($value)
    {
        return is_string($value);
    }
}
