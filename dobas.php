<?php
class dobas {
    var $hanyas;
    
    //ez hozza létre a sorsolást
    function _construct($hanyas)
    {
        if($hanyas==6)
        {
            $this->hanyas=6;
        }
    }
    
    function dobass ()
    {
        $dobottszam=rand(1,$this->hanyas);
    }
    
    function eredmeny ()
    {
        
    }
}
