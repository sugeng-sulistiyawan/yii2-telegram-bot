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
 * This object contains information about a poll.
 */
class Poll extends Type
{
    public $id;

    public $question;

    public $options;

    public $total_voter_count;

    public $is_closed;

    public $is_anonymous;

    public $type;

    public $allows_multiple_answers;

    public $correct_option_id;
}
