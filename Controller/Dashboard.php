<?php
    class Dashboard extends Controllers{
        protected $totalPagar, $tot = 0;
        public function __construct()
        {
            session_start();
            if (empty($_SESSION['activo'])) 
            {
                header("location: " . base_url());
            }
            parent::__construct();
        }

        public function dashboard()
        {
            $this->views->getView($this, "Dashboard");
        }
    }
?>