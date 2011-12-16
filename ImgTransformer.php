<?php
    /**
     * REVISAR http://www.php.net/manual/en/function.imagecopyresampled.php
     * class ImgTransformer
     */
    class ImgTransformer {
        public $output_dir  = "output/";
        public $input_dir   = "input/";
        public $defaults    = array(
            "thumbnail_small"   => array ("width" => 16),
            "thumbnail_medium"  => array ("width" => 32),
            "thumbnail_large"   => array ("width" => 125),
            "regular"           => array ("width" => 350)
        );
        
        function __construct ($dimensions) {
            
        }
        /**
         * @method __loadImage
         * @param $path
         */
        function __loadImage ($path) {
          $img;
          $width;
          $height;
          $type;
          
          if(!list($w, $h) = getimagesize($path)) 
            return false;
          //capture extention
          $type = strtolower(substr(strrchr($path,"."),1));
          switch($type){
            case 'bmp': 
                $img = imagecreatefromwbmp($path); 
                break;
            case 'gif': 
                $img = imagecreatefromgif($path); 
                break;
            case 'jpeg':
            case 'jpg': 
                $img = imagecreatefromjpeg($path); 
                break;
            case 'png': 
                $img = imagecreatefrompng($path); 
                break;
            default : return false;
          }  
          return $img;
        }
        
        /**
         * @descruption :        
         * @method: resizeToFormat
         * @param $dimensions array => width height 
         * @param $path is the string file path
         */
        function resizeToFormat ($dimensions, $path) {
            $img = $this->__loadImage ($path);
            if ($img) {
                
            }
        }
        
        /**
         * @description : This method would resize to all the defined sizes
         * @param $path is the string of the file path
         */
        function resizeAll ($path) {
           $img = $this->__loadImage ($path);
           if ($img) {
                
           }
        }
        
        /**
         * @description: this function takes the image and crops certain area
         * @method cropImage
         * @param $dimensions
         * @param $image
         */
        function cropImage ($dimensions, $path) {
           $img = $this->__loadImage ($path);
           if ($img) {
                
           }           
        }
    }
?>