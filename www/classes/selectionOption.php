<?php
class SelectionOption{
    public $type_view;
    function view()
    {
        return include __DIR__ . '/../controllers/' . $this->type_view;
    }
}