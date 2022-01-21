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
 * This object represents a chat photo.
 */
class ChatPhoto extends Component
{
    public $small_file_id;

    public $small_file_unique_id;

    public $big_file_id;

    public $big_file_unique_id;
}
