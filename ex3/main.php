<?php
    
    echo "Enter a string: ";
    $s = fgets(STDIN);//получаем строку

    echo "Enter keys: ";
    $str = fgets(STDIN);
    $dict = explode(" ", trim( $str));//получаем слова и формируем словарь
    while($s != "")
    {
        $i = count($dict);
        foreach ($dict as $word){//проходимся по словарю
            $i--;
            $len = strlen($word);
            if (strncmp($word, $s, strlen($word)) == 0)//сравниваем 
            {
                $s = substr($s, $len);//идем дальше по строке и сравниваем со словарем
                $i = count($dict);
                if (trim($s) == "")//если строка кончилась, значит true
                {
                    echo "true\n";
                    exit();
                }
                continue ;
            }
            else if ($i == 0 )//если участка строки нет в словаре, значит false
            {
                echo "false\n";
                exit(0);
            }
        }
    }
    echo "true\n";
    
?>