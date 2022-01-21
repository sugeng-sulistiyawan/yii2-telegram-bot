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
 * Upon receiving a message with this object,
 * Telegram clients will remove the current custom keyboard and display the default letter-keyboard.
 * By default, custom keyboards are displayed until a new keyboard is sent by a bot. 
 * An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see ReplyKeyboardMarkup).
 */
class ReplyKeyboardRemove extends Type
{
    public $remove_keyboard;

    public $selective;
}
