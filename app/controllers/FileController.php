<?php
/**
 * Created by PhpStorm.
 * User: zhualex
 * Date: 16/1/24
 * Time: 上午12:28
 */


use Phalcon\Mvc\Controller;

class FileController extends Controller
{
    public function uploadAction()
    {
        // Check if the user has uploaded files
        if ($this->request->hasFiles()) {

            // Print the real file names and sizes
            foreach ($this->request->getUploadedFiles() as $file) {

                // Print file details
                echo $file->getName(), " ", $file->getSize(), "\n";

                // Move the file into the application
                $file->moveTo('files/' . $file->getName());
            }
        }
    }
}