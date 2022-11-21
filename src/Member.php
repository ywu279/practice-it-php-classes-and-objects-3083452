<?php

class Member {
    const ADMIN_ROLE = 'admin';
    const DEFAULT_ROLE = 'member';
    
    public string $username;
    public string $role = self::DEFAULT_ROLE;
    
    public function addWorkspaceMember(Member $member, Workspace $workspace) {
        // only admin can add members in the workspace
    }

    public function createChat(string $title, Workspace $workspace) {
        // a member can only create chat for the workspace it belongs to
    }

    public function createWorkspace(string $subdomain) {

    }

    public function postMessageToChat(string $content, Chat $chat) {

    }
}