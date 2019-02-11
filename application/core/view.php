<?php
class View{
    public function ViewWTemplate($content_view,$template_view,$data=null){

            include "application/views/$template_view";
    }
}