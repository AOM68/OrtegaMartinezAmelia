    <?php
    /**
     * Función que muestra un saludo personalizado en pantalla.
     *
     * @internal Esta función no devuelve nada, muestra directamente en pantalla
     * @author Amelia Ortega Martínez
     * @version 1.0
     *
     * @param string $nombre El nombre de la persona a saludar.
     * @return void 
     */
    function saludar(string $nombre): void {
        echo "¡Hola, " . $nombre . "!<br>";
    }

    /**
     * Función que multiplica dos números.
     *
     * @internal Esta función es sólo para el núcleo del sistema, no usar en módulos
     * @author Amelia Ortega Martínez
     * @version 1.0
     *
     * @param int $a Primer número.
     * @param int $b Segundo número.
     * @return int El resultado de la multiplicación.
     */
    function multiplicar(int $b, int $a): int {
        //Modificación: cambio el orden de los factores
        return $b * $a;
    }

    saludar("Juanjo"); 

    echo "El resultado de la multiplicación es ". $resultado = multiplicar(5, 3);
