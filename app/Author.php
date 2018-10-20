<?php
    
    namespace App;
    
    use App\Listeners\BlurFilter;
    use App\Listeners\SharpenFilter;
    use Illuminate\Database\Eloquent\Model;
    use QCod\ImageUp\HasImageUploads;

    class Author extends Model
    {
        use HasImageUploads;

        // which disk to use for upload, can be override by field options
//        protected $imagesUploadDisk = 'public';

        // path in disk to use for upload, can be override by field options
//        protected $imagesUploadPath = 'authors';
        // assuming `users` table has 'cover', 'avatar' columns
        // mark all the columns as image fields
        protected static $imageFields = [
//            'avatar',
            'avatar' => [
                // width to resize image after upload
                'width' => 200,

                // height to resize image after upload
                'height' => 200,

                // set true to crop image with the given width/height and you can also pass arr [x,y] coordinate for crop.
                'crop' => true,

                // what disk you want to upload, default config('imageup.upload_disk')
//                'disk' => 'public',

                // a folder path on the above disk, default config('imageup.upload_directory')
//                'path' => 'avatars',

                // placeholder image if image field is empty
//                'placeholder' => '/images/avatar-placeholder.svg',

                // validation rules when uploading image
//                'rules' => 'image|max:200',

                // override global auto upload setting coming from config('imageup.auto_upload_images')
//                'auto_upload' => false,

                // if request file is don't have same name, default will be the field name
//                'file_input' => 'photo',

                // a hook that is triggered before the image is saved
//                'before_save' => BlurFilter::class,

                // a hook that is triggered after the image is saved
                'after_save' => SharpenFilter::class
            ],
        ];

        protected $fillable = ['id', 'name', 'avatar'];
        
        public function posts(){
            return $this->hasMany(Post::class);
        }
    }