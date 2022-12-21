<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    .container {
    width: 99% !important;
}
.m-10 {
  margin: 10px;
}

</style>

<div class="container">
    <a href="/" class="btn btn-primary m-10">Back to Home</a>
    <p></p>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Dob</th>
        <th>Class</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>
        <th>Address</th>
        <th>Zip Code</th>
        {{-- <th>Photo</th> --}}
        <th>Person (Name, Relation, Contact)</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->dob}}</td>
            <td>{{$data->class}}</td>
            <td>{{ getCountryNameById($data->country) }}</td>
            <td>{{ getStateNameById($data->state) }}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->zipcode}}</td>
            {{-- <td>{{$data->photo}}</td> --}}
            <td>
                <?php 
                $persons = App\Models\PersonDetail::where('kid_id', '=', $data->id)->get();
                $cont_per = count($persons);
                if(!empty($persons)){
                    foreach ($persons as $value) {
                        echo $value->name.", ".$value->relation.", ".$value->contact."<br>";
                    }
                }
                ?>
            </td>

            <td>
                <?php
                    if($cont_per > 6){

                    }else{?>
                  <a href="addperson/{{ $data->id }}" class="btn btn-primary"> Add Person</a>
                  <?php }?>
                <a href="deleteperson/{{ $data->id }}" class="btn btn-danger"> Delete Person</a>
            </td>
          </tr>            
        @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
