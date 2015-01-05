<?php

 namespace BethelFI\Model;

 class Position
 {
     public $id;
     public $x;
     public $y;
     public $layout_id;
     public $date_created;
     public $is_active;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->x = (!empty($data['x'])) ? $data['x'] : null;
         $this->y  = (!empty($data['y'])) ? $data['y'] : null;
         $this->layout_id  = (!empty($data['layout_id'])) ? $data['layout_id'] : null;
         $this->date_created  = (!empty($data['date_created'])) ? $data['date_created'] : null;
         $this->is_active  = (!empty($data['is_active'])) ? $data['is_active'] : 1;
     }
 }

 ?>

