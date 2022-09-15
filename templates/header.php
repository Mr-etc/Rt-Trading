<?php
    function printheader($type, $values){
        if($type == "full"){
            echo '<header class="section-header">
                <div class="wrap">
                    <div class="section-header_title">
                        <h1  data-aos="fade-up" data-aos-offset="0"  class="text">
                            <span data-aos="fade-up" data-aos-offset="0" data-aos-delay="200">'.$values[0].'</span>
                            <span data-aos="fade-up" data-aos-offset="0" data-aos-delay="200">'.$values[1].'</span>
                        </h1>
                        <span data-aos="fade-up" data-aos-offset="0" data-aos-delay="500" class="desc">'.$values[2].'</span>
                    </div>
                </div>
            </header>';
        }else if($type == 'short')
            echo '<header class="section-header small">
                    <div class="wrap">
                        <h1 data-aos="fade-left" class="header">'.$values[0].'</h1>
                    </div>
                </header>';
    }
?>