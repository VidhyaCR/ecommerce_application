<?php
// src/Middleware/AdminAuthorizationMiddleware.php

namespace App\Middleware;

use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\I18n\Time;
use Cake\Utility\Hash;
use Cake\Utility\Security;


class AdminAuthorizationMiddleware 
{
    public function __invoke(ServerRequest $request, Response $response, $next) 
    {
        // Check if the request is for an admin prefix URL
        $prefix = $request->getParam('prefix');
        if ($prefix === 'admin') {
            // Check if the user is an admin
            if ($request->getAttribute('identity')->User['roles_user']['role']['name']!= 'admin') {
                // Redirect or return forbidden response for non-admin users
                $response = new Response();
                $response = $response->withStatus(403);
                return $response;
            }
        }

        // Allow the request to continue if the user is authorized
        return $next($request, $response);
    }
}
