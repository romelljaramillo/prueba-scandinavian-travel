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
        $groups = $this->translations->getAllGroup();
        $langs = $this->getLangs();
        // dump($groups);
        return view('translations.index', compact('translations','groups','langs'));
    }

    public function show(string $id)
    {
        $Translation = $this->translations->find($id);
        return view('translations.show', compact('translation'));
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
