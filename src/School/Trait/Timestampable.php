<?php

namespace App\School\Trait;

trait Timestampable{
    public function updateTimestamps(){
        $now = new \DateTime();
        $this->updateAt=$now;
        if(!$this->createdAt){
            $this->createdAt=$now;
        }
    }
}