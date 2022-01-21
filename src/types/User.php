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
 * This object represents a Telegram user or bot.
 */
class User extends Type
{
    /**
     * Unique identifier for this user or bot
     * 
     * @var int
     */
    public $id;

    /**
     * True, if this user is a bot
     * 
     * @var bool
     */
    public $is_bot;

    /**
     * User‘s or bot’s first name
     * 
     * @var string
     */
    public $first_name;

    /**
     * Optional. User‘s or bot’s last name
     * 
     * @var string
     */
    public $last_name;

    /**
     * Optional. User‘s or bot’s username
     * 
     * @var string
     */
    public $username;

    /**
     * Optional. IETF language tag of the user's language
     * 
     * @var string
     */
    public $language_code;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * 
     * @var bool
     */
    public $can_join_groups;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * 
     * @var bool
     */
    public $can_read_all_group_messages;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     * 
     * @var bool
     */
    public $supports_inline_queries;
}
