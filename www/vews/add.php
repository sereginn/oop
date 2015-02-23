<?php
echo 'Come heir!!';die;
require_once __DIR__ . '/../classes/file.php';
require __DIR__ . '/models/news.php';
if(!empty($_POST)) {
    $data = [];

    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_FILES)) {
        $result = File_upload('way');
        if (false !== $result) {
            $data['way'] = $result;
        }
    }
}
if(isset( $data['title']) && (isset( $data['way']))){
    News_insert($data);

    header('Location: /');
    die;
}



include __DIR__ . '/views/add.php';