<?php

class Date
{
    public int $year;
    public int $month;
    public int $day;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function __get(string $name): string
    {
        if ($name === 'weekDay') {
            $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
            $timestamp = mktime(0, 0, 0, $this->month, $this->day, $this->year);
            return $days[getdate($timestamp)['wday']];
        }
    }
}