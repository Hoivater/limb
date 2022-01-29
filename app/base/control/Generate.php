<?php
namespace limb\app\base\control;
use limb\app\base as Base;

	// Класс для генерации различных типов значений
	// Набор статических классов

	class Generate
	{
		
		#максимальная длина int - 11, генерируется от 3 до 8; в автоматическом режиме
		public static function intgenerate()
		{

			return $result;
		}
		#генерируется заданная длинна из слов
		public static function varchargenerate()
		{

			return $result;
		}
		#генерируется текст размером от 200 до 900 символов из слов
		public static function textgenerate()
		{

			return $result;
		}
		#генерация числа 32.3243
		public static function floatgenerate()
		{

			return $result;
		}
		#false || true
		public static function boolgenerate()
		{

			return $result;
		}
		#текст через запятую/ специальное заполнение
		public static function tagsgenerate()
		{

			return $result;
		}
		#11 значная дата от год назад от теперешнего времени
		public static function dategenerate()
		{

			return $result;
		}
		#генерируется ненастоящая ссылка латиницей
		public static function linkgenerate()
		{

			return $result;
		}
		#пароль и оборачивается в md(5) 
		public static function passgenerate()
		{

			return $result;
		}

	}
?>