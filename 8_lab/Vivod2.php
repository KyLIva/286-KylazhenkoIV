<?php

class Form
{
    public $name, $password, $email, $home, $fdate;

    function SaveFile()
    {
        $destiation_dir = dirname(__FILE__) . '/uploadedFiles/' . $this->home['name'];
        move_uploaded_file($this->home['tmp_name'], $destiation_dir);
        echo 'Файл загружен';
    }

    function DeleteFile()
    {
        $destiation_dir = dirname(__FILE__) . '/uploadedFiles/' . $this->home['name'];
        unlink($destiation_dir);
    }
}

$newForm = new Form();
$newForm->name = $_POST['name'];
$newForm->password = $_POST['password'];
$newForm->email = $_POST['email'];
$newForm->home = $_FILES['home'];
$newForm->fdate = $_POST['fdate'];
$newForm->SaveFile();
echo '<pre>';
var_dump($newForm);
echo '</pre>';

echo "<a href='http://kulajenko286/8_lab/Задание.php'>Вернуться на главную</a>";


?>	