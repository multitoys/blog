<?php
    
    namespace App\Http\Controllers;
    
    use App\Author;
    use Illuminate\Http\Request;
    use App\Post;
    use Illuminate\Support\Facades\Auth;
    
    class AuthorsController extends Controller
    {
        public function index()
        {
            
            // $authors = Author::get();
            //
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
        
        public function store()
        {
            
            $this->validate(request(), [
                'name' => 'required|max:50',
            ]);
            
            Author::create([
                'name' => request('name'),
            ]);
            
            return redirect('/');
            
        }
        
        public function delete($id)
        {
            
            Author::destroy($id);
            
            return redirect('/');
        }
        
        public function update()
        {
            $this->validate(request(), [
                'name' => 'required|max:50',
            ]);
            $author = Author::find(request('id'));
            $author->name = request('name');
            $author->updated_at = date('Y-m-d H:i:s');
            $author->save();
            
            return redirect('/authors/'.request("id"));
        }
    }