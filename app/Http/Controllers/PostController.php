<?php
    
    namespace App\Http\Controllers;
    
    use App\Post;
    use Illuminate\Http\Request;
    
    class PostController extends Controller
    {
        
        public function show($id)
        {
            $post = Post::find($id);
            
            return view('posts.post', compact('post'));
        }
        
        public function create($author)
        {
            return view('posts.create', ['author' => $author]);
        }
    
        public function storeNew(Request $request)
        {
            $this->validate($request, [
                'author_id' => 'required',
                'title' => 'required|max:150',
                'description' => 'required',
            ]);
        
            Post::create([
                'author_id' => $request->input('author_id'),
                'title' => $request->input('title'),
                'description' => $request->input('description'),
            ]);
        
            return redirect('/authors/'.$request->input('author_id'));
        }
    
        public function update($id)
        {
            $post = Post::find($id);
            
            return view('posts.update', compact('post'));
        }
        
        public function store(Request $request)
        {
            $this->validate($request, [
                'title' => 'required|max:150',
                'description' => 'required',
            ]);
            $post = Post::find($request->input('id'));
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->updated_at = date('Y-m-d H:i:s');
            $post->save();
            
            return redirect('/post/'.$request->input("id"));
        }
        
        public function delete($id)
        {
            Post::destroy($id);
        
            return redirect('/');
        }
    }