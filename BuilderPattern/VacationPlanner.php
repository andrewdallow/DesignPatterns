<?php

require_once 'Builder.php';

class VacationPlanner
{

    public static function build(AbstractBuilder $builder): VacationDay
    {
        $builder->buildDay('08/05/2018');
        $builder->addHotel('0900', 'Grand Chancellor');
        $builder->addReservation('1000', 'Breakfast on the Avon');
        $builder->addSpecialEvent('1200', 'Armageddon Expo');
        $builder->addTickets('1800', 'Theatre');

        return $builder->getVacationDay();
    }
}


