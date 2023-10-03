<?php

namespace App\Helpers\Routes;

class RoutesHelper
{
    
         
        public static function includeRoutFiles(string $folder)
        {
           $dirIterator=new \RecursiveDirectoryIterator($folder);
           $it=new \RecursiveIteratorIterator($dirIterator);
           while ($it->valid()) {
            if ($it->valid()
            
            && $it->current()->getExtension()== 'php'
            ) {
                    require $it->key();
            }
            $it->next();
    
           }
        }
        
    
}
