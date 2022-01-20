<h1 align="center">
    Yii2 Telegram Bot
</h1>
<p align="center">
    Yii2 Telegram Bot Api Component
</p>
<p align="center">
	<img width="200px" src="https://i.ibb.co/JQxDZWH/telegram.png">
</p>
<p align="center">
	
[![Latest Stable Version](https://poser.pugx.org/die-coding/yii2-telegram-bot/version)](//packagist.org/packages/die-coding/yii2-telegram-bot)
[![Total Downloads](https://poser.pugx.org/die-coding/yii2-telegram-bot/downloads)](https://packagist.org/packages/die-coding/yii2-telegram-bot)
[![Latest Unstable Version](https://poser.pugx.org/die-coding/yii2-telegram-bot/v/unstable)](https://packagist.org/packages/die-coding/yii2-telegram-bot)
[![License](https://poser.pugx.org/die-coding/yii2-telegram-bot/license)](https://packagist.org/packages/die-coding/yii2-telegram-bot)
[![Monthly Downloads](https://poser.pugx.org/die-coding/yii2-telegram-bot/d/monthly)](https://packagist.org/packages/die-coding/yii2-telegram-bot)
[![Daily Downloads](https://poser.pugx.org/die-coding/yii2-telegram-bot/d/daily)](//packagist.org/packages/die-coding/yii2-telegram-bot)
</p>


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist diecoding/yii2-telegram-bot "*"
```

or add

```
"diecoding/yii2-telegram-bot": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, use it in your code

```php
<?php echo \diecoding\dropify\Dropify::widget([
    'options' => [ // options for input widget

    ]
    'pluginOptions' => [ // options for dropify, as output  ```$(#options['id']).dropify(pluginOptions);```
        
    ]
]); ?>
```

or    

```php
<?php echo $form->field($model, 'image')->widget(\diecoding\dropify\Dropify::className(), [
    'options' => [ // options for input widget

    ]
    'pluginOptions' => [ // options for dropify, as output  ```$(#options['id']).dropify(pluginOptions);```
        
    ]
]) ?>
```
