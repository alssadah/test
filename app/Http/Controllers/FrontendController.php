<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\LoansProduct;
use App\Models\Award;
use App\Models\Page;
use App\Models\Post;
use App\Models\Faq;
use App\Models\Branch;
use App\Models\Pointer;

use Alert;
use App\Models\Vacancy;
use App\Models\Team;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactUs;

class FrontendController extends Controller
{


    public function index()
    {
 

        $sliders = Slider::active()->take(6)->get();

        $products = LoansProduct::active()->get();  
        
         $lang = \LaravelLocalization::getCurrentLocale();
 
   
    //     $sliders =  $sliders->translate($lang);


        //$posts  = Post::with('category')->published()->orderBy('id', 'desc')->take(3)->get(); 
        $posts  = Post::with('category')->published()->where('category_id','=',1)->orderBy('id', 'desc')->take(3)->get(); 
           $posts =  $posts->translate($lang);
        //   dd($posts , $lang );
        $awards   = Award::get(); 
      
        
        // $sliders =  $sliders->load('translations');

        //   $sliders =  $sliders->translate('en');
        //  echo $sliders->getTranslatedAttribute('title');

        //   dd($posts);
        return view('site', compact('sliders', 'products', 'awards', 'posts'));
    }



    public function getpages($name)
    {


        //  dd($name);
        if ($name != '') {


            $page = Page::where('slug', $name)->active()->first();

            //  dd($page);

            //      dd($page);
            if ($page) {

                // dd($page);
                // return view('frontend.aboutus',compact('page'));
                return view('page', compact('page'));
            }
        }


        return  redirect()->back();
    }


    public function faqs()
    {
         $lang = \LaravelLocalization::getCurrentLocale();
        $faqs = Faq::get(); 
        $faqs =  $faqs->translate($lang); 
        //dd( $faqs);
        return view('faq', compact('faqs'));
    }
    
    public function pointer()
    {
        $pointers = pointer::get();

        return view('pointers', compact('pointers'));
    }

    public function vacancies()
    {

        $vacancies = Vacancy::get();
      //  dd($vacancies);
        return view('vacancies', compact('vacancies'));
    }

   
   
      public function showvacancies($id)
    {

        $vacancy = Vacancy::whereId($id)->first();
      //  dd($vacancy); 
        if ($vacancy) {

               
              return view('showvacancy', compact('vacancy'));
            }
            
         return  redirect()->back();
    }



    public function branches()
    {

        $branches = Branch::get();

        //  dd($branches);
        return view('branches', compact('branches'));
    }


    public function team()
    {

        $teams = Team::get();
        //dd($teams);
        return view('team', compact('teams'));
    }


    public function contact(Request $request)
    {

        // strip_tags($request->name);
        // strip_tags($request->phone);
        // strip_tags($request->email);

        $validator  =  $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'message' => 'required|max:255',

        ]);

        // if ($validator->fails()) {

        //     Alert::error(__('main.error'), __('main.error_message'));
        //     return  redirect()->back()->withErrors($validator)
        //         ->withInput();
        // }



        $data  = [
            'name' => strip_tags($request->name),
            'email' => strip_tags($request->email),
            'phone' => strip_tags($request->phone),
            'message' => strip_tags($request->message),

        ];

        $contact =  Contact::create($data);

       // Mail::send(new  NewContactUs($contact));

        // dd($request->all(), strip_tags($request->message));
        Alert::success(__('main.thank'), __('main.contact_message'));

         return  redirect()->back();


       // return view('branches', compact('branches'));
    }

    public function islamic()
    {
return view('islamic');

    }
}
