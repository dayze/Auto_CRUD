<?php

class Generation
{
    private $className;
    private $properties = array();
    private $functions = array();
    private $stopScript = false;
    private $stopProperties = false;

    public function __construct()
    {
        echo "Name of the class : \n";
        $handle = fopen("php://stdin", "r");
        $this->className = fgets($handle);
        fclose($handle);
        $this->createServiceClass();
        $this->createRepositoryClass();
/*        while (!$this->stopScript) {
            while (!$this->stopProperties) {
                
            }
        }*/
    }

    private function createServiceClass(){
        /*$content =
            "<?php\n\nClass " . $this->className . "{\nprivate ". '$' . $this->className ."Repository;\n }";
        file_put_contents($this->className .'Service.php', $content);*/
        $fp = fopen($this->className . 'Service.php', 'w');
        fwrite($fp, "<?php\n");
        fwrite($fp, 'Class ' . $this->className);
        fwrite($fp, "{\n");
        fwrite($fp, 'private ' . '$' . $this->className);
        fwrite($fp, '}');
    }

    private function createRepositoryClass(){
        $content = "<?php\n\nClass " . $this->className . "{\n\n}";
        file_put_contents($this->className .'Repository.php', $content);
    }

}