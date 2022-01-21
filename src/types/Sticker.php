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
 * This object represents a chat.
 */
class Sticker extends Type
{
     public $width;

     public $height;

     public $is_animated;

     public $file_id;

     public $file_unique_id;

     public $file_size;

     private $_thumb;

     /**
      * 
      */
     public function getThumb()
     {
          return $this->_thumb;
     }

     /**
      * 
      */
     public function setThumb($value)
     {
          $this->_thumb = new Sticker($value);
     }
}
