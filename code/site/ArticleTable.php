<?
	namespace limb\code\site;
	use limb\app\base as Base;#для работы с валидатором и бд
	use limb\app\control as Control;
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
		#функция для автозаполнения созданной таблицы, можно корретировать функции, например выбрать fotogenerate /в будущем, не в этой версии =)
		public function insertFieldCom($value)
		{
			$id = Control\Generate::this_idgenerate();
			$name = Control\Generate::varchargenerate(255);
			$link = Control\Generate::varchargenerate(255);
			$description = Control\Generate::varchargenerate(255);
			$tags = Control\Generate::textgenerate();
			$category = Control\Generate::textgenerate();
			$foto = Control\Generate::varchargenerate(255);
			$visible = Control\Generate::intgenerate(10);
			$popular = Control\Generate::intgenerate(10);
			$count_commentary = Control\Generate::intgenerate(10);
			$date = Control\Generate::this_dategenerate();
			$value = "'".$id."', '".$name."', '".$link."', '".$description."', '".$tags."', '".$category."', '".$foto."', '".$visible."', '".$popular."', '".$count_commentary."', '".$date."'";
			$ri = new Base\RedactionInq($this -> name, $this -> table_key);
			$result = $ri -> insert($value);
			#code...
		}
	}
?>
