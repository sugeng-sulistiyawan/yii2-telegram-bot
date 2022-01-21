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
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends Type
{
    public $file_id;

    public $file_unique_id;

    private $_thumb;

    public $file_name;

    public $mime_type;

    public $file_size;

    public function getThumb()
    {
        return $this->_thumb;
    }

    public function setThumb($value)
    {
        $this->_thumb = new PhotoSize($value);
    }
}
