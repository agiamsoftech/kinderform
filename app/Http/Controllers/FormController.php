<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChildForm;
use App\Models\PersonDetail;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as Image;

use Illuminate\Support\Facades\Artisan;

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

    public function our_backup_database(){

        // if(DB::connection()->getDatabaseName())
        // {
        //     echo "Connected sucessfully to database ".DB::connection()->getDatabaseName().".";
        // }
        $db = DB::connection()->getDatabaseName();

        //ENTER THE RELEVANT INFO BELOW
        
        $mysqlHostName      = "127.0.0.1";
        $mysqlUserName      = "root";
        $mysqlPassword      = "";
        $DbName             = $db;
        $backup_name        = "kinderform.sql";

        $tables             = array("child_forms","countries","failed_jobs","migrations","password_resets","personal_access_tokens","person_details","states","users"); //here your tables...
        // dd($DbName);
        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();
        // dd($result);

        $output = '';
        foreach($tables as $table)
        {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach($show_table_result as $show_table_row)
            {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
                $select_query = "SELECT * FROM " . $table . "";
                $statement = $connect->prepare($select_query);
                $statement->execute();
                $total_row = $statement->rowCount();

            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
        // $file_name = $DbName. '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);
    }

    

}
