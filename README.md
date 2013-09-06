# L4-yaml file parser

this using symfony2 yaml component

## installing

for simple way, try using composer,
add this on your composer.json file in require tag

    "pieter/yaml": "dev-master"

and run from terminal

    ~/php composer.phar update "pieter/yaml"

after that,
add this code on **app/config/app.php**

    array(
      'providers' => array (
            other providers,
            'Pieter\Yaml\YamlServiceProvider',
        ),
      'aliases' => array (
            other aliases,
            'Yaml'            => 'Pieter\Yaml\Facades\Yaml',
        )
      ),
    )


## How to use

just create in yaml on app/config folder and call from your controller

    \Yaml::setFile('[your_file].yml');
    return \Yaml::parsing();


enjoy it !


