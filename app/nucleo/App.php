<?php 
class App
{
    protected $controlador = 'Inicio';
    protected $metodo = 'index';
    protected $parametros = [];

    public function __construct()
    {
        
        $url = $this->parseurl();
        print_r($url);
        if(isset($url[0]))
        {
           $clase = ucwords($url[0]);
           $clase = str_replace('-','_', $clase);
           unset($url[0]);
        }else{
            $clase = $this->controlador;
        }

        $directorios = opendir(C_PPAL);
        while (($directorio = readdir($directorios))!==false)
        {
            $directorio_actual = C_PPAL.DS.$directorio;
            if($directorio !=='.' and $directorio !=='..')
            {
               if(is_dir($directorio_actual))
               {
                if(file_exists($directorio_actual.DS.$clase.'.php'))
                {
                    $this->controlador = $clase;
                    require_once($directorio_actual.DS.$clase.'.php');
                    break;
                }else if(file_exists(C_PPAL.DS.$clase.'.php')){
                    $this->controlador = $clase;
                    require_once(C_PPAL.DS.$this->controlador.'.php');
                    break;
                }else{                    
                    require_once(C_PPAL.DS.$this->controlador.'.php');
                    
                }
               } 
            }
        }

        if(!class_exists($this->controlador, false))
        {
            Exit(header('location: http://proyecto1.com/publica/E404'));
        }else
        {
            $this->controlador = new $this->controlador();
        }    
    
        
        
        if(isset($url[1]))
        {
            if(method_exists($this->controlador, $url[1]))
            {
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }

        $this->parametros = $url ? array_values($url): [];

        call_user_func_array([$this->controlador, $this->metodo], $this->parametros);

        
       

    }

   

    public function parseurl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = strtolower($url);

            $url = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),'a', $url);

            $url = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),'e', $url);
          
            $url = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),'i', $url);
          
            $url = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),'o', $url);
          
            $url = str_replace(
                array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),'u', $url);
          
            $url = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'c'), $url);
          
            $url = str_replace(
                  array("\\", "¨", "º", "-", "~",
                     "#",  "@", "|", "!", "\"",
                     "·", "$", "%", "&",
                     "(", ")", "?", "'", "¡",
                     "¿", "[", "]", "^", "`",
                     "+", "{", "}", "¨", "´",
                     ">", "<", ";", ",", ":",
                     ".", ""),
                    '-',
                $url);  
                
                return $url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
        } 
        
        
    }


}
?>
