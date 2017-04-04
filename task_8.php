<?php

//выбрать все категории-SELECT * FROM `category` WHERE 1
//выбрать категорию с айдишником 2;- SELECT * FROM `category` WHERE `id` = 2
//выбрать категорию название которой 'CocaCola' - SELECT * FROM `category` WHERE `name` = 'CocaCola'
//выбрать категорию название которой содержит 'Cola' - SELECT * FROM `product` WHERE `title` LIKE '%Cola%'
//выбрать все активные категории - SELECT * FROM `category` WHERE `status` = 1
//выбрать все продукты с ценой большй одного доллара -SELECT * FROM `product` WHERE `price` > 1
//выбрать все продукты с ценой большй одного доллара но меньше трех - SELECT * FROM `product` WHERE Price >1 and Price <3

//выбрать все продукты категории кокакола - SELECT * FROM `product` WHERE `category id` = 1
//выбрать все продукты из всех активных категорий цена которых больше одного 
//доллара и меньше трех в названии которых есть слово 'Cola' - SELECT * FROM `product` WHERE `category id` = 1 and price >1 and `title` LIKE '%Cola%'
