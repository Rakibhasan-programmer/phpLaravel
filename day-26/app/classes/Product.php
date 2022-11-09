<?php


namespace App\classes;


class Product
{
    public $product, $array, $array1, $array2 = [];
    public $category_id;
    public $name;
    public $price;
    public $desc;
    public $image, $imagePath;
    public $imageName, $imageDirectory, $file, $filePath, $fileContent;

    public function __construct($data = null, $file = null)
    {
        if($data){
            $this->category_id = $data['category_id'];
            $this->name = $data['name'];
            $this->price = $data['price'];
            $this->desc = $data['desc'];
        }
        if($file){
            $this->image = $file['image'];
        }
    }

    public function getProduct()
    {
        $this->imageDirectory = $this->uploadImage();

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->category_id, $this->name, $this->price, $this->desc, $this->imageDirectory$";
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
    public function getALlProduct(){
        $this->filePath = 'db/db.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode("$", rtrim($this->fileContent, '$'));
        foreach ($this->array as $key => $value){
            $this->array1 = explode(", ", $value);
            if($this->array1[0]){
                $this->array2[$key]['category_id'] = $this->array1[0];
                $this->array2[$key]['name'] = $this->array1[1];
                $this->array2[$key]['price'] = $this->array1[2];
                $this->array2[$key]['desc'] = $this->array1[3];
                $this->array2[$key]['image'] = $this->array1[4];
            }
        }
        return $this->array2;
    }


}