<?php
    /** URL sistema **/
    function base_url()
    {
        return BASE_URL;
    }

    /** Header **/
    function head($data="")
    {
        $VistaH = "Views/Template/header.php";
        require_once($VistaH);
    }

    /** TopBar **/
    function topBar($data="")
    {
        $VistaTB = "Views/Template/topBar.php";
        require_once($VistaTB);
    }

    /** navBar **/
    function navBar($data="")
    {
        $VistaNB = "Views/Template/navBar.php";
        require_once($VistaNB);
    }

    /** slider **/
    function slider($data="")
    {
        $VistaS = "Views/Template/slider.php";
        require_once($VistaS);
    }

    /** slider **/
    function sideBar($data="")
    {
        $VistaSB = "Views/Template/sideBar.php";
        require_once($VistaSB);
    }

    /** footer **/
    function footer($data="")
    {
        $VistaF = "Views/Template/footer.php";
        require_once($VistaF);
    }

    /** modals **/
    function modals($data="")
    {
        $VistaM = "Views/Template/modals.php";
        require_once($VistaM);
    }
?>