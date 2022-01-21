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
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio extends Type
{
    public $file_id;

    public $file_name;

    public $file_unique_id;

    public $duration;

    public $performer;

    public $title;

    public $mime_type;

    public $file_size;

    public $thumb;
}
