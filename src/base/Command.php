<?php

namespace diecoding\telegram\base;

use Yii;
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
class Command extends Component
{
    /**
     * Run command bot
     * 
     * @param string $command
     * @param callable $function
     */
    public static function run($command, callable $function)
    {
        $telegram = Yii::$app->telegram;
        $text = $telegram->input->message->text;
        $args = explode(' ', $text);
        $inputCommand = array_shift($args);

        if ($inputCommand === $command) {
            return call_user_func_array($function, [$telegram, $args]);
        }
    }
}
