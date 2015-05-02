<?php

namespace module;

class Context extends \module\sys\ProtoContext {

    protected function getAuth() {
        return new \module\auth\BasicAuth();
    }
    
    protected function getRender() {
        return new \module\Render();
    }
    
    protected function getManage() {
        return new \module\Manage();
    }
    
    protected function getMarkdown() {
        require_once 'module/lib/Markdown_Parser.php';
        return new \Markdown_Parser();
    }
    
}
