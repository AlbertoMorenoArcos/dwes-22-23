<?php

    class Config {
        private string $nombre;
        private static Config $instancia;

        private function __construct(string $nombre) {
            $this->nombre = $nombre;
        }

        public static function singleton(string $nombre): Config {
            if (!isset(self::$instancia)) {
                self::$instancia = new Config($nombre);
            }
            return self::$instancia;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }
    }

$user1 = Config::singleton("Roberto");
echo $user1->getNombre();
$user2 = Config::singleton("Pedro");
echo $user1->getNombre();
$user3 = Config::singleton("Juan");
echo $user1->getNombre();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>

        </style>
    </head>
    
    <body>

    </body>
</html>