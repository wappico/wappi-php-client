<?php

declare(strict_types=1);

namespace Wappi\Client\Traits;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Dto\InteractiveList;
use Wappi\Client\Dto\InteractiveListSection;
use Wappi\Client\Rules\AudioRules;
use Wappi\Client\Rules\ContactRules;
use Wappi\Client\Rules\DocumentRules;
use Wappi\Client\Rules\ImageRules;
use Wappi\Client\Rules\InteractiveButtonRules;
use Wappi\Client\Rules\InteractiveDocumentRules;
use Wappi\Client\Rules\InteractiveImageRules;
use Wappi\Client\Rules\InteractiveListSectionOptionRules;
use Wappi\Client\Rules\InteractiveTextRules;
use Wappi\Client\Rules\InteractiveVideoRules;
use Wappi\Client\Rules\LocationRules;
use Wappi\Client\Rules\MessageRules;
use Wappi\Client\Rules\StickerRules;
use Wappi\Client\Rules\TemplateRules;
use Wappi\Client\Rules\VideoRules;


trait Validate
{
    /**
     * TODO
     * @throws \Exception
     */
    public function validate()
    {
        $validation = match(self::getMessageType()) {
            MessageType::AUDIO => (new AudioRules),
            MessageType::CONTACT => (new ContactRules),
            MessageType::DOCUMENT => (new DocumentRules),
            MessageType::INTERACTIVE_LIST => (new InteractiveList),
            MessageType::INTERACTIVE_LIST_SECTION => (new InteractiveListSection),
            MessageType::INTERACTIVE_LIST_SECTION_OPTION => (new InteractiveListSectionOptionRules),
            MessageType::INTERACTIVE_TEXT => (new InteractiveTextRules),
            MessageType::INTERACTIVE_IMAGE => (new InteractiveImageRules),
            MessageType::INTERACTIVE_VIDEO => (new InteractiveVideoRules),
            MessageType::INTERACTIVE_DOCUMENT => (new InteractiveDocumentRules),
            MessageType::INTERACTIVE_BUTTON => (new InteractiveButtonRules),
            MessageType::LOCATION => (new LocationRules),
            MessageType::IMAGE => (new ImageRules),
            MessageType::STICKER => (new StickerRules),
            MessageType::TEMPLATE => (new TemplateRules),
            MessageType::MESSAGE => (new MessageRules),
            MessageType::VIDEO => (new VideoRules),
            default => throw new \Exception('Not implemented'),
        };
    }
}