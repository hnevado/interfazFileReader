<p>Forma de llamar a la clase para leer ficheros txt:</p>

<pre>
$textReader = new TextFileReader();
$textReader->open("datos.txt");
$textContent = $textReader->read();
$textReader->close();</p>

<p>Forma de llamar a la clase que lee ficheros CSV:</p>

<pre>

$csvReader = new CSVFileReader();
$csvReader->open("datos.csv");
$csvData = $csvReader->read();
$csvReader->close();
</pre>

<p>Teniendo datos.txt y datos.csv en la misma ruta de ejecución del script, este devolverá lo siguiente:</p>

<pre>

----------- TXT -----------
Estoy leyendo el documento texto.txt
Esta es mi segunda línea
 ----------- CSV -----------
Array
(
    [0] => Array
        (
            [0] => USUARIO
            [1] => PERMISO
        )

    [1] => Array
        (
            [0] => Hector Nevado
            [1] => Administrador
        )

)
  
</pre>
