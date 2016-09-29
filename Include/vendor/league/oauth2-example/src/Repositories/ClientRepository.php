<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */
namespace OAuth2ServerExamples\Repositories;
use League\OAuth2\Server\Repositories\ClientRepositoryInterface;
use OAuth2ServerExamples\Entities\ClientEntity;

class ClientRepository implements ClientRepositoryInterface
{
  
    private $calculation_secret = '$2y$10$VYQLDupKUF6a40.Sq3.OXO3QLk5BHH//2PI3AfNlvSKtxXif1q5a6';
    private $app_secret = '$2y$10$0UjMno5BDJxoWGYO8qGhle.YpbVzyeTvhnpVeYPbLQiDpNYR4IiVm';
    /**
     * {@inheritdoc}
     */
    public function getClientEntity($clientIdentifier, $grantType, $clientSecret = null, $mustValidateSecret = true)
    {

        $clients = [
            'calculation' => [
                'secret'          => $this->calculation_secret,
                'name'            => 'Calculation tool',
                'redirect_uri'    => 'https://xlab.nhl.nl/SmartCityService',
                'is_confidential' => true,
            ],
            'app' => [
                'secret'          => $this->app_secret,
                'name'            => 'App user',
                'redirect_uri'    => 'https://xlab.nhl.nl/SmartCityService',
                'is_confidential' => true,
            ],
        ];
        // Check if client is registered
        if (array_key_exists($clientIdentifier, $clients) === false) {
            return;
        }
        if (
            $mustValidateSecret === true
            && $clients[$clientIdentifier]['is_confidential'] === true
            && password_verify($clientSecret, $clients[$clientIdentifier]['secret']) === false
        ) {
            return;
        }
        $client = new ClientEntity();
        $client->setIdentifier($clientIdentifier);
        $client->setName($clients[$clientIdentifier]['name']);
        $client->setRedirectUri($clients[$clientIdentifier]['redirect_uri']);
        return $client;
    }
}