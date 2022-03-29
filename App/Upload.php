<?php

namespace App;

class Upload
{
    public $fieldName;
    public $uploadDirName;
    public $logTxtName;
    public $file;

    public function __construct(string $inputName, string $uploadDirName, string $logTxtName)
    {
        $this->fieldName = $inputName;
        $this->uploadDirName = $uploadDirName;
        $this->logTxtName = $logTxtName;
        $this->file = $_FILES[$inputName];
    }

    protected function isUploaded(): bool
    {
        return (is_uploaded_file($this->file['tmp_name'])) ?: false;
    }

    public function __invoke()
    {
        if ($this->isUploaded()) {
            $this->uploadImage();
        }
    }

    public function uploadImage()
    {
        $uploadDir = __DIR__ . '/..' . '/assets/image/' . $this->uploadDirName . '/';
        $this->log();

        if ($this->file['error'] === 0) {
            $uploadPath = $uploadDir . $this->file['name'];
            move_uploaded_file($this->file['tmp_name'], $uploadPath);
        }

        return $this->file['name'];
    }

    private function log()
    {
        $logTxt = __DIR__ . '/..' . '/assets/txt/' . $this->logTxtName . '.txt';
        if ($this->file['error'] === 0) {
            $newNote = $_SESSION['user'] . ' | ' . date("Y-m-d H:i:s") . ' | ' . $this->file['name'];
            $getAllNotes = file($logTxt);
            $getAllNotes[] = $newNote . "\n";
            file_put_contents($logTxt, $getAllNotes);
        }
        return $this;
    }
}