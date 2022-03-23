<?php

namespace diecoding\telegram\base;

use diecoding\telegram\types\CallbackQuery;
use diecoding\telegram\types\Chat;
use diecoding\telegram\types\From;
use diecoding\telegram\types\Message;
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
class Input extends Component
{
    public $update_id;

    private $_message;

    private $_edited_message;

    private $_callback_query;

    private $_from;

    private $_chat;

    public function getMessage()
    {
        return $this->_message;
    }

    public function setMessage($value)
    {
        $this->_message = new Message($value);
    }

    public function getEdited_message()
    {
        return $this->_edited_message;
    }

    public function setEdited_message($value): void
    {
        $this->_edited_message = $value;
    }

    public function getCallback_query()
    {
        return $this->_callback_query;
    }

    public function setCallback_query($value)
    {
        $this->_callback_query = new CallbackQuery($value);
    }

    public function getFrom()
    {
        return $this->_from;
    }

    public function setFrom($value)
    {
        $this->_from = new From($value);
    }

    public function getChat()
    {
        return $this->_chat;
    }

    public function setChat($value)
    {
        $this->_chat = new Chat($value);
    }
}
