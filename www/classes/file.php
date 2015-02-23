<?php
function File_upload($fileway)
{
    if (empty($_FILES)) {
        return false;
    }
    if (0 != $_FILES[$fileway]['error']) {
        return false;
    }
    if (is_uploaded_file($_FILES[$fileway]['tmp_name'])) {
        $result = move_uploaded_file($_FILES[$fileway]['tmp_name'],
            __DIR__ . '/../mynews/' . $_FILES[$fileway]['name']);
        if(!$result){
            return false;
        } else {return  '/mynews/' . $_FILES[$fileway]['name'];}
    }
    return false;
}
