<?
	namespace limb\code\site;
	use limb\app\base as Base;#для работы с валидатором и бд
	/**
	 * работа с данными таблицы
	 *
	 */
	class _NAME_Table
	{
		public $tmplt_NAME_ = [_TMPLT_];//массив из таблиц
		public $result_NAME_;//финишная сборка для шаблона для возврата в _Page
		public $name = '_TABLENAME_';//имя таблицы которое используется по умолчанию
		public $table_key = "_FORTABLEKEY_";
		#public $replace = [_REPLACE_];


		public function __construct()
		{
			#code...
		}

		//метод достаюший все поля из таблицы
		public function searchFieldCom()
		{
			#$si = new Base\SearchInq($name);
			#$si -> select(); 
			#$si ->  where($key, $value, $operator);
			#$si -> limit();
			#$result = $si -> res();

			#code...

		}
		#метод добавляющий данные в таблицу, value - строка следующего вида
		#NULL, '".$this -> title."', '".$this -> keywords."', '".$this -> description."'
		public function insertFieldCom($value)
		{
			#$ri = new Base\RedactionInq($this -> name, $this -> table_key);
			#$result = $ri -> insert($value);

			#code...
		}
	}
?>
