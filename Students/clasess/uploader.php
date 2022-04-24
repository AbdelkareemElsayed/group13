<?php

class Upload
{

    public function UploadFiles($input)
    {


        # Upload Image .....

        $image = null;

        $imgType = $input['image']['type'];

        $imgArray = explode('/', $imgType);

        # Image Extension ......
        $imageExtension = strtolower(end($imgArray));


        $FinalName = time() . rand() . '.' . $imageExtension;

        $disPath = 'uploads/' . $FinalName;

        $imgTemName = $_FILES['image']['tmp_name'];


        if (move_uploaded_file($imgTemName, $disPath)) {

            $image = $FinalName;
        }

        return $image;
    }
}
