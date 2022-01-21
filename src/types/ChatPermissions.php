<?php

namespace diecoding\telegram\types;

use yii\base\Component;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2022 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 0.0.1
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends Component
{
    public $can_send_messages;

    public $can_send_media_messages;

    public $can_send_polls;

    public $can_send_other_messages;

    public $can_add_web_page_previews;

    public $can_change_info;

    public $can_invite_users;

    public $can_pin_messages;
}
