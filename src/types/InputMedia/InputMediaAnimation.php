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
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 */
class InputMediaAnimation extends Type implements InputMedia
{
    public $type;

    public $media;

    public $thumb;

    public $caption;

    public $parse_mode;

    public $width;

    public $height;

    public $duration;
}