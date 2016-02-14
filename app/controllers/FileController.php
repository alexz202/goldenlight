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
                $ext = pathinfo($file->getName(), PATHINFO_EXTENSION);
                // Print file details
                $file_name = sha1(time() . mt_rand(111111, 999999)) . "." . $ext;
               // echo $file_name;
                $data=array(
                    'key'=>$file->getKey(),
                    'o_name'=>$file->getName(),
                    'new_name'=>$file_name,
                );
               echo json_encode($data);
               // echo json_encode($file);
                // Move the file into the application
               // $file->moveTo('files/' . $file->getName());
             //  $file->moveTo('files/' . $file_name);
            }
        }
    }

}