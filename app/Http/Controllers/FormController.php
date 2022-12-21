<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChildForm;
use App\Models\PersonDetail;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as Image;

class FormController extends Controller
{
    public function fetchCountries(){
        $country = DB::table("countries")->orderBy('name', 'ASC')->get();        
        return $country;
        // dd($country);
    }
    public function fetchStates(Request $data){
        $countryId=$data->country;
        $state = DB::table("states")->where('country_id','=',$countryId)->orderBy('name', 'ASC')->get();
        return $state;
    }

    public function fetchminibody(Request $data){
        return view('minibody');
    }

    function insert(Request $req){

        /*
        $req = request()->validate([
            'name' => ['required'],
            'dob' => ['required'],
            'c_class' => ['required'],
            'photo' => ['required|mimes:png,jpg,jpeg|max:2048|dimensions:width=100,height=100'],
            'address' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required|numeric|min:7'],
        ]);
        */

        $upload =$req->file('photo')->store('Docs');
        
        $data = new ChildForm();
        $data->name = $req['name'];
        $data->dob = $req['dob'];
        $data->class = $req['c_class'];
        $data->address = $req['address'];
        $data->country = $req['country'];
        $data->state = $req['state'];
        $data->city = $req['city'];
        $data->zipcode = $req['zipcode'];
        $data->photo = $upload;
        $data->save();
        return redirect("managekid");
    }

    public function managekid(Request $data){
        $datas = ChildForm::all();
        if(isset($datas)){
            $datas = $datas;
        }else{
            $datas = 'No data found';
        }

        return view('managekid',[
            'datas' => $datas
        ] );
    }

    function addpersonDetail(Request $req){
        $person_data = PersonDetail::where('kid_id', '=', $req['kid_id'])->count(); //7
        if($person_data >= 6){
            return 0;
        }else{
            $data = new PersonDetail();
            $data->name = $req['p_name'];
            $data->relation = $req['p_relation'];
            $data->contact = $req['p_contact'];
            $data->kid_id = $req['kid_id'];
            $data->save();
            return $data;
        }
    }

    public function showpersonform($id){
                
        $kid_data = ChildForm::findOrFail($id);

        return view('addperson',[
            'kid_id' => $kid_data->id
        ] );
    }

    public function deleteKidPerson($id){
        $person_data = PersonDetail::where('kid_id', '=', $id)->delete();                
        $kid_data = ChildForm::find($id)->delete();

        return redirect('/managekid');
    }

    public function viewques(Request $data){
        dd('viewques');
        return view('viewques');
    }


}
