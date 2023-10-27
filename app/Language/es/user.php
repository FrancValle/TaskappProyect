<?php

return [
    'email' => [
        'is_unique' => 'El correo esta en uso'
    ],
    'password_confirmation' => [
        'required' => 'Por favor, ingrese su contraseña',
        'matches' => 'Por favor, ingrese la contraseña de nuevo'
    ]
    
];