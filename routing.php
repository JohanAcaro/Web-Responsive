<?php

$controllers=array(
        'pagina'=>['inicio','tipos','alteraciones','estimulaciones','about','error']
    );

    if (array_key_exists($controller,  $controllers)){
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        }
        else{
            call('pagina','error');
        }		
    }else{
        call('pagina','error');
    }

    function call($controller, $action){
        require_once('Controllers/PaginaController.php');
     
        switch ($controller) {
            case 'pagina':
            $controller= new PaginaController();
            break;			
            default:
                    # code...
            break;
        }
        
        $controller->{$action}();
    }    