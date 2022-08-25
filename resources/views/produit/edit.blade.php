<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Creation produit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
<!-- partial:index.partial.html -->
<form action="/produit/update/{{$produit->id}}"  method="post">
@method('put')
@csrf
<div class="wrap">
    <div class="my-5">
              
                 <span class="block text-red-500"></span>
               
            </div>
    
    <div class="form-header">
    <h2>Registration</h2>
    </div>
    <div class="form-body">
    <fieldset>
    <legend><i class="fa fa-"></i> Modifier produit</legend>
   <label for="nom" >Nom</label>
   <input type="text" id="name" name="name" required value="{{$produit->name}}">
   <label for="description" >Description</label>
   <input  type="text" id="description" name="description" required value="{{$produit->description}}">
   <label for="prix" >Prix</label>
   <input type="text" id="prix" name="prix" required value="{{$produit->prix}}">
   <!-- <label for="state">State</label> -->
   <!-- <select id="state" name="state" required> -->
   <!-- <option value=""></option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option> -->
   <!-- </select> -->


    <fieldset class="sub-opts">
        
    <legend><i class="fa fa-tags"></i> categorie produit</legend>
    <br>
    <input type="radio" name="subscription" value="free" id="free">

    <div class="sub-opt">
        
        <select name="categorie" id="categorie">
               @foreach ($categories as $category)
                   @if ($category->id != $produit->category_id)
                     <option value="{{ $category->id }}"> {{ $category['name'] }}</option>
                   @endif
               @endforeach

       
        </select>
       
    
    </div>
    </fieldset>
    </div>
    <div class="form-footer">
        <input type="submit" value="Modifier produit">
    </div>

						
</form>
</div>
<!-- partial -->
</body>
</html>


<style type="text/css">
    /* Red: F24865, Light Gray: F4F4F4, Blue: 45CAE6, Green: 09C775, Dark Gray: 797979 */
@import url(https://fonts.googleapis.com/css?family=Quicksand:400,300,700);
* {
box-sizing: border-box;
font-family: Quicksand, sans-serif;
}
body {
background-color: #797979;
color: #444;
display: flex;
justify-content: center;
align-items: center;
font-size: 18px;
font-weight: 400;
margin: 0;
padding: 0;
}
.wrap {
margin: 15px;
max-width: 600px;
width: 100%;
}
.wrap form {
box-shadow: 0 1px 3px rgba(0,0,0,.3);
}
.form-header {
background-color: #45CAE6;
border-radius: 4px 4px 0 0;
padding: 1em;
}
.form-header h2 {
color: #fff;
font-weight: 700;
font-size: 1.75em;
margin: 0;
}
.form-body {
background-color: #fff;
padding: 1em;
}
.form-body label,
.form-body input,
.form-body select,
.form-body textarea {
display: block;
width: 100%;
}
.form-body label {
font-size: .8em;
font-weight: 90;
line-height: 1;
margin: .75em 0 .25em;
}
.form-body input,
.form-body select,
.form-body textarea {
background-color: #f4f4f4;
border: none;
border-radius: 41px;
padding: .250em;
}
.form-body fieldset {
border: none;
margin: 0 0 1em;
padding: 0;
}
.form-body fieldset:last-of-type {
margin-bottom: 0;
}
.form-body fieldset legend {
font-size: 1.25em;
font-weight: 700;
}
.form-footer {
background-color: #e2e2e2;
border-radius: 0 0 4px 4px;
padding: 1em;
}
.form-footer input[type="submit"] {
background-color: #F24865;
border: none;
border-radius: 4px;
color: #fff;
padding: 1em 1.5em;
}
/******** Subscription option actions ********/
.sub-opts input[name="subscription"] {
display: none;
}
.sub-opts input[name="subscription"] + .sub-opt {
background-color: #f4f4f4;
border-radius: 4px;
font-weight: 700;
}
.sub-opts input[name="subscription"]:checked + .sub-opt {
background-color: #09C775;
color: #fff;
}
.sub-opts input[name="subscription"] + .sub-opt .sub-label .fa {
display: none;
}
.sub-opts input[name="subscription"]:checked + .sub-opt .sub-label .fa {
display: inline-block;
}
.sub-opts .sub-opt .sub-label {
display: block;
cursor: pointer;
font-size: 1em;
padding: 1em;
}
.sub-opts .sub-opt .sub-label span.price {
display: inline-block;
float: right;
}
</style>