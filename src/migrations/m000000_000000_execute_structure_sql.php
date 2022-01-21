<?php

use yii\db\Migration;

class m000000_000000_execute_structure_sql extends Migration
{
    public function up()
    {
        $file = file_get_contents(Yii::getAlias("@vendor") . '/longman/telegram-bot/structure.sql', true);
        $this->execute($file);
    }

    public function down()
    {
    }
}
