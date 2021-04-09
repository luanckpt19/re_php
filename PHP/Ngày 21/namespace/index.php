<?php
include_once "Lisa/Student.php";
include_once "Rose/Student.php";

// namespace\TenClass
$s = new Lisa\Student();

$s2 = new Rose\Student();

$s->info();
$s2->demo();
