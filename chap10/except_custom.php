<?php
interface MyAppException
{
}

class MyInputExcepiton extends RuntimeException implements MyAppException
{
}
class MyOutputException extends RuntimeException implements MyAppException
{
}
