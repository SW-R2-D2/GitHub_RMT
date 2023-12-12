<?php

/* Строка `namespace App\Telegram;` объявляет пространство имен для класса `Handler`. Пространства имен
используются для организации кода в логические группы и предотвращения конфликтов имен. В этом
случае класс Handler помещается в пространство имен App\Telegram, что означает, что доступ к нему
можно получить с использованием полного имени App\Telegram\Handler. */
namespace App\Telegram;

/* Строка `use DefStudio\Telegraph\Handlers\WebhookHandler;` импортирует класс `WebhookHandler` из
пространства имен `DefStudio\Telegraph\Handlers`. Это позволяет классу Handler расширять класс
WebhookHandler и наследовать его свойства и методы. */
use DefStudio\Telegraph\Handlers\WebhookHandler;

/* Строка `use Illuminate\Support\Stringable;` импортирует класс `Stringable` из пространства имен
`Illuminate\Support`. Это позволяет классу Handler использовать класс Stringable и его методы без
необходимости каждый раз указывать полное пространство имен. */
use Illuminate\Support\Stringable;

/* Handler класс представляет собой обработчик веб-перехватчика PHP, который обрабатывает такие
команды, как «привет», «помощь» и «неизвестная команда». */
class Handler extends WebhookHandler
{

    public function hello(): void
    {
        $this->reply(message: 'Привет! Это твой первый бот на Laravel!');
    }
    public function help(): void
    {
        $this->reply(message: '*Привет!* Пока я умею говорить только привет!');
    }
    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($text->value() === '/start')
        {
            $this->reply(message: 'Рад тебя видеть! Напиши мне что-нибудь');
        }
        else
        {
            $this->reply(message: 'Неизвестная команда');
        }
    }
}