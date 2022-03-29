<?php
class UserNotFoundException extends Exception implements MyAppException
{
    protected string $userid;

    public function __construct(string $userid, int $code = 0, Throwable $previos = null)
    {
        parent::__construct("{$userid}が存在しません。", $code, $previos);
        $this->userid = $userid;
    }

    final public function getUserid(): string
    {
        return $this->getUserid();
    }
}
