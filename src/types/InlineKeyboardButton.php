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
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
class InlineKeyboardButton extends Type
{
    public $text;

    public $url;

    public $login_url;

    public $callback_data;

    public $switch_inline_query;

    public $switch_inline_query_current_chat;

    public $callback_game;

    public $pay;
}
