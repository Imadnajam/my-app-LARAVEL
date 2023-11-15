<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/addligneA','/addligneF','/listeF','/listeFAgadir','/listeVF','/listeDpoids','/listeNcouleur',
        '/listeACVP','/listeAEP23','/listeCountA','/listeMoyenneA','/les_articles_de_F'
    ];
}
