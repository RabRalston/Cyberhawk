<?php

    class Turbines {
        function getTurbines() {
            for ($i = 1; $i < 101; $i++) {
                
                echo '<div class="col-lg-3 mt-4">';

                if (($i % 3 == 0) && ($i % 5 == 0)){
                    echo "
                            <h3>Turbine " . $i . "</h3>
                            <h5 class='pt-3'> <i class='fas fa-exclamation-circle fa-2x'></i></h5>
                            <span>Coating Damage <br>&amp; Lighting Strike</span>
                        ";
                } elseif ($i % 3 == 0){
                    echo "
                            <h3>Turbine " . $i . "</h3>
                            <h5 class='pt-3'> 
                                <i class='fas fa-water fa-2x'></i>
                            </h5>
                            <span>Coating Damage</span>
                        ";
                } elseif ($i % 5 == 0){
                    echo "
                            <h3>Turbine " . $i . "</h3>
                            <h5 class='pt-3'> <i class='fas fa-bolt fa-2x'></i></h5>
                            <span>Lightning Strike</span>
                        ";
                } else {
                    echo "
                            <h3>Turbine " . $i . "</h3>
                            <h5 class='pt-3'> <i class='fas fa-check-circle fa-2x'></i></h5>
                            <span>No Issues</span>
                        ";
                }

                echo '</div>';
            }
        }
    }

    $turbines = new Turbines();

?>