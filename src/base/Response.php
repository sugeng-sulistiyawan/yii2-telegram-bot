<?php

namespace diecoding\telegram\base;

use diecoding\telegram\types\Result;
use yii\base\Component;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2022 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 0.0.1
 */
class Response extends Component
{
    public $ok;

    public $error_code;

    public $description;

    private $_result;

    public function getResult()
    {
        return $this->_result;
    }

    public function setResult($value)
    {
        $this->_result = new Result($value);
    }
}
