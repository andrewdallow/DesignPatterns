<?php

class VacationDay
{
    private $_day;
    private $_activities = [];

    public function __construct(string $date)
    {
        $this->_day = $date;
    }

    public function addActivity(string $key, string $value): void
    {
        $this->_activities[$key] = $value;
    }

    public function __toString()
    {
        $text = '<h1> Day ' . $this->_day . '</h1>';

        $text .= '<ul>';
        foreach ($this->_activities as $key => $activity) {
            $text .= '<li>' . $key . ' at ' . $activity . ' hours.</li>';
        }
        $text .= '</ul>';

        return $text;
    }
}