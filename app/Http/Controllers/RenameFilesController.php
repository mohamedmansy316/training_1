<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image as ImageLib;
use App\Models\Rename;

class RenameFilesController extends Controller
{

    public function getRename()
    {
        return view('rename_files');
    }
    public function postRename( Request $r)
    {
        foreach($r->image as $item){
            //Generate the name
            $FileName = $item->getClientOriginalName();
            $FileExt = '.'.$item->getClientOriginalExtension();
            $FileArray = explode('-' , $FileName);
            //Resize
            // $Image = ImageLib::make($item);
            // // backup status
            // $Image->backup();
            // // Cover Low Res
            // $Image->fit(350, 350);
            // $Image->save('storage/app/images/products_gallery/thumb/'.$FileName );
            // $Image->backup();
            // $Image->fit(60, 60);
            // $Image->save('storage/app/images/products_gallery/small_thumb/'.$FileName);

            // // Save the file
            // $item->storeAs('images/products_gallery/full_size',$FileName);


            Rename::create([
                'sku' => $FileArray[0]
            ]);
        }

    }
}
