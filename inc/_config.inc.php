<?php

define('_MYSQL_HOST', 'localhost');
define('_MYSQL_USER', 'demo');
define('_MYSQL_DB', 'testData');
define('_MYSQL_PASS', 'password');


// oAuth details



// TENANTID: Your tenant's ID if you set up the app reg as single tenant, otherwise 'common'

//Scope needs to include the services you wish to access - at a minimum you'll need openid and offline_access for logging on to work. Add in user.read if you want to query user profile via Graph. Separate with %20.

define('_OAUTH_TENANTID', '058d5bed-f85a-4040-9f94-f15cbc4fb133');
define('_OAUTH_CLIENTID', 'e7133ecf-40b8-48cf-bc2d-5fc83242861d');
define('_OAUTH_LOGOUT', 'https://login.microsoftonline.com/common/wsfederation?wa=wsignout1.0');
define('_OAUTH_SCOPE', 'openid%20offline_access%20profile%20user.read');

// Define either the client secret, or the client certificate details
// method = 'certificate' or 'secret'

define('_OAUTH_METHOD', 'certificate');

define('_OAUTH_SECRET', 'qBa8Q~GW5lqirV0qFif.GrMTMhg7S36vVKW-pbYV');
define('_OAUTH_AUTH_CERTFILE', '/path/to/certificate.crt');
define('_OAUTH_AUTH_KEYFILE', '/path/to/privatekey.pem');

// on Windows, the certificate paths should be in the form c:/path/to/cert.crt


// URL to this website, no trailing slash.
define('_URL', 'https://localhost/test-Azure-phpv01/PHPAzureADoAuth/www');
?>

