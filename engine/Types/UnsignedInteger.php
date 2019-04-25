<?php



namespace EA\Engine\Types;

class UnsignedInteger extends Integer {
    protected function _validate($value)
    {
        return parent::_validate($value) && $value > -1;
    }
}
