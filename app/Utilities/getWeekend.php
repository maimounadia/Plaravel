<?php

namespace App\Utilities;

class GetWeekend
{
    public function getWeek()
    {
        if (date('N') >= 6) {
            echo "C'est le weekend ddddsdddddd";
        }else
        {
            echo "C'est pas le weekend";
        }
    }

    public function getMessageBienvenu()
    {
       echo "Bienvenue à UCAB";

    }
}

?>
