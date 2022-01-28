<?

namespace limb\code\site;
use limb\app\base as Base; #для работы с базой данный
	/**
	 * работа с данными таблицы
	 *
	 */
	class StandartTable
	{
		public $tmpltStandart = ['%id%', '%date_creation%'];//массив из таблиц
		public $resultStandart;//финишная сборка для шаблона для возврата в _Page
		public $name = '3289t_standart';//имя таблицы которое используется по умолчанию
		public $table_key = "`id`, `date_creation`";
		#public $replace = [$id, $date_creation];


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
