<?php
    echo "Enter a string: ";
    $str = fgets(STDIN);

    $i = 0;
    //  проходимся по каждому символу строки.
    while ($i < strlen($str))
    {
        // Если это это буква, увеличиваем строчную или уменьшаем прописную
        if (ctype_alpha($str[$i]))
        {
            if (ctype_upper($str[$i]) == false)
                $str[$i] = strtoupper($str[$i]);
            else
                $str[$i] = strtolower($str[$i]);
        }
        $i++;

    }
    echo "Result  string: " . $str . "\n";
?>