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
     * @var
     */
    protected $rootDir;

    /**
     * DefaultController constructor.
     *
     * @param TwigEngine $templating
     * @param $rootDir
     */
    public function __construct(
        TwigEngine $templating,
        $rootDir
    ) {
        $this->templating = $templating;
        $this->rootDir = $rootDir;
    }

    /**
     * @param ServerRequestInterface $request
     * @return HtmlResponse
     */
    public function __invoke(ServerRequestInterface $request)
    {
        // replace this example code with whatever you need
        return new HtmlResponse(
            $this->templating->render('/app/views/default/index.html.twig', [
                'base_dir' => realpath($this->rootDir . '/..'),
            ])
        );
    }
}
