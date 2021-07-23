<?php

namespace Codemonkey76\ClickSend;

use ClickSend\Api\SMSApi;
use ClickSend\Model\SmsMessage;
use GuzzleHttp\Client;
use Illuminate\Contracts\Config\Repository as Config;
use ClickSend\Configuration;
class ClickSend
{
    protected string $from = '';
    protected string $to = '';
    protected SMSApi $apiInstance;
    protected SmsMessage $sms_message;

    public static function make(): self
    {
        return app(static::class);
    }

    public function __construct(Config $config)
    {
        $apiInstance = new SMSApi(
            new Client(),
            Configuration::getDefaultconfiguration()
                ->setUsername($config['clicksend.username'])
                ->setPassword($config['clicksend.password'])
        );
        //$sms_message = new SmsMessage()
    }
    public function message(string $message)
    {

    }

    // Build your next great package.
}
