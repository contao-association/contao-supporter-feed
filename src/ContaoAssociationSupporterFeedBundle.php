<?php

declare(strict_types=1);

namespace ContaoAssociation\SupporterFeedBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoAssociationSupporterFeedBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
