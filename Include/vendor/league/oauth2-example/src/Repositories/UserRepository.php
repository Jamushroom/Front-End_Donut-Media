<?php

namespace OAuth2ServerExamples\Repositories;
use League\OAuth2\Server\Entities\ClientEntityInterface;
use League\OAuth2\Server\Repositories\UserRepositoryInterface;
use OAuth2ServerExamples\Entities\ScopeEntity;
use OAuth2ServerExamples\Entities\UserEntity;

require_once('/home/bauke/include/database.php');

global $database;

class UserRepository implements UserRepositoryInterface {
    
    public function getUserEntityByUserCredentials( $username, $password, $grantType, ClientEntityInterface $clientEntity ) {

        if ($this->validUser($username, $password)) {
            $scope = new ScopeEntity();
            $scope->setIdentifier('email');
            $scopes[] = $scope;
            return new UserEntity();
        }
        
        return;
        
    }
    
    public function validUser($email, $password) {

        global $database;

        // Using prepared statements means that SQL injection is not possible.
        if ($stmt = $database->prepare("SELECT userID, username, password FROM users WHERE email = ? LIMIT 1")) {

            $stmt->bind_param('s', $email);  // Bind "$email" to parameter.
            $stmt->execute();    // Execute the prepared query.
            $stmt->store_result();

            // get variables from result.
            $stmt->bind_result($user_id, $username, $db_password);
            $stmt->fetch();

            if ($stmt->num_rows == 1) {

                // Check if the password in the database matches
                // the password the user submitted. We are using
                // the password_verify function to avoid timing attacks.
                if (password_verify($password, $db_password)) {
                    
                    // Succesfull Login.
                    return true;
                    
                } else {

                    // Incorrect password
                    return false;
                    
                }
                
            } else {
                
                // User doesn't exist
                return false;
                
            }
        }
    }
}