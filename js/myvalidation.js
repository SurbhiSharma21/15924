// email validation
  var validate_email = function(email){
  var pattern =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var is_email_valid = false;
  if(email.match(pattern) != null){
    is_email_valid = true;
  }
  return is_email_valid;
}

$(document).on("focusout", "#email", function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_email(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid email...");
    }
  }
});

$(document).on("blur", "#email", function(){
  var input_val = $(this).val();
  var is_success = validate_email(input_val); 

  if(!is_success){
    $("#email").focus();
  
  }
});
//end email validation
//name validation
var validate_name = function($this){
  var pattern =  /^[a-zA-Z0-9 ]+$/;
  var is_name_valid = false;
  if($this.match(pattern) != null){
    is_name_valid = true;
      }
  return is_name_valid;
}

$(document).on("keyup", "#fname",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_name(input_val);   
    if(!is_success){
      $(this).focus();
       alert("not enter a valid name...");
    }
  }
});

$(document).on("focusout", "#fname", function(){
  var input_val = $(this).val();
  var is_success = validate_name(input_val); 

  if(!is_success){
    $("#fname").focus();
  
  }
});
//end name validation
//last name validation

$(document).on("keyup", "#lname",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_name(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid last name...");
    }
  }
});

$(document).on("focusout", "#lname", function(){
  var input_val = $(this).val();
  var is_success = validate_name(input_val); 

  if(!is_success){
    $("#lname").focus();
  
  }
});
//end lname validation

//to validate DOB
var validate_dob = function(dob){
  var pattern =  /\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/;
  var is_dob_valid = false;
  if(dob.match(pattern) != null){
    is_dob_valid = true;
  }
  return is_dob_valid;
}
$(document).on("keyup", "#dob",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_dob(input_val);   
    if(!is_success){
      $(this).focus();
       alert("must be in form of dd/mm/yyyy");
    }
  }
});

$(document).on("focusout", "#dob", function(){
  var input_val = $(this).val();
  var is_success = validate_dob(input_val); 

  if(!is_success){
    $("#dob").focus();
  
  }
});
//end DOB

//to validate MOB
var validate_mob = function(phone){
  var pattern =  /^(\+|\d)[0-9]{5,16}$/;
  var is_mob_valid = false;
  if(phone.match(pattern) != null){
    is_mob_valid = true;
  }
  return is_mob_valid;
}
$(document).on("keyup", "#phone",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_mob(input_val);   
    if(!is_success){
      $(this).focus();
       alert("must be in form of +91xxxxxxxx");
    }
  }
});

$(document).on("focusout", "#phone", function(){
  var input_val = $(this).val();
  var is_success = validate_mob(input_val); 

  if(!is_success){
    $("#phone").focus();
  
  }
});
//end MOB
//job title
$(document).on("keyup", "#designation",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_name(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid JOB TITLE...");
    }
  }
});

$(document).on("focusout", "#designation", function(){
  var input_val = $(this).val();
  var is_success = validate_name(input_val); 

  if(!is_success){
    $("#designation").focus();
  
  }
});
//job title

//organization
$(document).on("keyup", "#organization",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_name(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid organization name...");
    }
  }
});

$(document).on("focusout", "#organization", function(){
  var input_val = $(this).val();
  var is_success = validate_name(input_val); 

  if(!is_success){
    $("#organization").focus();
  
  }
});
//organization

//dept
$(document).on("keyup", "#department",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_name(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid dept name...");
    }
  }
});

$(document).on("focusout", "#department", function(){
  var input_val = $(this).val();
  var is_success = validate_name(input_val); 

  if(!is_success){
    $("#department").focus();
  
  }
});
//dept
//address
var validate_address = function(address){
  var pattern =  /^[a-zA-Z0-9 ]+$/;
  var is_address_valid = false;
  if(address.match(pattern) != null){
    is_address_valid = true;
  }
  return is_address_valid;
}
$(document).on("keyup", "#address",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_address(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid address...");
    }
  }
});

$(document).on("focusout", "#address", function(){
  var input_val = $(this).val();
  var is_success = validate_address(input_val); 

  if(!is_success){
    $("#address").focus();
  
  }
});
//address
//qualification year
var validate_year = function($this){
  var pattern =  /^(19|20)\d{2}$/;
  var is_year_valid = false;
  if($this.match(pattern) != null){
    is_year_valid = true;
  }
  return is_year_valid;
}
$(document).on("keyup", "#hsc2",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_year(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid year  -YYYY...");
    }
  }
});

$(document).on("focusout", "#hsc2", function(){
  var input_val = $(this).val();
  var is_success = validate_year(input_val); 

  if(!is_success){
    $("#hsc2").focus();
  
  }
});

$(document).on("keyup", "#ssc2",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_year(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid year  -YYYY...");
    }
  }
});

$(document).on("focusout", "#ssc2", function(){
  var input_val = $(this).val();
  var is_success = validate_year(input_val); 

  if(!is_success){
    $("#ssc2").focus();
  
  }
});
$(document).on("keyup", "#graduation2",  function(event){
  var keypressed = event.which;
  var input_val = $(this).val();
  var is_success = true;
  if(keypressed == 9){
    is_success = validate_year(input_val);   
    if(!is_success){
      $(this).focus();
       alert("enter a valid year  -YYYY...");
    }
  }
});

$(document).on("focusout", "#graduation2", function(){
  var input_val = $(this).val();
  var is_success = validate_year(input_val); 

  if(!is_success){
    $("#graduation2").focus();
  
  }
});
//qualification year nxt


//tooltip
$("#appyForm :input").tooltip({
    position: "center right",
    offset: [-2, 10],
    effect: "fade",
    opacity: 0.9
});


//