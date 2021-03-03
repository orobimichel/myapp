<?php 

namespace App\Controllers;


class BlogController extends Controller {

    public function welcome()
    {
        return $this->view("blog.welcome");
    }

    public function index() 
    {
        return $this->view('blog.index');
    }

    public function show (int $id)
    {

        $req = $this->db->getPDO()->query('SELECT * FROM posts');
        $posts = $req->fetchAll();
        foreach ($posts as $post) {
             echo "Titre de l'article : $post->title <br>";
           echo "<hr>";
        }
       //return $this->view('blog.show', compact('id'));


    }

}
