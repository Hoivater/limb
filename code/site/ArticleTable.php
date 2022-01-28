<?
	namespace limb\code\site;
	use limb\app\base as Base;#для работы с валидатором и бд
	/**
	 * работа с данными таблицы
	 *
	 */
	class ArticleTable
	{
		public $tmpltArticle = ['%id%', '%name%', '%link%', '%description%', '%tags%', '%category%', '%foto%', '%visible%', '%popular%', '%count_commentary%', '%date%'];//массив из таблиц
		public $resultArticle;//финишная сборка для шаблона для возврата в _Page
		public $name = '3289t_article';//имя таблицы которое используется по умолчанию
		public $table_key = "`id`, `name`, `link`, `description`, `tags`, `category`, `foto`, `visible`, `popular`, `count_commentary`, `date`";
		#public $replace = [$id, $name, $link, $description, $tags, $category, $foto, $visible, $popular, $count_commentary, $date];


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

		public static function insertFieldLimb($value)
		{
			#$value - количество полей, которые необходимо 
			$table = new ArticleTable();
			// print_r($table -> tmpltArticle);
			
			#
			Base\control\Generate::generateInt();
		}
	}
?>
