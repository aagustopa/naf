<?php

$familias = [
    'Familia Vera', 'Familia Algarate', 'Familia Velasco', 'Familia Salazar',
    'Familia Patrick', 'Familia Macias', 'Familia Lara', 'Familia Valderrama', 'Familia Jordi y Reyes',
    'Familia Ródenas', 'Familia Beltrán', 'Familia Blas', 'Familia Agüero', 'Familia Bonet',
    'Familia Javi y Sandra', 'Familia Panigua', 'Familia Martinez Gago', 'Familia Victor y Tere',
    'Familia Carrasco', 'Familia Ponce', 'Familia Alfonso y Roser', 'Familia Bouzo', 'Familia Sergio y Claudia',
    'Familia Paco y Lourdes', 'Familia Miguel y Maribel Mata', 'Familia Juan Ramón y Magda',
    'Familia Cristobal y Ana Maria', 'Familia Adrian y Natalia', 'Familia David y Elena'
];
// DONE (Familia Gerson y Vicky)

$hermanos = [
    'Montse Margarit', 'Bernardo Felpeto', 'Señor José', 'Liberta Villasboa', 'Señora Lidia',
    'Maria Rosa Boleko', 'Rodrigo  Gómez', 'Amparo Gascón', 'José Luis Echevarria', 'Antonio Alarcón',
    'Susi Alarcon', 'Maria Rosa Juanals', 'Loli Martín', 'Olivia', 'Maria Font', 'Leandri Gaspar', 'Luisa Pendas',
    'Eusebia Rojas', 'Antonio Sanza', 'Herminia Mencia', 'Rosa Álamo', 'Maria Rosa Subirats',
    'Nieves Lorente', 'Manuel Lara', 'Angeles Berlanga', 'Fátima Trigo', 'Maruja Subirats', 'Ana Celia',
    'Pedro Navarrete', 'Pepita Perez', 'Teresa Rosell'
];

// DONE (Isa Rubio)


// foreach ($familias as $items) {
//     echo $items, '<br>';
// }


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['quienesSeran'])) {
        $randomFamilia = array_rand($familias);
    }
    if (isset($_POST['quienSera'])) {
        $randomHermano = array_rand($hermanos);
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
