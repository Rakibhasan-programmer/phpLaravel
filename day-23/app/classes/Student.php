<?php


namespace App\classes;


class Student
{
    public $students;
    public $category_id;
    public $name;
    public $email, $phone, $address, $image;
    public $imageName, $imageDirectory;


    public function __construct($data, $file)
    {
        $this->category_id = $data['category_id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
        $this->image = $file['fileToUpload'];
    }
    public function allStudentInfo(){
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/images/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        echo "success";
    }


}