<?php
    
    namespace App\Http\Controllers;
    
    use App\Post;
    use Illuminate\Http\Request;
    
    class PostsController extends Controller
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
    
        public function storeNew()
        {
    
            $this->validate(request(), [
                'author_id' => 'required',
                'title' => 'required|max:150',
                'description' => 'required',
            ]);
        
            Post::create([
                'author_id' => request('author_id'),
                'title' => request('title'),
                'description' => request('description'),
            ]);
        
            return redirect('/authors/'.request('author_id'));
        
        }
    
        public function update($id)
        {
            $post = Post::find($id);
            
            return view('posts.update', compact('post'));
        }
        
        public function store()
        {
            $this->validate(request(), [
                'title' => 'required|max:150',
                'description' => 'required',
            ]);
            $post = Post::find(request('id'));
            $post->title = request('title');
            $post->description = request('description');
            $post->updated_at = date('Y-m-d H:i:s');
            $post->save();
            
            return redirect('/post/'.request("id"));
        }
        
        public function delete($id)
        {
        
            Post::destroy($id);
        
            return redirect('/');
        }
    }