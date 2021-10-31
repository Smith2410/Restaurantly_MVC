<?php
    class Views{
        function getView($controller, $view, $data="", $categoria="", $platillo="", $pedido="", $alert="", $config = "", $cliente = "", $usuario="")
        {
            $controller = get_class($controller);
            if ($controller == "Home") 
            {
                $view = "Views/" . $view.".php";
            }else{
                $view = "Views/" . $controller . "/" . $view . ".php";
            }
            require_once($view);
        }
    }
?>