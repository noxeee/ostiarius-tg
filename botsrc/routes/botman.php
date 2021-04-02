<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');

//$botman->on('event') when someone new joins say hi and when they leave

// /help command
// /start
// /settings -> set everyone or all or custom message

// @all Commands with various positioning of the @all keyword
/*
$botman->hears('guys', function ($bot) {
    $bot->reply('pregnant'); //make it reply the image?
});*/

$botman->hears('/(g)(u)*(y)*(s)*/i', function ($bot) {
    $bot->reply('pregnant'); //make it reply the image?
});

$botman->hears('@all', function ($bot) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('@all {message}', function ($bot, $message) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('{message} @all', function ($bot, $message) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('{message1} @all {message2}', function ($bot, $message1, $message2) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

// alternatively use @everyone
$botman->hears('@everyone', function ($bot) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('@everyone {message}', function ($bot, $message) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('{message} @everyone', function ($bot, $message) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

$botman->hears('{message1} @everyone {message2}', function ($bot, $message1, $message2) {
    $bot->reply('I cannot tag all people yet, but maybe soon!');
});

