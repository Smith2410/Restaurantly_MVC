<?php
    class Views{
        function getView($controller, $view, $data="", $categoria="", $platillo="",$alert="", $config = "", $cliente = "", $cbanco="", $usuario="")
        {
            $controller = get_class($controller);
            if ($controller == "Index") 
            {
                $view = "Views/" . $view.".php";
            }else{
                $view = "Views/" . $controller . "/" . $view . ".php";
            }
            require_once($view);
        }
    }
?>