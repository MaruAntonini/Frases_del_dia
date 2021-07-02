<?php
sleep(1);
$suerte=array();
$suerte[]="La gente dice que no puedes vivir sin amor... yo creo que el oxígeno es más importante";    
$suerte[]="¿Qué ordenador tiene? Y por favor, no diga 'uno blanco'";
$suerte[]="Pruebas empíricas demuestran que con piedra, papel, tijeras, los que se conocen empatan del 75 al 80% de las veces por el limitado número de resultados. Yo sugiero jugar a piedra, papel, tijeras, lagarto, Spock. Es muy sencillo, mira: tijeras cortan papel, papel tapa a piedra, piedra aplasta a lagarto, lagarto envenena a Spock, Spock rompe tijeras, tijeras decapitan lagarto, lagarto devora papel, papel desautoriza a Spock, Spock vaporiza piedra, y como siempre, piedra aplasta a tijeras.";
$suerte[]="¿Un pequeño malentendido? Galileo y el Papa tuvieron un pequeño malentendido.";
$suerte[]=" Me siento como una función tangente inversa que se aproxima a una asíntota";
$suerte[]= "¿Qué tienen que ver los modales? Esto es la guerra. ¿Acaso fueron los romanos educados cuando esterilizaron el suelo de Cartago con sal?";

$elemento=count($suerte);

$sorteo=rand(0,$elemento-1);

echo $suerte[$sorteo];



                          