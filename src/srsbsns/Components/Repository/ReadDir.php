<?php

namespace srsbsns\Components\Repository;

class ReadDir
{
    public function read($filePath)
    {
        $dir = opendir($filePath);

        $fileList = array();
        while ($dir && ($file = readdir($dir)) !== false) {
            if ($file != "." && $file != ".." && $file!= ".gitkeep") {
               $fileList[] = $file;
            }
        }
        return $fileList;
    }
}
