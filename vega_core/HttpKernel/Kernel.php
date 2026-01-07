<?php
namespace VegaCore\HttpKernel;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class Kernel implements KernelInterface {

    protected ?string $environnent = null;

    protected ?bool $debug = null; 

    public function __construct(string $environnent, bool $debug)
    {
        $this->environnent  = $environnent;
        $this->debug        = $debug;
    }

    /**
     * Initialise le noyau
     * 
     * @todo Ses rôles
     *  - Configurer l'affichage des messages d'erreurs en fonction de l'environnment de travail
     *  - Configurer le déboggeur
     *  - Charger le conteneur de services
     *
     * @return void
     */
    public function boot(): void {

    }

    /**
     * Traite la requête du client et retourne la réponse correspondante.
     *
     * @param Request $request
     * @return Response
     */
    public function handle(Request $request): Response {
        return new Response("Hello World");
    }
}