<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

/**
 * Create a new api-client instance
 *
 * Replace {yourToken} with your secret token
 *
 * For further informations please visit
 * @see https://developer.checkdomain.de/guide/#1-registration-for-api-access
 */
$client = new \ApiClient\Client(
    'v1',
    '{yourToken}'
);

/**
 * Example: How to delete specific contact
 *
 * Replace {contacts} with identifier
 *
 * For further informations please visit
 * @see https://developer.checkdomain.de/reference/v1/contacts/
 */
$response = $client->delete('contacts/{contacts}');
var_dump($response);
