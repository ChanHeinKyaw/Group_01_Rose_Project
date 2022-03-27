<?php
namespace App\Dao;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Contracts\Dao\PostDaoInterface;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Services\PostServiceInterface;

class PostDao implements PostDaoInterface{

    private $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }
    public function getAll(){

        return $this->model->latest()->paginate(3);
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
        return $this->model->create(
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
            'img' => 'required|image|mimes:jpeg,jpg,png,gif',
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
    public function search(Request $request) {
        $search = $request->input('search');
        $items = Students::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('phone', 'LIKE', "%{$search}%")
                    ->orWhere('dob', 'LIKE', '%' . $search . '%')
                    ->orWhere('address', 'LIKE', "%{$search}%")
                    ->orWhere(function ($query) use ($search) {
                        $query->whereHas('major', function ($q) use ($search) {
                            $q->where('name', 'LIKE', '%' . $search . '%');
                        });
                    })->get();
        return $items;
    }
}