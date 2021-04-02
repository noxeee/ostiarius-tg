<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');


// @all Commands with various positioning of the @all keyword

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

