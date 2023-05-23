<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
         $categories = Category::all();
         $items = Item::all();
         return view('welcome', compact('categories','items'));
    }

 
    public function blog()
    {
         return view('pages/blog');
    }
    public function singlepost()
    {
         return view('pages/single-post');
    }

 

//    public function download(Request $request,$file)
//    {
//     return response()->download('public/backend/images/'. $file);
//     }


 
        public function download()
        {       
            $path = public_path('download/developer-sharif.pdf');
            $fileName = 'developer-sharif-CV- '.date('d-M, Y, g:i a').'.pdf'; 
            $headers = ['Content-Type: application/pdf'];
            return Response::download($path, $fileName, $headers);
            //return response()->download($filePath, $fileName, $headers);
   
        }
    


//    public function download_local(Request $request)
//    {
//     if (Storage::disk('local')->exists("pdf/$request->file")) {
//     $path = Storage::disk('local')->path("pdf/$request->file");
//      $content = file_get_contents($path); 
//     return response($content)->withHeaders([
//     'Content-Type' => mime_content_type($path) 
//     ]);
//     }
//     return redirect('/404');
//     }

     
//     public function download_public( Request $request)
//    {
//     if (Storage::disk('public')->exists("pdf/$request->file")) {
//     $path = Storage::disk('public')->path("pdf/$request->file");
//     $content = file_get_contents($path); 
//     return response($content)->withHeaders([ 
//         'Content-Type' => mime_content_type($path) 
//     ]);
//   }
//     return redirect('/404');
// }
    
    

}
