<?php
namespace App\Services;

use App\Contracts\Dao\PostDaoInterface;
use Illuminate\Http\Request;
use App\Contracts\Services\PostServiceInterface;

class PostService implements PostServiceInterface {

    private $postDao;
    public function __construct(PostDaoInterface $postDao)
    {
        $this->postDao = $postDao;
    }

    public function getAll(){
        return $this->postDao->getAll();
    }

    public function update($request,$post){

        return $this->postDao->update($request, $post);
    }

    public function create(Request $request){

        return $this->postDao->create($request);

    }
    public function delete($post){
        return $this->postDao->delete($post);
    }
    public function search(Request $request) {
        return $this->postDao->search($request);
    }
}
