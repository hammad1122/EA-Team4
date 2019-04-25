<?php



namespace EA\Engine\Types;

class Email extends NonEmptyText {
    protected function _validate($value)
    {
        return parent::_validate($value) && filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
