<?php

namespace diecoding\telegram\types\inputmedia;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2022 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 0.0.1
 *
 * Represents a photo to be sent.
 */
class InputMediaPhoto extends InputMedia
{
    public $type;

    public $media;

    public $caption = "";

    public $parse_mode = "";
}
