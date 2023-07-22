<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Vérifiez si l'utilisateur est authentifié
        // Redirigez vers une page de connexion ou effectuez d'autres actions si l'utilisateur n'est pas authentifié
        $auth = session()->get('isLoggedIn');

        if (!$auth) {
            return redirect()->to('/');
        }
        
        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Aucune action après l'exécution de la route n'est nécessaire pour ce filtre
    }
}
