<?php

include '_includes.php';

$member = new Member();
$workspace = new Workspace();
$chat = new Chat();
$message = new Message();

//verify your classes are declared properly and print them in terminal
//echonl(get_declared_classes());
echonl($workspace);