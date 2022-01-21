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
 * This object contains information about one member of a chat.
 */
class ChatMember extends Component
{
    public $user;

    public $status;

    public $custom_title;

    public $until_date;

    public $can_be_edited;

    public $can_post_messages;

    public $can_edit_messages;

    public $can_delete_messages;

    public $can_restrict_members;

    public $can_promote_members;

    public $can_change_info;

    public $can_invite_users;

    public $can_pin_messages;

    public $is_member;

    public $can_send_messages;

    public $can_send_media_messages;

    public $can_send_polls;

    public $can_send_other_messages;

    public $can_add_web_page_previews;
}
