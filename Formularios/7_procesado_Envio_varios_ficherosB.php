<?php
try
{
    if(isset($_FILES['file']))
    {
        
    }
    else
        throw new RuntimeException ("No se subieron archivos");
}
catch (RuntimeException $e)
{
    echo $e->getMessage();
}
    
