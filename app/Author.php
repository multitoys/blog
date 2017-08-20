<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Author extends Model
    {
        protected $fillable = ['id', 'name'];
        
        public function posts(){
            return $this->hasMany(Post::class);
        }
    }