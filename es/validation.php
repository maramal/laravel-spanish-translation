<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL v&aacute;lida.',
    'after'                => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El :attribute debe solamente contener letras.',
    'alpha_dash'           => 'El :attribute debe solamente contener letras, n&uacute;meros, y guiones.',
    'alpha_num'            => 'El :attribute debe solamente contener letras y n&uacute;meros.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha igual o anterior a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file'    => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe estar entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser true o false.',
    'confirmed'            => 'La confirmaci&oacute;n :attribute no coincide.',
    'date'                 => 'El :attribute no es una fecha v&aacute;lida.',
    'date_format'          => 'El :attribute no coincide el formato :format.',
    'different'            => 'El :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe tener :digits d&iacute;gitos.',
    'digits_between'       => 'El :attribute debe estar entre :min y :max d&iacute;gitos.',
    'dimensions'           => 'El :attribute tiene dimensiones de imagen inv&aacute;lidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El :attribute debe ser una direcci&oacute;n de correo electr&oacute;nico v&aacute;lida.',
    'exists'               => 'El :attribute seleccionado es inv&aacute;lido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe contener un valor.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El :attribute seleccionado es inv&aacute;lido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un entero.',
    'ip'                   => 'El :attribute debe ser una direcci&oacute;n IP v&aacute;lida.',
    'json'                 => 'El :attribute debe ser una cadena JSON v&aacute;lida.',
    'max'                  => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file'    => 'El :attribute no puede ser mator que :max kilobytes.',
        'string'  => 'El :attribute no puede ser mayor que :max caracteres.',
        'array'   => 'El :attribute no puede tener m&aacute;s que :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe ser como m&iacute;nimo :min.',
        'file'    => 'El :attribute debe ser como m&iacute;nimo :min kilobytes.',
        'string'  => 'El :attribute debe ser como m&iacute;nimo :min caracteres.',
        'array'   => 'El :attribute debe teer como m&iacute;nimo :min items.',
    ],
    'not_in'               => 'El :attribute seleccionado es inv&aacute;lido.',
    'numeric'              => 'El :attribute dene ser un n&uacute;mero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato :attribute es inv&aacute;lido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a no ser que :other est&eacute; en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values est&aacute;n presentes.',
    'required_with_all'    => 'El campo :attribute es requerido cuando :values est&aacute;n presentes.',
    'required_without'     => 'El campo :attribute es requerido cuando :values no est&aacute;n presentes.',
    'required_without_all' => 'El campo :attribute es requerido cuiando ninguno de los :values est&aacute; presente.',
    'same'                 => 'El :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El :attribute debe ser ser :size.',
        'file'    => 'El :attribute debe ser :size kilobytes.',
        'string'  => 'El :attribute debe ser:size caracteres.',
        'array'   => 'El :attribute debe contener :size items.',
    ],
    'string'               => 'El :attribute debe ser una cadena.',
    'timezone'             => 'El :attribute debe ser una zona v&aacute;lida.',
    'unique'               => 'El :attribute ya ha sido tomado.',
    'uploaded'             => 'El :attribute fall&oacute; al cargar.',
    'url'                  => 'El formato :attribute es inv&aacute;lido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
