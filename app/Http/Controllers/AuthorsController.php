<?php
    
    namespace App\Http\Controllers;
    
    use App\Author;
    use Illuminate\Http\Request;

    class AuthorsController extends Controller
    {
        public function index()
        {
            return view('authors.authors');
        }
        
        
        public function show($id)
        {
            $author = Author::find($id);
            
            return view('authors.author', compact('author'));
        }
        
        public function create()
        {
            return view('authors.create');
        }
        
        public function store(Request $request)
        {
            
            $this->validate($request, [
                'name' => 'required|max:50',
            ]);

            Author::create($request->all());

            return redirect('/');
        }
        
        public function delete($id)
        {
            
            Author::destroy($id);
            
            return redirect('/');
        }
        
        public function update(Request $request, $id)
        {
            $this->validate($request, [
                'name' => 'required|max:50',
            ]);
            $author = Author::find($id);
            $author->name = $request->input('name');
            $author->updated_at = date('Y-m-d H:i:s');
            $imageFile = request()->file('avatar');
            $level = 90;
            $author->setImagesField([
                'avatar' => [
                    'width' => 200,
                    'before_save' => function($image) use ($level) {
                        // The image will be 50 * 50, this will override the 100 * 100
//                        $image->resize(50, 50);
                        $image->sharpen($level);
                    },
                ]
            ]);
//            $author->cropTo($request->x, $request->y)
//                ->uploadImage($request->file('avatar'), 'avatar');
//            $author->uploadImage($request->file('avatar'), 'avatar');
            $author->save();

            return redirect('/authors/'.$id);
        }
    }