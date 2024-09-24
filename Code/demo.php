<?php

declare(strict_types=1);

require_once 'I.php';
require_once 'C.php';
require_once 'A.php';
require_once 'B.php';


class Demo
{
    public function typeAReturnA(): A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeAReturnB(): A {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeAReturnC(): A {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeAReturnI(): A {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeAReturnNull(): ?A {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeBReturnA(): B {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeBReturnB(): B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeBReturnC(): B {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeBReturnI(): B {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeBReturnNull(): ?B {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): C {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeCReturnB(): C {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeCReturnC(): C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeCReturnI(): C {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeCReturnNull(): ?C {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeIReturnA(): I {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeIReturnB(): I {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeIReturnC(): I {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeIReturnI(): I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeIReturnNull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeNullReturnA(): ?A {
        echo __FUNCTION__ . "<br>";
        return new A();
    }

    public function typeNullReturnB(): ?B {
        echo __FUNCTION__ . "<br>";
        return new B();
    }

    public function typeNullReturnC(): ?C {
        echo __FUNCTION__ . "<br>";
        return new C();
    }

    public function typeNullReturnI(): ?I {
        echo __FUNCTION__ . "<br>";
        return new I();
    }

    public function typeNullReturnNull(): ?I {
        echo __FUNCTION__ . "<br>";
        return null;
    }

}

$demo = new Demo();


// $ketqua = $demo->typeAReturnA();
// $ketqua = $demo->typeAReturnB();
// $ketqua = $demo->typeAReturnC();
// $ketqua = $demo->typeAReturnI();
// $ketqua = $demo->typeAReturnNull();
// $ketqua = $demo->typeBReturnA();
// $ketqua = $demo->typeBReturnB();
// $ketqua = $demo->typeBReturnC();
// $ketqua = $demo->typeBReturnI();
// $ketqua = $demo->typeBReturnNull();
// $ketqua = $demo->typeCReturnA();
// $ketqua = $demo->typeCReturnB();
// $ketqua = $demo->typeCReturnC();
// $ketqua = $demo->typeCReturnI();
// $ketqua = $demo->typeCReturnNull();
// $ketqua = $demo->typeIReturnA();
// $ketqua = $demo->typeIReturnB();
// $ketqua = $demo->typeIReturnC();
// $ketqua = $demo->typeIReturnI();
// $ketqua = $demo->typeIReturnNull();
// $ketqua = $demo->typeNullReturnA();
// $ketqua = $demo->typeNullReturnB();
$ketqua = $demo->typeNullReturnC();
$ketqua = $demo->typeNullReturnI();
$ketqua = $demo->typeNullReturnNull();




