<?php
namespace App\Dao;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Dao\PostDaoInterface;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Services\PostServiceInterface;

class PostDao implements PostDaoInterface{

    
    public function getAll(){

        return Post::latest()->paginate(3);
    }

    public function create(Request $request){
        $request->validate([
            "title" => ["required"],
            "description" => ["required"],
            'img' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);

        $post_img_name = null;
        if ($request->hasFile('img')) {
            $post_img_file = $request->file('img');
            $post_img_name = uniqid() . '_' . time() . '.' . $post_img_file->getClientOriginalName();
            Storage::disk('public')->put('post/' . $post_img_name, file_get_contents($post_img_file));
        }
        return Post::create(
            [
                'title' => $request->title,
                 'description' => $request->description,
                 'img' => $post_img_name,
                 ]
        );
    }

    public function update($request,$post){
        $request->validate([
            "title" => ["required"],
            "description" => ["required"],
        ]);
        $input = $request->all();
        $post_img_name = null;
        if ($request->hasFile('img')) {
            $post_img_file = $request->file('img');
            $post_img_name = uniqid() . '_' . time() . '.' . $post_img_file->getClientOriginalName();
            Storage::disk('public')->put('post/' . $post_img_name, file_get_contents($post_img_file));
            $input['img'] =  $post_img_name;
        }
        else{
            unset($input['img']);
        }
       return $post->update($input);
    }

    public function delete($post){
        return $post->delete();
    }
    public function seemore($post){
        return Post::where('id','=',$post->id )->first();
    }
}