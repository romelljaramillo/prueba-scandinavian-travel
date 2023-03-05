<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Translations;

class TranslationsController extends Controller
{
    protected $translations;

    public function __construct(Translations $translations)
    {   
        $this->translations = $translations;
    }

    public function index()
    {
        $translations = $this->translations->all();

        foreach ($translations as $translation) {
            $resul[] = $this->porcessLangs($translation);
        }
        $translations = $resul;

        $groups = $this->translations->getAllGroup();
        $langs = $this->getLangs();
       
        return view('translations.index', compact('translations','groups','langs'));
    }

    public function show(string $full_key)
    {
        $translations = $this->translations->find($full_key);
        $translations = $this->porcessLangs($translations);
        $translations->langs = $this->getLangs();

        return $translations;
    }

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
