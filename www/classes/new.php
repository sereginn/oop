?php
class Article
{
public $title;
public $text;
public $path;
public $time;
public $pagenews;
public function view()
{
echo '<li><a href="'. $this->pagenews . '">' . $this->title .'</a>'.
    '<br>Создано:'    . $this->time . '</li>' ;
}

public function view1()
{
echo '<h1>' . $this->title . '</h1><br>'. $this->text;
}
}