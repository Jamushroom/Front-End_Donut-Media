<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */
namespace OAuth2ServerExamples\Repositories;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Repositories\ScopeRepositoryInterface;
use OAuth2ServerExamples\Entities\ScopeEntity;
class ScopeRepository implements ScopeRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getScopeEntityByIdentifier($scopeIdentifier)
    {
      //print_r(PHP_EOL);
      //$e = new \Exception;
      //var_dump($e->getTraceAsString());

        $scopes = [
            'app' => [
                'description' => 'App user',
            ],
            'calculation' => [
                'description' => 'Calculation program, generating data from question answers',
            ],
            'admin' => [
                'description' => 'Administrator, global rights',
            ],
        ];
        if (array_key_exists($scopeIdentifier, $scopes) === false) {
            return;
        }
        $scope = new ScopeEntity();
        $scope->setIdentifier($scopeIdentifier);
        return $scope;
    }
    /**
     * {@inheritdoc}
     */
    public function finalizeScopes(
        array $scopes,
        $grantType,
        ClientEntityInterface $clientEntity,
        $userIdentifier = null // Authorization method > password / 
    ) {
      
      $user_scopes = [
          'app' => [
              'app' => ''
          ],
          'calculation' => [
              'app' => '',
              'calculation' => ''
          ]
      ];
      
      // Get client identifier
      $clientIdentifier = $clientEntity->getIdentifier();
      
      // Check if client exists
      if (array_key_exists($clientIdentifier, $user_scopes) === false) {
        return;
      }
      
      // Retrieve client scopes
      $clientScopes = $user_scopes[$clientIdentifier];

      // Loop through requested scopes
      foreach($scopes as $scopeKey => $scope) {
        
        // Get scope identifier
        $scopeIdentifier = $scope->getIdentifier();
        
        // Check if the client is allowed to have the identifier
        if (array_key_exists($scopeIdentifier, $clientScopes) === false) {
          
          // Remove incorrect scopes
          unset($scopes[$scopeKey]);
          
        }
        
      }

      // Return correct scopes
      return $scopes;
      
    }
    
}