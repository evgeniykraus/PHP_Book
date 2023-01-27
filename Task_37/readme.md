### Задача №1

Сделайте так, чтобы класс Rectangle реализовывал два интерфейса: и iFigure, и iTetragon.
    
    interface iTetragon
    {
        public function getA();
        public function getB();
        public function getC();
        public function getD();
    }

    interface iFigure
	{
		public function getSquare();
		public function getPerimeter();
	}

### Задача №2

Сделайте интерфейс iCircle с методами getRadius и getDiameter.

### Задача №3

Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.