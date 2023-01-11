
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width,initial scale=1"/>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
	<title>Student Crud Operation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
    h1 {text-align: center;}
    </style>
</head>
<body>
<!-- <form id="myform" action = "http://0.0.0.0:5000/upload" method = "POST" enctype='application/json'> -->
  <form id="myform" method = "POST" action = "/home" enctype='application/json' > 

  <div class="container">

<a href="http://125.17.181.198/" target="_blank"><img src="../static/img/Stjoseph.jpeg" alt="" width="1000px" ></a><br><hr>



<h3>INFORMATION</h3>

<div class="form-group">
<label for="inputState">Name Of College</label>
<select name="NameOfClg" id = "Clg_name" class="form-control" onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="St. Josephs College Of Engineering">St. Joseph's College Of Engineering</option>
  <option value="St. Josephs Institute Of Technology">St. Joseph's Institute Of Technology</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Name</label>
<input type="text" id ="Name" class="form-control" name="Name" placeholder="Enter Name" onchange="inputValue(event)">
</div>

<div class="form-group">
<label for="inputState">Mode Of Entry</label>
<select name="ModeOfEntry" id = "Mode" class="form-control"  onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="Parents">Visitor</option>
  <option value="Parent">Parent</option>
  <option value="Hostel Parent">Hostel Parent</option>
  <option value="Vendor">Vendor</option>
  <option value="Alumni">Alumni</option>
  <option value="Driver">Driver</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Relation</label>
<select name="Relation" id = "Relation" class="form-control"  onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="Father">Father</option>
  <option value="Mother">Mother</option>
  <option value="Grand Father">Grand Father</option>
  <option value="Grand Mother">Grand Mother</option>
  <option value="Sister">Sister</option>
  <option value="Brother">Brother</option>
  <option value="Guardian">Guardian</option>

  </select>
</div>

<div class="form-group">
<label for="inputState">Sex</label>
<select name="Sex" id = "Sex" class="form-control"  onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Identity Proof</label>
<select name="IdentityProof" id = "Idproof" class="form-control"  onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="Aadhaar ID">Aadhaar ID</option>
  <option value="Voter ID">Voter ID</option>
  <option value="License">License</option>
  <option value="PAN Card">PAN Card</option>
  <option value="Ration Card">Ration Card</option>
  <option value="Government State">Government State</option>
  <option value="Government Central">Government Central</option>
  <option value="Company ID">Company ID</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Identity Proof No</label>
<input type="text" class="form-control" name="IdentityProofNo" placeholder="Enter Identity Proof No" id = "Proof_no"  onchange="inputValue(event)">
</div>

<div class="form-group">
<label for="inputAddress">Mobile Number</label>
<input type="text" class="form-control" name="MobileNumber" placeholder="Enter Mobile Number" id = "Ph_no"  onchange="inputValue(event)">
</div>

<div class="form-group">
<label for="inputAddress">Purpose Of Visit</label>
<input type="text" class="form-control" name="PurposeOfVisit" placeholder="Enter Purpose Of Visit" id = "Purpose"  onchange="inputValue(event)"> 
</div>

