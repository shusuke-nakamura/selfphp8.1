<?php
class MyClass
{
    public string $pub = 'public';
    protected string $pro = 'protected';
    private string $pri = 'private';

    public function __construct()
    {
    }

    public function showProperty(): void
    {
        foreach ($this as $key => $value) {
            print "{$key}：{$value}<br />";
        }
    }
}
