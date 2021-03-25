<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable; 

class Faq extends Model 

{ 
      use Translatable;

      protected $translatable = ['question', 'answer'];
     
    public function save(array $options = [])
    {   
        
      
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && app('VoyagerAuth')->user()) {
            $this->author_id = app('VoyagerAuth')->user()->getKey();
        }

        parent::save();
    }

}
