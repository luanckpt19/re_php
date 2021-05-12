<?php
$sql= "CREATE TABLE provinces (
    province_code INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    province_name VARCHAR(255) NOT NULL DEFAULT '',
    province_population BIGINT(20),
    province_acreage INT(11),
    province_density INT(11),
    province_gdp FLOAT(11,2),
    province_parent_id INT(11),
    created DATETIME,
    updated DATETIME
)";

