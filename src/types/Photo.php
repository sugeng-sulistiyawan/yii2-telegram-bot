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
 */
class Photo extends Type
{
    public $photoSize = [];

    public function __construct($config)
    {
        foreach ($config as $attribute) {
            $this->photoSize[] = new PhotoSize($attribute);
        }
    }
}
