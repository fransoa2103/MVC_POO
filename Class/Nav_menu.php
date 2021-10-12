<?php
    require_once 'Files_name.php';
    class Nav_menu extends Files_name {
        public function __construct($current_page, $brand, $navbar_color = 'navbar-dark', $bg_color = 'bg-light', $menu ){
            $this->current_page = substr($current_page,9);
            $this->brand        = $brand;
            $this->bg_color     = $bg_color;
            $this->navbar_color = $navbar_color;
            $this->menu         = $menu;

            $this->display_navMenu();
        } 
            
        private function display_navMenu(){
            ?>    
            <nav class='navbar navbar-expand-md <?= $this->navbar_color.' '.$this->bg_color ?>'>
                <div class='container-fluid'>
                    <img class='navbar-brand' src='<?= $this->brand ?>' width='50px' alt='fcb logo'>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <ul class='navbar-nav'>
                            <?php
                                for($i=0; $i<count($this->menu); $i++){
                                    if($this->menu[$i][0] == $this->current_page){
                                        $class_text = "'nav-link active' aria-current='page'";
                                    }
                                    else {
                                        $class_text = "'nav-link'";
                                    }
                                    echo "<li class='nav-item'><a class=".$class_text." href='".$this->menu[$i][0]."'>".$this->menu[$i][1]."</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php
        }
    }