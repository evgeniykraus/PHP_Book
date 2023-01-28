### Задача №1

Пусть дан вот такой класс User, свойства которого доступны только для чтения с помощью геттеров:

	class User
	{
		private $name;
		private $age;
		
		public function __construct($name, $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}

Переделайте код этого класса так, чтобы вместо геттеров использовался магический метод __get.

### Задача №2

Сделайте класс Date с публичными свойствами year, month и day.

С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.