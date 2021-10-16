<?php
    require_once 'FilesList.php';
    class NavMenu extends FilesList {
        public function __construct($current_page, $brand, $navbar_color = 'navbar-dark', $bg_color = 'bg-light', $items_tab ){
            $this->current_page = substr($current_page,9);
            $this->brand        = $brand;
            $this->bg_color     = $bg_color;
            $this->navbar_color = $navbar_color;
            $this->items_tab    = $items_tab;

            $this->display_navMenu();
        } 
            
        private function display_navMenu(){
            ?>    
            <nav class='navbar navbar-expand-md <?= $this->navbar_color.' '.$this->bg_color ?>'>
                <div class='container-fluid'>
                    <img class='navbar-brand' src='<?=FilesList::$brand_list[$this->brand]?>' width='50px' alt='FCB'>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNav'>
                        <ul class='navbar-nav'>
                            <?php
                                foreach(FilesList::$items_list as $i=> $item){
                                    if ($this->items_tab[$i] == 1){
                                        if(FilesList::$items_list[$i][0] == $this->current_page){
                                            $class = "<a class='nav-link active text-decoration-underline' aria-current='page' href='";
                                        }
                                        else {
                                            $class = "<a class='nav-link' href='";
                                        }
                                        echo "<li class='nav-item'>".$class.FilesList::$items_list[$i][0]."'>".FilesList::$items_list[$i][1]."</a></li>";;
                                    }   
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php
        }
    }