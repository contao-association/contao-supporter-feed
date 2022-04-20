<?php

declare(strict_types=1);

namespace ContaoAssociation\SupporterFeedBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoAssociation\SupporterFeedBundle\ContaoAssociationSupporterFeedBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig(ContaoAssociationSupporterFeedBundle::class))
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
