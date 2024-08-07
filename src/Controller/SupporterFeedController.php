<?php

declare(strict_types=1);

namespace ContaoAssociation\SupporterFeedBundle\Controller;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[AsContentElement(category: 'includes', renderer: 'esi')]
class SupporterFeedController extends AbstractContentElementController
{
    public function __construct(private readonly HttpClientInterface $httpClient)
    {
    }

    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $data = $this->httpClient->request('GET', 'https://members.contao.org/supporter.json')->toArray();
        $data = array_filter($data, static fn ($v) => $v['level'] === $model->supporter);

        $template->supporters = $data;

        $response = $template->getResponse();
        $response->setSharedMaxAge(12 * 60 * 60); // Cache for 12 hours

        return $response;
    }
}
