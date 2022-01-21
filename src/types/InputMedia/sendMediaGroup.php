<?php

namespace diecoding\telegram\types\inputMedia;


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
 * This object represents a chat.
 */
class sendMediaGroup extends Type
{
    public $chat_id;

    /**
     * @var array of `InputMediaAudio`, `InputMediaDocument`, `InputMediaPhoto` and `InputMediaVideo`
     */
    public $media;

    public $disable_notification;

    public $reply_to_message_id;

    public $allow_sending_without_reply;
}
