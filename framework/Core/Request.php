<?php
namespace Honji\Core;

use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class Request extends SymfonyRequest
{

    public static function capture()
    {
        static::enableHttpMethodParameterOverride();

        return static::createFromBase(SymfonyRequest::createFromGlobals());
    }

    public static function createFromBase(SymfonyRequest $request)
    {
        if ($request instanceof static) {
            return $request;
        }

        $content = $request->content;

        $request = (new static)->duplicate(

            $request->query->all(), $request->request->all(), $request->attributes->all(),

            $request->cookies->all(), $request->files->all(), $request->server->all()
        );

        $request->content = $content;

        //$request->request = $request->getInputSource();

        return $request;
    }

    public function duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)
    {
        return parent::duplicate($query, $request, $attributes, $cookies, array_filter((array) $files), $server);
    }
}