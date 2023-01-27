### Задача №1

Скопируйте код моего класса Employee и код интерфейса iProgrammer.

    class Employee
    {
    private $name;
    private $salary;

		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSalary()
		{
			return $this->salary;
		}
	}


     interface iProgrammer
    {
        public function __construct($name, $salary);
        public function getName();
        public function getSalary();
        public function getLangs();
        public function addLang($lang);
    }

### Задача №2
Реализуйте класс Programmer у которого будет имя, зарплата и список языков, которые знает программист.
Он должен реализовывать интерфейс iProgrammer и методы от класса Employee.


    