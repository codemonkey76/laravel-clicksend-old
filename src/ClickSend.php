<?php

namespace Codemonkey76\ClickSend;

use ClickSend\Api\SMSApi;
use ClickSend\ApiException;
use ClickSend\Model\SmsMessage;
use ClickSend\Model\SmsMessageCollection;
use GuzzleHttp\Client;
use Illuminate\Contracts\Config\Repository as Config;
use ClickSend\Configuration;
class ClickSend
{
    protected SMSApi $apiInstance;
    protected SmsMessage $sms_message;

    public static function make(): self
    {
        return app(static::class);
    }

    public function __construct(Config $config)
    {
        $this->apiInstance = new SMSApi(
            new Client(),
            Configuration::getDefaultconfiguration()
                ->setUsername($config['clicksend.username'])
                ->setPassword($config['clicksend.password'])
        );
        $this->sms_message = new SmsMessage();
    }

    public function from(string $from): self
    {
        $this->sms_message->setFrom($from);

        return $this;
    }

    public function to(string $to): self
    {
        $this->sms_message->setTo($to);

        return $this;
    }

    public function message(string $message): self
    {
        $this->sms_message->setBody($message);

        return $this;
    }

    public function send(): bool
    {
        try {
            $result = $this->apiInstance->smsSendPost(new SmsMessageCollection(['messages' => [$this->sms_message]]));
            info($result);
        } catch (ApiException $ex) {
            info($ex->getMessage());

            return false;
        }
        return true;
    }

    public function getApiInstance(): SMSApi
    {
        return $this->apiInstance;
    }

    public function getSms(): SmsMessage
    {
        return $this->sms_message;
    }
}
