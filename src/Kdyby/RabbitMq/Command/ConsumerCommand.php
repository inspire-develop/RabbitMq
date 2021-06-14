<?php

declare(strict_types = 1);

namespace Kdyby\RabbitMq\Command;

class ConsumerCommand extends \Kdyby\RabbitMq\Command\BaseConsumerCommand
{
    public static function getDefaultName(): string
    {
        return 'rabbitmq:consumer';
    }

    protected function configure(): void
	{
		parent::configure();

		$this->setName('rabbitmq:consumer');
		$this->setDescription('Starts a configured consumer');
	}

}
