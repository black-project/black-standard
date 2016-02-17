<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Symfony\Bridge\Twig\TwigEngine;
use Zend\Diactoros\Response\HtmlResponse;

/**
 * Class DefaultController
 */
class DefaultController
{
    /**
     * @var TwigEngine
     */
    protected $templating;

    /**
     * DefaultController constructor.
     *
     * @param TwigEngine $templating
     */
    public function __construct(TwigEngine $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @param ServerRequestInterface $request
     * @return HtmlResponse
     */
    public function __invoke(ServerRequestInterface $request)
    {
        // replace this example code with whatever you need
        return new HtmlResponse(
            $this->templating->render('/app/default/index.html.twig', [
                'base_dir' => '/app',
            ])
        );
    }
}
