# L4-yaml file parser

this using symfony2 yaml component

## installing

add this code on **app/config/app.php**

<code>
array(
  -----
  'providers' => array (
        --- other providers ----,

        'Pieter\Yaml\YamlServiceProvider',

    ),
  'aliases' => array (
        --- other providers ----,

        'Yaml'            => 'Pieter\Yaml\Facades\Yaml',

    )
  ),

)

</code>

## How to use

just create in yaml file and call from your controller

<code>
    \Yaml::setFile('test.yml');
    return \Yaml::parsing();
</code>

enjoy it !


