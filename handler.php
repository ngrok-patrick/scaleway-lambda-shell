<?php
function handle($event, $context) {
 	$env = getenv("TEST");
    $output = shell_exec('cp ./jq /bin');
    $output = shell_exec('cp ./bash /bin');

    $output = shell_exec('YOUR SHELL COMMAND HERE');

    return [
        "body" => $output,
        "statusCode" => 200,
    ];
}


