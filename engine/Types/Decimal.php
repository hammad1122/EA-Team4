<?php



namespace EA\Engine\Types;

class Decimal extends Type {
    protected function _validate($value)
    {
        return is_float($value);
    }
}
