<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index() 
   {
    return "Je suis le contrôleur TestController";
    }
   
    
        public function show()
    {
        return view('accueil');
Route::get('/salutation/{prenom}', [TestController::class, 'greet']);
    }
    public function greet ($prenom) 
    {
        return "Bonjour, $prenom !";
    }
    public function profile($id, $age)
    {
        return "L’utilisateur $id a $age ans";
    }
    public function showArticle($id)
{
    return "Vous consultez l’article $id";
}
     public function index()
{
return 
}
}



