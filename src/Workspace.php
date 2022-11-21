<?php

class Workspace { 
    public array $members = [];
    public array $chats = [];
    public string $url;

    //"static" cuz this value is the same for all workspace objects
    public static string $urlDomain = '.flack.app'; 
}