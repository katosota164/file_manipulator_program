<?php
if( $argc === 4 && 
    ( $argv[1] === "reverse"
    ||$argv[1] === "copy"
    ||$argv[1] === "duplicate-contents")) {

        if($argv[1] === "reverse") {
            $content = file_get_contents($argv[2]);
            file_put_contents($argv[3], strrev($content));

        } else if($argv[1] === "copy") {
            $content = file_get_contents($argv[2]);
            file_put_contents($argv[3], $content);

        } else if($argv[1] === "duplicate-contents") {
            $content = file_get_contents($argv[2]);
            $string = $content;
            for($i = 1; $i <= $argv[3]; $i++) {
                $string .= "\n" . $content;
            }
            file_put_contents($argv[2], $string);
        }

    } else if($argc === 5 && $argv[1] === "replace-string") {
        $content = file_get_contents($argv[2]);
        file_put_contents($argv[2], str_replace($argv[3], $argv[4], $content));
    }