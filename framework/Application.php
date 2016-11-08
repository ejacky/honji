<?php
namespace Honji;

use Pimple\Container;
use Honji\Core\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class Application extends Container
{
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }

    public function handle($request)
    {
        $route = $this['router']->dispatch($request);
        $response = $route->send();

        $response = $this->prepareResponse($request, $response);

        return $response;
    }

    public function prepareResponse($request, $response)
    {
        if ($response instanceof PsrResponseInterface) {
            $response = (new HttpFoundationFactory)->createResponse($response);
        } elseif (! $response instanceof SymfonyResponse) {
            $response = new Response($response);
        }

        return $response->prepare($request);

    }
}