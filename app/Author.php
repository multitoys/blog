<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    use QCod\ImageUp\HasImageUploads;

    class Author extends Model
    {
        use HasImageUploads;

        // which disk to use for upload, can be override by field options
        protected $imagesUploadDisk = 'local';

        // path in disk to use for upload, can be override by field options
        protected $imagesUploadPath = 'uploads';
        // assuming `users` table has 'cover', 'avatar' columns
        // mark all the columns as image fields
        protected static $imageFields = [
            'cover', 'avatar'
        ];

        protected $fillable = ['id', 'name', 'cover', 'avatar'];
        
        public function posts(){
            return $this->hasMany(Post::class);
        }
    }