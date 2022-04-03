<?php

namespace wings\selfphp;

use InvalidArgumentException;

/**
 * メンバーに関する情報を管理する。
 * @package wings\selfphp
 * @author WINGSプロジェクト <wings@example.com>
 * @version 1.0
 * @license GPL
 */
class Person
{
    /**
     * 名前
     * @var string
     */
    private string $name;

    /**
     * 年齢
     * @var int
     */
    private int $age;

    /**
     * 名前／年齢でオブジェクトを初期化する。
     * @param string $name 名前
     * @param int $age 年齢
     * @return void 
     * @throws InvalidArgumentException 年齢が負数の場合
     */
    public function __construct(string $name, int $age)
    {
        if ($age < 0) {
            throw new InvalidArgumentException("年齢の指定が不正です。");
        }
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @deprecated __toStringを変わりに利用してください。
     * @return string 
     */
    public function show(): string
    {
        return "";
    }

    /**
     * Personクラスの内容を文字列化する。
     * @return string 「名前／年齢」の形式で整形した文字列
     */
    public function __toString(): string
    {
        return "name={$this->name}/age={$this->age}";
    }
}
