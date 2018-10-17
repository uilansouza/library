<?php
/**
 * Author: Uilan
 * Date: 2018-10-16
 * System: Library of Books
 */
namespace App\Http\Controllers;
use App\Library;
class LibraryController extends Controller
{
    protected $library = null;
    public function __construct(Library $library)
    {
        $this->library = $library;
    }
    
    public function allLibraries()
    {
        $library = $this->library->allLibraries();
        return response()->json($library,200);
      
    }

    public function getLibrary($id)
    {
        $library = $this->library->getLibrary($id);
        if(!$library){
           return response()->json(['response'=>'Livro nao encontrado!'],400);
        }
        return response()->json($library,200);
    }

    

    public function saveLibrary()
    {
        $library = $this->library->saveLibrary();
        return response()->json($library,201);
    }

    public function updateLibrary($id)
    {
        $library = $this->library->updateLibrary($id);
        if(!$library){
           return response()->json(['response'=>'Livro nao encontrado!'],400);
        }
        return response()->json($library,200);
    
    }

    public function deleteLibrary($id)
    {
        $library = $this->library->deleteLibrary($id);
        if(!$library){
           return response()->json(['response'=>'Livro nao encontrado!'],400);
        }
        return response()->json(['response'=>'Livro Removido com sucesso!'],200);


    }
}