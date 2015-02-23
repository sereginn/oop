<?php
class Select
{
    public $type_select;
    public $type_view;

    function view()
    {
        return include __DIR__ . '/../views/' . $this->type_view;
    }
}