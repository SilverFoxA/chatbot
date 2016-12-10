<?
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "Authorization: Bearer 7LVBNWN6VGXMIKTJNXBDVCDAG7AOJAQW\r\n"
    )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://api.wit.ai/message?v=20161210&q=What%27s+the+weather+in+Bangalore', false, $context);

//print_r($ch);

print_r($file);

?>