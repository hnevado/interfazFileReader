<?php
// Definición de la interfaz FileReader
interface FileReader {
    public function open($filename);
    public function read();
    public function close();
}

// Clase para leer archivos de texto
class TextFileReader implements FileReader {
    private $file;
    private $name;
    
    public function open($filename) {
        $this->name = $filename;
        $this->file = fopen($filename, "r");
    }

    public function read() {
        // Leer el contenido completo del archivo
        $content = '';
        $content = fread($this->file, filesize($this->name));
        return $content;
    }

    public function close() {
        fclose($this->file);
    }
}

// Clase para leer archivos CSV
class CSVFileReader implements FileReader {
    private $file;

    public function open($filename) {
        $this->file = fopen($filename, "r");
    }

    public function read() {
        $data = [];
        while (($line = fgetcsv($this->file)) !== false) {
            $data[] = $line;
        }
        return $data;
    }

    public function close() {
        fclose($this->file);
    }
}

// Uso de las clases
$textReader = new TextFileReader();
$textReader->open("datos.txt");
$textContent = $textReader->read();
$textReader->close();

echo "----------- TXT -----------\n";
echo $textContent;


echo "\n ----------- CSV -----------\n";

$csvReader = new CSVFileReader();
$csvReader->open("datos.csv");
$csvData = $csvReader->read();
$csvReader->close();

print_r($csvData);


?>