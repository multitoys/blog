<?php
    
    namespace App\Http\Controllers;
    
    use App\Author;
    use Illuminate\Http\Request;
    use App\Post;
    
    class AuthorController extends Controller
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
            
            Author::create([
                'name' => $request->input('name'),
            ]);
            
            return redirect('/');
        }
        
        public function delete($id)
        {
            Author::destroy($id);
            
            return redirect('/');
        }
        
        public function update(Request $request)
        {
            $this->validate($request, [
                'name' => 'required|max:50',
            ]);
            $author = Author::find($request->input('id'));
            $author->name = $request->input('name');
            $author->updated_at = date('Y-m-d H:i:s');
            $author->save();
            
            return redirect('/authors/'.$request->input("id"));
        }
    }