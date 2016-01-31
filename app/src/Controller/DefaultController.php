<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Twig\TwigEngine;
use Zend\Diactoros\Response\HtmlResponse;

/**
 * Class DefaultController
 *
 * @Route(service="app.controller.default")
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
     * @Route("/", name="homepage")
     *
     * @param ServerRequestInterface $request
     * @return HtmlResponse
     */
    public function indexAction(ServerRequestInterface $request)
    {
        // replace this example code with whatever you need
        return new HtmlResponse(
            $this->templating->render('/app/views/default/index.html.twig', [
                'base_dir' => '/app',
            ])
        );
    }
}
