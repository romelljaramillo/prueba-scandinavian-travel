<?php

namespace App\Http\Controllers;

use App\Repositories\Translations;

class TranslationsController extends Controller
{
    protected $translations;

    public function __construct(Translations $translations)
    {   
        $this->translations = $translations;
    }

    /**
     * Renderiza la vista index
     *
     * @return void
     */
    public function index()
    {
        $translations = $this->translations->all();

        foreach ($translations as $translation) {
            $resul[] = $this->porcessLangs($translation);
        }

        $translations = $resul;

        $groups = $this->translations->getAllGroup();
        $langs = $this->getLangs();
       
        return view('index', compact('translations','groups','langs'));
    }

    /**
     * Devuelve la información del grupo filtrado
     *
     * @param string $full_key
     * @return void
     */
    public function show(string $full_key)
    {
        $translations = $this->translations->find($full_key);
        $translations = $this->porcessLangs($translations);
        $translations->langs = $this->getLangs();

        return $translations;
    }

    /**
     * Transforma la información asignado la traducción ingles 
     * Si no tiene traducción
     *
     * @param obj $translation
     * @return obj
     */
    public function porcessLangs($translation)
    {
        $langs = $this->getLangs();
        foreach ($langs as $iso => $lang){
            if (!isset( $translation->text->$iso )){
                $translation->text->$iso = $translation->text->en;
            }
        } 
        return $translation;
    }

    /**
     * Retorna los idiomas usados
     *
     * @return array
     */
    public function getLangs()
    {
        return [
            'en' => 'English',
            'es' => 'Español',
            'de' => 'Deutsch',
            'fr' => 'Français',
            'it' => 'Italiano',
            'da' => 'Dansk'
        ];
    }
}
