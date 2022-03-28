<?php
interface IFax
{
    function send();
}

interface IPrinter
{
    function print();
}

trait FaxTrait
{
    public function send(): void
    {
        print 'sending Fax ... sended';
    }
}

trait PrinterTrait
{
    public function print(): void
    {
        print 'printing ... complate';
    }
}

class FaxPrinter implements IFax, IPrinter
{
    use FaxTrait;
    use PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();