<div class="form-group">
<label for="inputState">Department</label>
<select name="Department" id = "Department" class="form-control" onchange="inputValue(event)">

  <option selected>Choose...</option>
  <option value="B.E. - CSE">B.E. - CSE</option>
  <option value="B.E. - ECE">B.E. - ECE</option>
  <option value="B.E. - MECH">B.E. - MECH</option>
  <option value="B.E. - EIE">B.E. - EIE</option>
  <option value="B.E. - EEE">B.E. - EEE</option>
  <option value="B.E. - ICE">B.E. - ICE</option>
  <option value="B.E. - CIVIL">B.E. - CIVIL</option>
  <option value="B.Tech. - IT">B.Tech. - IT</option>
  <option value="B.Tech. - Biotechnology">B.Tech. - Biotechnology</option>
  <option value="B.Tech. - Chemical Engineering">B.Tech. - Chemical Engineering</option>
  <option value="B.Tech. - ADS">B.Tech. - ADS</option>
  <option value="B.Tech. - AML">B.Tech. - AML</option>\
  <option value="M.E. - Power Electronics & Drives">M.E. - Power Electronics & Drives</option>
  <option value="M.E. - CSE">M.E. - CSE</option>
  <option value="M.E. - Applied Electronics">M.E. - Applied Electronics</option>
  <option value="M.E. - Manufacturing Engineering">M.E. - Manufacturing Engineering</option>
  <option value="M.Tech. - Biotechnology">M.Tech. - Biotechnology</option>
  <option value="M.B.A">M.B.A</option>
  <option value="M.B.A - Integrated 5 Yrs">M.B.A - Integrated 5 Yrs</option>
  <option value="OFFICE">Office</option>
  </select>
</div>

<div class="form-group">
<label for="inputState">Meeting Person</label>
<select name="MeetingPerson" id = "Meet_person" class="form-control" onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="HEAD OF DEPARTMENT">Head Of Department</option>
  <option value="PRINCIPAL">Principal</option>
  <option value="DEAN">Dean</option>
  <option value="CHAIRMAN">Chairman</option>
  <option value="MANAGING DIRECTOR">Managing Director</option>
  <option value="MANAGER">Manager</option>
  <option value="DIRECTOR">Director</option>
  <option value="PLACECMENT">Placement</option>
  <option value="ABHS">ABHS</option>
  <option value="EXAM OFFICE">Exam Office</option>
  <option value="LIBRARY">Library</option>
  </select>
</div>

<div class="form-group">
<label for="inputAddress">Number Of Persons</label>
<input type="text" class="form-control" id="no_of_ppl" name="NumberOfPersons" placeholder="Enter Number Of Persons" onclick="inputValue(event)">
</div>


<h3>PHOTO DETAILS</h3>
             <!-- <img src= '/home/snekha/hackathons/Reception_website/final/Reception-Software/static/shot1/new.jpg' alt="" width="1000px" ><br><hr> 
             <img src= '/home/snekha/hackathons/Reception_website/final/Reception-Software/static/shot2/new.jpg' alt="" width="1000px" ><br><hr>  -->
             <div class="form-group">
<label for="inputState">Picture Location</label>
<select name="Pic_loc" id = "Pic_loc" class="form-control" onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="/home/kishore/Reception_website/Final_website">Default</option>
  </select>
</div>
<div class="form-group">
<label for="inputState">Pdf Location</label>
<select name="Pdf_loc" id = "Pdf_loc" class="form-control" onchange="inputValue(event)">
  <option selected>Choose...</option>
  <option value="../static/shot/">Default</option>
  </select>
</div>
          <button id="btn" onclick="inputValue(event)" style="background-color:#53760D;color:#D0F18F">SUBMIT</button>
        	<!-- <input type="submit" name="submit" id="submit" class="btn btn-info btn-large" value="Submit"/> -->
                </form>
               
</body>
<script>
    function imageIsLoaded(e){localStorage.theImage = e.target.result;}
    const input={"Clg_name":"","Name":"","Mode":"","Relation":"","Sex":"","Idproof":"","Proof_no":"","Ph_no":"","Purpose":"","Department":"","Meet_person":"","no_of_ppl":"","Pic_loc":"","Pdf_loc":""}
    function inputValue(event){
            input[event.target.id]=event.target.value
            console.log(JSON.stringify(input))
    }

    document.querySelector("#btn").addEventListener('click',function(event){
            event.preventDefault();
            fetch("/home",{method:'post',body:JSON.stringify(input)}).then(res=>{
                alert("Form submitted")
                window.location.replace("/pdfview")
            })
    }) 
    <script>

    
</script>
</html>