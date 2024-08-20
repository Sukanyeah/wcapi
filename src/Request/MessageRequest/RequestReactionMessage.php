<?php

namespace Sukanyeah\WhatsAppCloudApi\Request\MessageRequest;

use Sukanyeah\WhatsAppCloudApi\Request\MessageRequest;

final class RequestReactionMessage extends MessageRequest
{
    /**
     * {@inheritdoc}
     */
    public function body(): array
    {
        $body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            $this->message->type() => [
                'message_id' => $this->message->message_id(),
                'emoji' => $this->message->emoji(),
            ],
        ];

        return $body;
    }
}
