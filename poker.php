<?php header('Content-Type: text/html; charset=utf-8');


function decode_type_name($type)
{
    global $ternos;
    global $ternos_pt_lang;
    return (!$ternos_pt_lang[$type] ? "!invalid" : $ternos_pt_lang[$type]);
}



function decode_card_name($card)
{
    global $cartas;
    global $cartas_pt_lang;
    return (!$cartas_pt_lang[$card] ? "!invalid" : $cartas_pt_lang[$card]);
}



$ternos = array
(
    "E",
    "C",
    "P",
    "O"
);



$cartas = array
(
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "10",
    "V",
    "D",
    "R",
    "A"
);



$ternos_pt_lang = array
(
    "E" => "Espadas",
    "C" => "Corações",
    "P" => "Paus",
    "O" => "Ouros",
);



$cartas_pt_lang = array
(
    "2" => "Dois",
    "3" => "Três",
    "4" => "Quatro",
    "5" => "Cinco",
    "6" => "Seis",
    "7" => "Sete",
    "8" => "Oito",
    "9" => "Nove",
    "10"=> "Dez",
    "V" => "Valete",
    "D" => "Dama",
    "R" => "Rei",
    "A" => "Às",
);




$baralho = array();
foreach ($cartas as $carta)
{
    foreach ($ternos as $terno)
    {
        $baralho[] = array
        (
            "T"=>$terno,
            "C"=>$carta
        );
    }
}


shuffle($baralho);


$n=1;
foreach($baralho as $dados)
{
    $carta = decode_card_name($dados["C"]);
    $terno = decode_type_name($dados["T"]);

    echo $n." - ".$carta."->".$terno."<br>";
    $n++;
}


