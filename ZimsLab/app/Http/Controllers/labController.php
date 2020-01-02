<?php

namespace App\Http\Controllers;

use App\labModel;
use App\User;
use App\subCategory;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;
use App\Http\Requests\SubCategoryRequest;
use App\Http\Requests\HardwareRequest;
use Auth;


class labController extends Controller
{
    //public function preview(){
       // $data['hardwares'] = labModel::all();
       // $data['subCategories'] = subCategory::all();
       // $data['catagories'] = Category::all();
       // return view('welcome',$data);
    //}
    public function search(Request $request){
        $data['categories'] = Category::all();

        $data['subcategories'] = subCategory::where('category_id',$request->category_id)->get();
        $data['searchedSubcategories'] = subCategory::where('id',$request->sub_category_id)->get();
        $data['searchedHardwares'] = labModel::where('sub_category_id',$request->sub_category_id)->get();
        return view('welcome',$data);
    }
    public function hardwareList(){
        $data['hardwares'] = labModel::all();
        $data['subCategories'] = subCategory::all();
        $data['catagories'] = Category::all();
        
        return view('hardwareList',$data);
    }
    public function deleteHardware($id){
        $data = labModel::find($id);
        $data->delete();

        return redirect(route('hardwareList'));
    }
    public function addHardwares(){
        return view('addHardwares');
    }
    public function category(){
        return view('category');
    }
    public function addCategory(FieldRequest $request){

        $validatedData = $request->validated();
        Category::create($validatedData);

        return back()->with('success','Category is successfully added and data has been saved');
    }
    public function subCategory(){
        $data['categories'] = Category::all();
        return view('subCategory',$data);
    }
    public function addSubCategory(SubCategoryRequest $request){
        $validatedData = $request->validated();
        subCategory::create($validatedData);

        return back()->with('success','Sub Category is successfully added and data has been saved');
    }
    public function hardware(){
        $data['categories'] = Category::all();
        $data['Subcategories'] = subCategory::all();
        return view('hardware',$data);
    }
    public function addHardware(HardwareRequest $request){
        $validatedData = $request->validated();
        labModel::create($validatedData);

        return back()->with('success','Hardware is successfully added and data has been saved');
    }
    public function management(){
        return view('management');
    }
    public function manageCategory(){
        $data['categories'] = Category::all();

        return view('manageCategory',$data);
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route('manageCategory')); 
    }
    public function editCategory($id){
        $category = Category::find($id);

        return view('editCategory',compact($category,'category'));
    }
    public function updateCategory(Request $request,$id){
        $category = Category::find($id);
        $updateCategory = $request->all();
        $category->category_name = $updateCategory['category_name'];
        $category->category_description = $updateCategory['category_description'];
        $category->save();

        return redirect(route('manageCategory'));
    }
    public function manageSubCategory(){
        $data['subcategories'] = subCategory::all();
        $data['categories'] = Category::all();

        return view('manageSubCategory',$data);
    }
    public function deleteSubCategory($id){
        $subcategory = subCategory::find($id);
        $subcategory->delete();
        return redirect(route('manageSubCategory'));
    }
    public function editSubCategory($id){
        $subcategory = subCategory::find($id);

        return view('editSubCategory',compact($subcategory,'subcategory'));
    }
    public function updateSubCategory(Request $request,$id){
        $subcategory = subCategory::find($id);
        $updatesubCategory = $request->all();
        $subcategory->sub_category_name = $updatesubCategory['sub_category_name'];
        $subcategory->category_id = $updatesubCategory['category_id'];
        $subcategory->save();

        return redirect(route('manageSubCategory'));
    }
}
