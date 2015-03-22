<?php

namespace module;

class Render {
    
    private function convertName($name) {
        if ($name[0] == '-') {
            $name[0] = '_';
        }
        return "./data/$name.txt";
    }

    function loadDataFilePlain($name) {
        $name = $this->convertName($name);
        if (!file_exists($name)) {
            return false;
        }
        return file_get_contents($name);
    }

    function loadDataFile($name) {
        $text = $this->loadDataFilePlain($name);
        if ($text === false) {
            return false;
        }
        if (strpos($text, 'format:plain') === false) {
            $text = $this->ctx->markdown->parse($text);
        }
        return $text;
    }
    
    function saveDataFile($name, $text) {
        file_put_contents($this->convertName($name), $text);
    }

}

