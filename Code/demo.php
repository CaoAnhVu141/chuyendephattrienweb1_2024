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
$demo = new Demo();

// $ketqua1 = $demo->typeAReturnA();
// $ketqua2 = $demo->typeAReturnB();
// $ketqua3 = $demo->typeAReturnC();
// $ketqua4 = $demo->typeAReturnI();
// $ketqua5 = $demo->typeAReturnNull();
// $ketqua6 = $demo->typeBReturnA();
// $ketqua7 = $demo->typeBReturnB();
// $ketqua8 = $demo->typeBReturnC();
// $ketqua9 = $demo->typeBReturnI();
// $ketqua10 = $demo->typeBReturnNull();
// $ketqua11 = $demo->typeCReturnA();
// $ketqua12 = $demo->typeCReturnB();
// $ketqua13 = $demo->typeCReturnC();
// $ketqua14 = $demo->typeCReturnI();
// $ketqua15 = $demo->typeCReturnNull();
// $ketqua16 = $demo->typeIReturnA();
// $ketqua17 = $demo->typeIReturnB();
// $ketqua18 = $demo->typeIReturnC();
// $ketqua19 = $demo->typeIReturnI();
// $ketqua20 = $demo->typeIReturnNull();
// $ketqua21 = $demo->typeNullReturnA();
// $ketqua22 = $demo->typeNullReturnB();
$ketqua23 = $demo->typeNullReturnC();
$ketqua24 = $demo->typeNullReturnI();
$ketqua25 = $demo->typeNullReturnNull();




