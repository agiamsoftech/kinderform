<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin: 24px 30% 0 30%;
            }
        </style>
    </head>
   <body>
    <form enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Child Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" mandatory>
         
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">DOB</label>
            <input type="date" class="form-control" id="dob" aria-describedby="emailHelp">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <select name="c_class" id="c_class" class="form-control">
              <option value="0">select class</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Country</label>
            <select name="country" id="country" class="form-control" onchange="fetchStates(this.value);">
            </select>
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">State</label>
            <select name="state" id="state" class="form-control">
              <option value="">Select State</option>
            </select>
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" id="city" aria-describedby="emailHelp">
           
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="emailHelp">
           
          </div>
          
          
          
          <div class="form-group">
            <label for="exampleInputEmail1">Zip Code</label>
            <input type="number" class="form-control" id="zipcode" aria-describedby="emailHelp">
           
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Upload Photo</label>
            <input type="file" class="form-control" id="uploadfile" aria-describedby="emailHelp">
           
          </div>    

      <button type="button" class="btn btn-primary" onclick="kidSubmitForm()">Submit</button>
      </form>

     


      <!-- JavaScript Bundle with Popper -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){      
    fetchCountries();
  }); 

  function fetchCountries() {    
    var tkn = $('input[name=_token]').val();
    // alert(tkn);
    $.ajax({
        url: "/fetchCountries",
        type: "POST",
        data:{
 
            _token:tkn
        },
        cache: false,
        dataType: 'json',
        success: function(result){            
            $('#country').empty();
            $.each(result,function(index,row){
                if(row['name']=="India"){
                    $('#country').append('<option value="' + row['id'] + '" selected="">' + row['name'] + '</option>');
                }else{
                    $('#country').append('<option value="' + row['id'] + '">' + row['name'] + '</option>');
                }
            });
            var country=$("#country").val();
            fetchStates(country);
        }
    });
  }
  function fetchStates(){
    var tkn = $('input[name=_token]').val();
    var country = $('#country').val();
    $.ajax({
        url: "/fetchStates",
        type: "POST",
        data:{ 
            _token:tkn,
            country:country
        },
        cache: false,
        dataType: 'json',
        success: function(result){
            $('#state').empty();
            $.each(result,function(index,row){
            
                $('#state').append('<option value="' + row['id'] + '" selected="">' + row['name'] + '</option>');

            });
            var state=$("#state").val();
        }
    });
  }
  

  function kidSubmitForm()
  {
    var filter = /^\d*(?:\.\d{1,2})?$/;
    var name = $('#name').val();
    var dob = $('#dob').val();
    var c_class = $('#c_class').val();
    var country = $('#country').val();
    var state = $('#state').val();
    var city = $('#city').val();
    var address = $('#address').val();
    var zipcode = $('#zipcode').val().length;
    var photo = $('#uploadfile').val().length;
    
    if(name=="" ){
        alert("Please enter Name.");
        return false;
    }
    
    if(dob=="" ){
        alert("Please Select Date.");
        return false;
    }
    
    
    if(country=="" ){
        alert("Please select Country.");
        return false;
    }
    if(state=="" ){
        alert("Please select State.");
        return false;
    }
    
    if(city===0 ){
        alert("Please Enter  City.");
        return false;
    }
    if(zipcode==''){
        alert("Please Enter  Zipcode.");
        return false;
    }
    if (filter.test(zipcode)) {
      if(zipcode == 7){
      }else{
        alert("Zipcode should be 7 digit");
          return false;
      }

    }else{
      alert('Not a valid number');
      return false;
    }

    var token = $('input[name=_token]').val();
    var file_data = $('#uploadfile').prop("files")[0];
    var form_data = new FormData();
    form_data.append("name",name);
    form_data.append("dob",dob);
    form_data.append("c_class",c_class);
    form_data.append("country",country);
    form_data.append("state",state);
    form_data.append("city",city);
    form_data.append("address",address);
    form_data.append("zipcode",$('#zipcode').val());
    form_data.append("photo",file_data);
    form_data.append("_token",token);

    

    $.ajax({
        url: '{{ route("submitform")}}',
        type: 'post',
        data: form_data,
        processData: false,
        contentType: false,
        success: function(response) {
          var url = "{{ route('managekid') }}";
          $(location).attr('href',url);
        }
    });


}

</script>
   </body>
</html>
