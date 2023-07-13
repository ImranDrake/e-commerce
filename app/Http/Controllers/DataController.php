<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\SizeModel;
use App\Models\SiteModel;
use App\Models\ProductModel;
use App\Models\PriceModel;
use App\Models\ColorModel;
use App\Models\CategoryModel;
use App\Models\CartModel;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser() {
        // dd($request);
         $obj=new UserModel();
         $obj->name = "Sameer";
         $obj->emailid = "drake@gmail.com";
         $obj->password= "67890";
         $obj->save();
         return "data Inserted Sucessfully!";
        
     }

    /**
     * Store a newly created resource in storage.
     */
    public function createSize(Request $request)
    {
        $obj=new SizeModel();
         $obj->size = "42";
         $obj->save();
         return "data Inserted Sucessfully!";
        
     }

     public function createSite(Request $request)
     {
         $obj=new SiteModel();
          $obj->filepath = "/public/images/logo.png";
          $obj->sitename = "FaithFul Brand";
          $obj->save();
          return "data Inserted Sucessfully!";
         
      }

      public function createProduct(Request $request)
      {
          $obj=new productModel();
           $obj->product = "Product 6";
           $obj->price = "1000";
           $obj->save();
           return "data Inserted Sucessfully!";
          
       }

       public function createPrice(Request $request)
       {
            $obj=new priceModel();
            $obj->imagepath = "product1.jpg";
            $obj->price_models = "1800";
            $obj->color_models_id = "1";
            //$obj->product_models_id = "1";
            $obj->size_models_id = "1";
            //$obj->user_models_id = "1";
            $obj->save();
            return "data Inserted Sucessfully!";
           
        }
        public function createColor(Request $request)
        {
            $obj=new ColorModel();
             $obj->color = "grey";
             $obj->save();
             return "data Inserted Sucessfully!";
            
         }
         public function createCategory(Request $request)
         {
             $obj=new CategoryModel();
              $obj->product_category = "womens";
              $obj->save();
              return "data Inserted Sucessfully!";
             
          }

          public function createCart(Request $request)
          {
              $obj=new CartModel();
               $obj->product_models_id = "2";
               $obj->category_models_id = "2";
               $obj->save();
               return "data Inserted Sucessfully!";
              
           }

           public function getdetails () {
            $obj = PriceModel::with('priceJoinUser', 'priceJoinSize', 'priceJoinProduct', 'priceJoinColor','priceJoinCategory',)->get();
            return $obj;
            }

            public function getdetailsCart () {
                $obj = CartModel::with('categoryJoinCart','productJoinCart')->get();
                return $obj;
                }
          
    

        
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
