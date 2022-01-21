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
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize extends Type
{
    /**
     * Identifier for this file, which can be used to download or reuse the file
     * 
     * @var string
     */
    public $file_id;

    /**
     * Unique identifier for this file,
     * which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     * 
     * @var string
     */
    public $file_unique_id;

    /**
     * Photo width
     * 
     * @var int
     */
    public $width;

    /**
     * Photo height
     * 
     * @var int
     */
    public $height;

    /**
     * Optional. File size
     * 
     * @var int
     */
    public $file_size;
}
