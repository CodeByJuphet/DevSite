<?php
/*template name: example page

*/

//$url_getresponse = plugins_url('instaport-popup/getresponse/jsonRPCClient.php');
//var_dump($url_getresponse);
require_once("wp-content/plugins/instaport-popup/getresponse/jsonRPCClient.php");

# your API key available at http://www.getresponse.com/my_api_key.html

$api_key = '5c34805a38b85a308ca3e997f891f830'; //Place API key here
$api_url = 'http://api2.getresponse.com';

# initialize JSON-RPC client
$client = new jsonRPCClient($api_url);
// Add contact to selected campaign id
try{
$result_contact = $client->add_contact(
$api_key,
array (
'campaign' => 'p3KoN',
'name' => ' Subscriber Name',
'email' => 'wasppeter@gmail.com'
)
);
echo "<p style='color: blue; font-size:24px;'> Contact Added </p>";
}

catch (Exception $e) {

echo $e->getMessage();
}
/*
|----------------------------------
|------Aweber Add Subscriber-------
|----------------------------------
*/
<?php
// Complete example on how to add a subscriber to your List.

// Refer to our getting started guide for a complete API walkthrough
// https://labs.aweber.com/getting_started/main

require_once('wp-content/plugins/aweber_api/aweber_api.php');

$consumerKey    = '***'; # put your credentials here
$consumerSecret = '***'; # put your credentials here
$accessKey      = '***'; # put your credentials here
$accessSecret   = '***'; # put your credentials here
$account_id     = '***'; # put the Account ID here
$list_id        = '***'; # put the List ID here

$aweber = new AWeberAPI($consumerKey, $consumerSecret);

try {
    $account = $aweber->getAccount($accessKey, $accessSecret);
    $listURL = "/accounts/{$account_id}/lists/{$list_id}";
    $list = $account->loadFromUrl($listURL);

    # create a subscriber
    $params = array(
        'email' => 'johndoe@example.com',
        'ip_address' => '127.0.0.1',
        'ad_tracking' => 'client_lib_example',
        'misc_notes' => 'my cool app',
        'name' => 'John Doe',
        'custom_fields' => array(
            'Car' => 'Ferrari 599 GTB Fiorano',
            'Color' => 'Red',
        ),
    );
    $subscribers = $list->subscribers;
    $new_subscriber = $subscribers->create($params);

    # success!
    print "A new subscriber was added to the $list->name list!";

} catch(AWeberAPIException $exc) {
    print "<h3>AWeberAPIException:</h3>";
    print " <li> Type: $exc->type              <br>";
    print " <li> Msg : $exc->message           <br>";
    print " <li> Docs: $exc->documentation_url <br>";
    print "<hr>";
    exit(1);
}
?>