<?php

class Collection extends Route
{
    protected $subRoutes;

    /**
     * @param $uri
     */
    public function __construct($uri)
    {
        parent::__construct(NULL, $uri);
        $this->subRoutes = [];
    }

    /**
     * @param Route $subRoute
     * @return $this
     */
    public function addSubRoute(Route $subRoute)
    {
        $this->subRoutes[] = $subRoute;
        return $this;
    }
}