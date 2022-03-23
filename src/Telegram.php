<?php

namespace diecoding\telegram;

use diecoding\telegram\base\Response;
use diecoding\telegram\base\TelegramBase;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2022 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 0.0.1
 */
class Telegram extends TelegramBase
{
    /**
     * getMe information 
     */
    public function getMe()
    {
        $body = $this->send("/getMe");

        return new Response([
            'ok' => $body['ok'],
            'result' => [
                'user' => $body['result']
            ]
        ]);
    }

    /**
     * ```php
     * Yii::$app->telegram->sendMessage([
     *     'chat_id' => $chat_id,
     *     'text' => 'test',
     *     'reply_markup' => json_encode($reply_markup)
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'disable_web_page_preview' => $disable_web_page_preview,
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendMessage(array $params)
    {
        $body = $this->send("/sendMessage", $params);
        $response = new Response($body);

        return $response;
    }

    /** 
     * ```php
     * Yii::$app->telegram->sendPhoto([
     *     'chat_id' => $chat_id,
     *     'photo' => 'path/to/test.jpg', // realpath
     *     'caption' => $caption,
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendPhoto(array $params)
    {
        $body = $this->send("/sendPhoto", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->forwardMessage([
     *     'chat_id' => $chat_id,
     *     'from_chat_id' => $from_chat_id,
     *     'message_id' => $message_id,
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function forwardMessage(array $params)
    {
        $body = $this->send("/forwardMessage", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendAudio[
     *     'chat_id' => $chat_id,
     *     'audio' => 'path/to/test.ogg', // realpath
     *     'caption' => '',
     *     'duration' => 0,
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendAudio(array $params)
    {
        $body = $this->send("/sendAudio", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendDocument([
     *     'chat_id' => $chat_id,
     *     'document' => 'path/to/test.pdf', // realpath
     *     'caption' => '',
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendDocument(array $params)
    {
        $body = $this->send("/sendDocument", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendSticker([
     *     'chat_id' => $chat_id,
     *     'sticker' => 'path/to/test.webp', // realpath
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendSticker(array $params)
    {
        $body = $this->send("/sendSticker", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendSticker([
     *     'chat_id' => $chat_id,
     *     'voice' => // InputFile or string
     *     'caption' => string,
     *     'parse_mode' => // parse_mode,
     *     'duration' => int,
     *     'disable_notification' => bool,
     *     'reply_to_message_id' => int,
     *     'reply_markup' => // InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendVoice(array $params)
    {
        $body = $this->send("/sendVoice", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendSticker([
     *     'chat_id' => $chat_id,
     *     'video_note' => // InputFile or string
     *     'thumb' => // InputFile or string,
     *     'duration' => int,
     *     'duration' => int
     *     'disable_notification' => bool,
     *     'reply_to_message_id' => int,
     *     'reply_markup' => // InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendVideoNote(array $params)
    {
        $body = $this->send("/sendVideoNote", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendVideo([
     *     'chat_id' => $chat_id,
     *     'video' => 'path/to/test.mp4', // realpath
     *     'duration' => 0,
     *     'width' => int, // Video width
     *     'height' => int, // Video height
     *     'caption' => $caption,
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup,
     *     'thumb' => // InputFile or string,
     *     'supports_streaming' => bool, // Pass True, if the uploaded video is suitable for streaming
     *     'disable_notification' => bool, // Sends the message silently. Users will receive a notification with no sound.
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendVideo(array $params)
    {
        $body = $this->send("/sendVideo", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendLocation([
     *     'chat_id' => $chat_id,
     *     'latitude' => 37.7576793,
     *     'longitude' => -122.5076402,
     *     'disable_notification' => true, // true || false,
     *     'reply_to_message_id' => $reply_to_message_id,
     *     'reply_markup' => $reply_markup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendLocation(array $params)
    {
        $body = $this->send("/sendLocation", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->editMessageLiveLocation([
     *     'chat_id' => $chat_id,
     *     'message_id' => 132121,
     *     'inline_message_id' => 321344,
     *     'latitude' => 123.4
     *     'longitude' => 123.4,
     *     'reply_markup' => // InlineKeyboardMarkup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function editMessageLiveLocation(array $params)
    {
        $body = $this->send("/editMessageLiveLocation", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->stopMessageLiveLocation([
     *     'chat_id' => $chat_id,
     *     'message_id' => 132121,
     *     'inline_message_id' => 321344,
     *     'reply_markup' => // InlineKeyboardMarkup
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function stopMessageLiveLocation(array $params)
    {
        $body = $this->send("/stopMessageLiveLocation", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->sendChatAction([
     *     'chat_id' => $chat_id,
     *     'action' => 'upload_photo', // upload_photo or record_video or upload_video or record_audio or upload_audio or upload_document or find_location
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendChatAction(array $params)
    {
        $body = $this->send("/sendChatAction", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->getUserProfilePhotos([
     *     'user_id' => $chat_id,
     *     'offset' => $offset, // Sequential number of the first photo to be returned. By default, all photos are returned.
     *     'limit' => $limit, // Limits the number of photos to be retrieved. Values between 1—100 are accepted. Defaults to 100.
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getUserProfilePhotos($params)
    {
        $body = $this->send("/getUserProfilePhotos", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->getUpdates([
     *     'offset' => $offset, // Identifier of the first update to be returned. Must be greater by one than the highest among the *            //identifiers of previously received updates.
     *           // By default, updates starting with the earliest unconfirmed update are returned.
     *           // An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id.
     *           // The negative offset can be specified to retrieve updates starting from -offset
     *           // update from the end of the updates queue.
     *     'limit' => $limit, // Limits the number of updates to be retrieved. Values between 1—100 are accepted. Defaults to 100.
     *     'timeout' => $timeout, // Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getUpdates(array $params = [])
    {
        $body = $this->send("/getUpdates", $params);

        return $body;
    }

    /**
     * ```php
     * Yii::$app->telegram->setWebhook([
     *     'url' => $url,
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function setWebhook(array $params = [])
    {
        $body = $this->send("/setWebhook", $params);

        return $body;
    }

    /**
     * ```php
     * Yii::$app->telegram->deleteWebhook();
     * ```
     * 
     * @param array $params
     */
    public function deleteWebhook(array $params = [])
    {
        $body = $this->send("/deleteWebhook", $params);

        return $body;
    }

