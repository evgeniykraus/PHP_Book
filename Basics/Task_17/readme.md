### Задача №1

Скопируйте мой код класса User. Самостоятельно реализуйте описанный класс Student с методами
getCourse, setCourse и addOneYear.


class User
{
        private $name;
        private $age;

		public function getName()
		{
			return $this->name;
		}
		
		public function setName($name)
		{
			$this->name = $name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
		
		public function setAge($age)
		{
			$this->age = $age;
		}
	}