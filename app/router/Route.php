<?php

/**
 * @nicoto @rolandkuku :
 * Créer une méthode group qui sera appellée avec Route::group permettant de générer une collection de routes
 * Rajouter la méthode avec les bons paramètres dans l'interface
 * Plusieurs group possibles : Group par namespace, Group par controller, Group par prefix.
 *
 * @florian @gorfy :
 * Créer les méthodes get, post, put, patch, delete
 * Rajouter les méthodes avec les bons paramètres dans l'interface
 * Gérer les paramètres envoyés dans l'url de type : {id}
 * Gérer les paramètres optionnels envoyé dans l'url de type : {name?}
 *
 * @Everyone :
 * Créer la methode match qui permet de matcher en fonction de l'url
 * Créer la méthode any qui permet d'ajouter des paramètres à toutes les routes
 * Rajouter les méthodes dans l'interface avec les bons paramètres
 */

namespace Playnow\app\router;

class Route implements RouteInterface
{
    protected $route;

    public function setRoute(Route $route)
    {
        $this->route = $route;
    }

    public function get($uri)
    {
        return new Route("GET", $uri);
    }

    public function post($uri)
    {
        return new Route("POST", $uri);
    }

    public function put($uri)
    {
        return new Route("PUT", $uri);
    }

    public function patch($uri)
    {
        return new Route("PATCH", $uri);
    }

    public function delete($uri)
    {
        return new Route("DELETE", $uri);
    }
}