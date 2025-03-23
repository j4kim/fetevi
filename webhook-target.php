<?php

$payload = json_decode($_POST['payload']);

if (@$payload->ref == "refs/heads/2025") {
    echo shell_exec("git pull 2>&1");
}