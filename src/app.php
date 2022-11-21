<?php

include '_includes.php';

$admin = new Member();
$admin->username = 'acme_admin';
$admin->createWorkspace();

$member = new Member();
$member->username = 'acme_member';
$admin->addWorkspaceMember($member);

$workspace = new Workspace();
$chat = new Chat();
$message = new Message();

//verify your classes are declared properly and print them in terminal
//echonl(get_declared_classes());
echonl($workspace);