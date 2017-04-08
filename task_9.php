<?php
//SELECT DISTINCT (name) FROM product JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//JOIN category ON category.id = product_to_category.category_id  -  
//выбрать уникальные названия категорий всех продуктов
//
//SELECT max( price) FROM product JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//JOIN category ON category.id = product_to_category.category_id 
//WHERE title LIKE '%Coca%'- макс цена колы
//SELECT min( price) FROM product JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//JOIN category ON category.id = product_to_category.category_id 
//WHERE title LIKE '%Coca% - мин  цена колы
//SELECT AVG( price) FROM `product JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//JOIN category ON category.id = product_to_category.category_id 
//WHERE title LIKE '%Coca% - СРЕДНЯЯ ЦЕНА
//SELECT COUNT( title) FROM product JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//JOIN category ON category.id = product_to_category.category_id 
//WHERE title LIKE '%Coca%' кол-во кокакольных продуктов

//SELECT COUNT(DISTINCT name) FROM product RIGHT JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//RIGHT JOIN category ON category.id = product_to_category.category_id 
//WHERE title LIKE '%Coca%' - кол во названий в категорий


//SELECT COUNT(DISTINCT title) FROM product RIGHT JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//RIGHT JOIN category ON category.id = product_to_category.category_id

//SELECT COUNT(DISTINCT title) FROM product LEFT JOIN product_to_category 
//ON product.id = product_to_category.product_id 
//LEFT JOIN category ON category.id = product_to_category.category_id Кол во
// продуктов при чем с лефт джоином учитывается и пиво 
// и я понял что правильней было бы искать в кокакольных продуктах не по 
// LIKE '%Coca% а по айди но переписывать уже нету сил....

