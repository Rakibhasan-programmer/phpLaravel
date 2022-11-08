<?php


namespace App\classes;


class Product
{
    public $product;
    public $category_id;
    public $name;
    public $price;
    public $desc;
    public $image, $imagePath;
    public $imageName, $imageDirectory, $file, $filePath, $fileContent;

    public function __construct($data, $file)
    {
        $this->category_id = $data['category_id'];
        $this->name = $data['name'];
        $this->price = $data['price'];
        $this->desc = $data['desc'];
        $this->image = $file['image'];
    }

    public function getProduct()
    {
        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id, $this->name, $this->price, $this->desc, $this->imageDirectory";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);

        return "Data saved Succesfully";
    }

    public function uploadImage(){
        $this->imageName = rand(99, 9999).time().$this->image['name'];
        $this->imageDirectory = 'assets/images/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        return $this->imageDirectory;
    }

}