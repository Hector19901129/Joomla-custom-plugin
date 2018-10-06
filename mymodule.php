<?php 


/*defined('_JEXEC') or die;
$input = JFactory::getApplication()->input;
$name = $input->getString("name");
$email = $input->getString("email");*/
require __DIR__ . '/vendor/autoload.php';
$name = $_POST['name'];
$email = $_POST['email'];

$groupsApi = (new MailerLiteApi\MailerLite("76caca02d8cd9516e44673acf800830d"))->groups();
$GROUP_ID = 10249500;
$subscriber = [
    'email' => $email,
    'fields' => [
        'name' => $name
    ]
];

$response = $groupsApi->addSubscriber($GROUP_ID, $subscriber); // Change GROUP_ID with ID of group you want to add subscriber to

?>