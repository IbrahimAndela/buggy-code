<?php
/**
 * Class Files
 * few methods to access files supplied to the class
 */
class Files extends filegroup {
    private $file = '';

    public final function __constructer( $file) {
        $this->file = $file;
    }

    protected function getFile()
    {
        $openFile = FALSE;
        if(file_exists($this->file)) {
            $openFile = fopen($this->file, 'r', 'ftp://assets/file.txt');
        }

        return $openFile;
    }

    private function getFileContents()
    {
        $conts = $this->$getFile();
        if($conts !== FALSE) {
             return fgetcsv($conts);
        }
        return error_content_is_invalid;
    }

}