<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Post extends Model
    {
        protected $fillable = ['author_id', 'title', 'description'];
        
        public function author(){
            return $this->belongsTo(Author::class);
        }
    }