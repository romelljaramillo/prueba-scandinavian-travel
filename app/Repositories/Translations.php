<?php

namespace App\Repositories;

class Translations extends GuzzleHttpRequest 
{
    protected $client;

    /**
     * Devuelve todas las translations
     *
     * @return json
     */
    public function all()
    {
        // https://practical-neumann.62-151-178-253.plesk.page/api/translations
        return $this->get('translations');
    }
    
    /**
     * Devuelve una translation
     *
     * @return json
     */
    public function find(string $translation_full_key)
    {
        // https://practical-neumann.62-151-178-253.plesk.page/api/translations/{translation_full_key}
        return $this->get("translations/{$translation_full_key}");
    }

    /**
     * Devuelve todos los grupos
     *
     * @return json
     */
    public function getAllGroup()
    {
         // https://practical-neumann.62-151-178-253.plesk.page/api/translationgroups
        return $this->get('translationgroups');
    }

    /**
     * Devuelve todos los navbar.cars
     *
     * @return json
     */
    public function getAllNavCars()
    {
        // https://practical-neumann.62-151-178-253.plesk.page/api/translations/navbar.cars
        return $this->get('navbar.cars');
    }
}
