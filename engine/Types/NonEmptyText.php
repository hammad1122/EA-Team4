<?php



namespace EA\Engine\Types;

class NonEmptyText extends Text {
    protected function _validate($value)
    {
        return parent::_validate($value) && $value !== '';
    }
}
