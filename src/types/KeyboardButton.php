<?php

namespace diecoding\telegram\types;

use diecoding\telegram\base\Type;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2022 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 0.0.1
 *
 * This object represents one button of the reply keyboard. 
 * For simple text buttons String can be used instead of this object to specify text of the button.
 * Optional fields `request_contact`, `request_location`, and `request_poll` are mutually exclusive.
 */
class KeyboardButton extends Type
{
    public $text;

    public $request_contact;

    public $request_location;

    public $request_poll;
}
