<?php
/**
 * Author: Uilan
 * Date: 2018-10-16
 * System: Library of Books
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Library extends Model
{
    protected $table = "library";
    protected $fillable =['book_name','author', 'editora','tiragem'];

    public function allLibraries()
    {
        return self::all();
    }

    public function saveLibrary()
    {
        $input = input::all(); //Recebos todos os dados pela API
        $library = new Library();
        $library->fill($input); //utilizar o recurso Mass assigner(um array);
        $library->save();
        return $library;
    }

    public function getLibrary($id)
    {
        $library = self::find($id);
        if(is_null($library)){
            return false;
        }
        return $library;
    }

    public function updateLibrary($id)
    {
        $library=self::find($id);
        if(is_null($library)){
            return false;
        }
        $input = input::all(); //Recebos todos os dados pela API
        $library->fill($input); //utilizar o recurso Mass assigner(um array);
        $library->save();
        return $library;
        
    }

    public function deleteLibrary($id)
    {
        $library = self::find($id);
        if(is_null($library)){
            return false;
        }
        return $library->delete();
    }

}
