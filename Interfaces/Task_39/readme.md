### Задача №1

Сделайте класс Sphere, который будет реализовывать интерфейс iSphere.

    interface iSphere
	{
		const PI = 3.14; // число ПИ как константа
		
		// Конструктор шара:
		public function __construct($radius);
		
		// Метод для нахождения объема шара:
		public function getVolume();
		
		// Метод для нахождения площади поверхности шара:
		public function getSquare();
	}
    