    /**
     * ```php
     * Yii::$app->telegram->getChat([
     *     'chat_id' => '3343545121',
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getChat(array $params = [])
    {
        $body = $this->send("/getChat", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     *  Use this method to get a list of administrators in a chat.
     * 
     * ```php
     * Yii::$app->telegram->getChatAdministrators([
     *     'chat_id' => '3343545121',
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getChatAdministrators(array $params = [])
    {
        $body = $this->send("/getChatAdministrators", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->getChatMembersCount([
     *     'chat_id' => '3343545121',
     * ]);
     * ```
     * 
     * @param array $params
     *   Use this method to get the number of members in a chat. Returns Int on success.
     */
    public function getChatMembersCount(array $params = [])
    {
        $body = $this->send("/getChatMembersCount", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to get information about a member of a chat.
     * 
     * ```php
     * Yii::$app->telegram->getChatMember([
     *     'chat_id' => '3343545121', // Unique identifier for the target chat or
     *            // username of the target supergroup or channel (in  the format @channelusername)
     *     'user_id' => 243243, // Unique identifier of the target user
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getChatMember(array $params = [])
    {
        $body = $this->send("/getChatMember", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to send answers to callback queries sent from inline keyboards.
     * The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
     * On success, True is returned.
     * 
     * ```php
     * Yii::$app->telegram->answerCallbackQuery([
     *     'callback_query_id' => '3343545121', //require
     *     'text' => 'text', // Optional
     *     'show_alert' => 'my alert',  // Optional
     *     'url' => 'http://sample.com', // Optional
     *     'cache_time' => 123231,  // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function answerCallbackQuery(array $params = [])
    {
        $body = $this->send("/answerCallbackQuery", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to edit text and game messages sent by the bot or via the bot (for inline bots). On success,
     * if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     * 
     * ```php
     * Yii::$app->telegram->editMessageText([
     *     'chat_id' => '3343545121', // Optional
     *     'message_id' => 13123, // Optional
     *     'inline_message_id' => 'my alert',  // Optional
     *     'text' => 'my text', //require
     *     'parse_mode' => 123231,  // Optional
     *     'disable_web_page_preview' => false or true,  // Optional
     *     'reply_markup' => Type InlineKeyboardMarkup,  // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function editMessageText(array $params = [])
    {
        $body = $this->send("/editMessageText", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to edit captions of messages sent by the bot or via the bot (for inline bots). On success,
     * if edited message is sent by the bot, the edited Message is returned, otherwise True is returned.
     * 
     * ```php
     * Yii::$app->telegram->editMessageText([
     *     'chat_id' => '3343545121', // Required
     *     'message_id' => 13123, // Optional
     *     'inline_message_id' => 'my alert', // Optional
     *     'caption' => 'my text', //require
     *     'reply_markup' => Type InlineKeyboardMarkup, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function editMessageCaption(array $params = [])
    {
        $body = $this->send("/editMessageCaption", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to send a game. On success, the sent Message is returned.
     * 
     * ```php
     * Yii::$app->telegram->sendGame([
     *     'chat_id' => '3343545121', // Required
     *     'game_short_name' => 'myGame', // Required
     *     'disable_notification' => true, // true or false Optional
     *     'reply_to_message_id' => 123121, // Optional
     *     'reply_markup' => Type InlineKeyboardMarkup, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendGame(array $params = [])
    {
        $body = $this->send("/sendGame", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to send a game. On success, the sent Message is returned.
     * 
     * ```php
     * Yii::$app->telegram->Game([
     *     'title' => 'Title of the game', // Required
     *     'description' => 'string', // Required
     *     'photo' => array of PhotoSize,  //Photo that will be displayed in the game message in chats
     *     'text' => 'string', // Optional
     *     'text_entities' => array of MessageEntity, // Optional
     *		'animation' => instance of Animation, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function Game(array $params = [])
    {
        $body = $this->send("/Game", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * You can provide an animation for your game so that it looks stylish
     * in chats (check out Lumberjack for an example). This object represents an animation file to
     * be displayed in the message containing a game.
     * 
     * ```php
     * Yii::$app->telegram->Animation([
     *     'chat_id' => string, // Required
     *     'animation' => // InputFile or string, // Optional
     *     'duration' => int, // Optional
     *     'width' => int, // Optional,
     *     'height' => int,
     *     'thumb' => // InputFile or string,
     *     'caption' => string,
     *     'parse_mode' => string,
     *     'disable_notification' => bool,
     *     'reply_to_message_id' => int
     *     'reply_markup' => // InlineKeyboardMarkup or ReplyKeyboardMarkup or ReplyKeyboardRemove or ForceReply
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function sendAnimation(array $params = [])
    {
        $body = $this->send("/sendAnimation", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to set the score of the specified user in a game. On success,
     * if the message was sent by the bot, returns the edited Message, otherwise returns True.
     * Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
     *
     * ```php
     * Yii::$app->telegram->CallbackGame([
     *     'user_id' => int, // Required
     *     'score' => int, // Required
     *     'force' => bool, // Optional
     *     'disable_edit_message' => bool, // Optional
     *     'chat_id' => int,
     *     'message_id' => int, // Optional
     *     'inline_message_id' => string, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function CallbackGame(array $params = [])
    {
        $body = $this->send("/CallbackGame", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to get data for high score tables.
     * Will return the score of the specified user and several of his neighbors in a game.
     * On success, returns an array of GameHighScore objects.

     * ```php
     * Yii::$app->telegram->getGameHighScores([
     *     'user_id' => int, // Required
     *     'chat_id' => int, // Optional
     *     'message_id' => int,  // Optional
     *     'inline_message_id' => string, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function getGameHighScores(array $params = [])
    {
        $body = $this->send("/getGameHighScores", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * This object represents one row of the high scores table for a game.
     * 
     * ```php
     * Yii::$app->telegram->GameHighScore([
     *     'position' => int, // Required-Position in high score table for the game
     *     'user' => User, // Optional
     *     'score' => int, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function GameHighScore(array $params = [])
    {
        $body = $this->send("/GameHighScore", $params);
        $response = new Response($body);

        return $response;
    }

    //----------------------begin inline method--------------------------//

    /**
     * This object represents one row of the high scores table for a game.
     * 
     * ```php
     * Yii::$app->telegram->answerInlineQuery([
     *     'inline_query_id' => int, // Required-Position in high score table for the game
     *     'user' => User, // Optional
     *     'score' => int, // Optional
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function answerInlineQuery(array $params = [])
    {
        $body = $this->send("/answerInlineQuery", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * This object represents one row of the high scores table for a game.
     * 
     * ```php
     * Yii::$app->telegram->inlineQuery([
     *     'id' => int, // Unique identifier for this query
     *     'from' => User, // Sender
     *     'location' => Location, // Optional. Sender location, only for bots that request user location
     *     'query' => string, // Text of the query (up to 256 characters)
     *     'offset' => string, // Offset of the results to be returned, can be controlled by the bot
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function inlineQuery(array $params = [])
    {
        $body = $this->send("/inlineQuery", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * This object represents one row of the high scores table for a game.
     * 
     * ```php
     * Yii::$app->telegram->kickChatMember([
     *     'chat_id' => int, // Unique identifier for the target group or username of the target supergroup or channel
     *     'user_id' => int, // Unique identifier of the target user
     *     'until_date' => int, // Date when the user will be unbanned, unix time.
     *							// If user is banned for more than 366 days or less than 30 seconds from the
     *							// current time they are considered to be banned forever
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function kickChatMember(array $params = [])
    {
        $body = $this->send("/kickChatMember", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->unbanChatMember([
     *     'chat_id' => int, // Unique identifier for the target group or username of the target supergroup or channel
     *     'user_id' => int, // Unique identifier of the target user
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function unbanChatMember(array $params = [])
    {
        $body = $this->send("/unbanChatMember", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for *    this to work and must have the appropriate admin rights. Pass True for all boolean parameters to lift *        restrictions from a user. Returns True on success.
     * 
     * ```php
     * Yii::$app->telegram->restrictChatMember([
     *     'chat_id' => int, // Unique identifier for the target group or username of the target supergroup or *                              //channel
     *     'user_id' => int, // Unique identifier of the target user
     *     'until_date' => int, // Date when the user will be unbanned, unix time.
     *							// If user is banned for more than 366 days or less than 30 seconds from the
     *							// current time they are considered to be banned forever
     *     'can_send_messages' => bool  // Pass True, if the user can send text messages,
     * 								    // contacts, locations and venues
     * ]);
     * ```
     * 
     * @param array $params
     */
    public function restrictChatMember(array $params = [])
    {
        $body = $this->send("/restrictChatMember", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function promoteChatMember(array $params = [])
    {
        $body = $this->send("/promoteChatMember", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function exportChatInviteLink(array $params = [])
    {
        $body = $this->send("/exportChatInviteLink", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function deleteMessage(array $params = [])
    {
        $body = $this->send("/deleteMessage", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function deleteChatPhoto(array $params = [])
    {
        $body = $this->send("/deleteChatPhoto", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function setChatTitle(array $params = [])
    {
        $body = $this->send("/setChatTitle", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function setChatDescription(array $params = [])
    {
        $body = $this->send("/setChatDescription", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function unpinChatMessage(array $params = [])
    {
        $body = $this->send("/unpinChatMessage", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function pinChatMessage(array $params = [])
    {
        $body = $this->send("/pinChatMessage", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function leaveChat(array $params = [])
    {
        $body = $this->send("/leaveChat", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function setChatStickerSet(array $params = [])
    {
        $body = $this->send("/setChatStickerSet", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * @param array $params
     */
    public function deleteChatStickerSet(array $params = [])
    {
        $body = $this->send("/deleteChatStickerSet", $params);
        $response = new Response($body);

        return $response;
    }

    /**
     * ```php
     * Yii::$app->telegram->getFile([
     *		'file_id' => $file_id
     *	]);
     * ```
     * 
     * @param array $params
     */
    public function getFile($params)
    {
        $body = $this->send("/getFile", $params);

        return $body;
    }

    /**
     * Return file url by file_id
     * 
     * ```php
     * Yii::$app->telegram->getFileUrl([
     *		'file_id' => $file_id
     *	]);
     * ```
     * 
     * @param array $params
     */
    public function getFileUrl($params)
    {
        $body = json_decode(json_encode($this->send("/getFile", $params)), false);
        if ($body->ok && isset($body->result) && isset($body->result->file_path)) {
            return $this->apiUrl . "/file/bot" . $this->botToken . "/" . $body->result->file_path;
        }

        return false;
    }

    /**
     * @param array $params
     */
    public function sendMediaGroup($params)
    {
        $body = $this->send("/sendMediaGroup", $params);
        // $response = new Response($body);

        return $body;
    }
}
