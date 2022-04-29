


//Reg Ex Declaration - Globaly.
var $FNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $LNameLNameRegEx = /^([a-zA-Z]{2,20})$/;
var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
var $PasswordRegEx = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,12}$/;

var TxtFirstnameFlag=false,
    TxtLastnameFlag=false,
    TxtEmailIdFlag=false,
    TxtPasswordFlag=false,
    TxtAddressFlag=false,
    TxtDesignationFlag=false,
    TxtGenderFlag=false,
    TxtFileFlag=false;

$(document).ready(function() 
{
    $("#Fname").blur(function() 
    {
        TxtFirstnameFlag = false;
        $("#FnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#FnameValidation").html(" * First name Required..!!");
            // alert("#FnameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("#FnameValidation").html(" * Invalid First Name..!!");
                // alert("#FnameValidation");
            } 
            else 
            {
                TxtFirstnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtFirstnameFlag = false;
    $("#FnameValidation").empty();
    if ($("#Fname").val() == "") 
    {
        $("#FnameValidation").html(" * First Name Required..!!");
    } 
    else 
    {
        if (!$("#Fname").val().match($FNameLNameRegEx)) 
        {
            $("#FnameValidation").html(" * Invalid First Name..!!");
        } 
        else 
        {
            TxtFirstnameFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Lname").blur(function() 
    {
        TxtLastnameFlag = false;
        $("#LnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#LnameValidation").html(" * Last name Required..!!");
            // alert("#LameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("LnameValidation").html(" * Invalid Last Name..!!");
                // alert("#LnameValidation");
            } 
            else 
            {
                TxtLastnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtLastnameFlag = false;
    $("#LnameValidation").empty();
    if ($("#Lname").val() == "") 
    {
        $("#LnameValidation").html(" * Last Name Required..!!");
    } 
    else 
    {
        if (!$("#Lname").val().match($FNameLNameRegEx)) 
        {
            $("#LnameValidation").html(" * Invalid Last Name..!!");
        } 
        else 
        {
            TxtLastnameFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Lname").blur(function() 
    {
        TxtLastnameFlag = false;
        $("#LnameValidation").empty();
        if ($(this).val() == "") 
        {
            $("#LnameValidation").html(" * Last name Required..!!");
            // alert("#LameValidation");
        } 
        else 
        {
            if (!$(this).val().match($FNameLNameRegEx)) 
            {
                $("LnameValidation").html(" * Invalid Last Name..!!");
                // alert("#LnameValidation");
            } 
            else 
            {
                TxtLastnameFlag = true;
            }
        }
    });
});
$("#BtnSubmit").click(function() 
{
    TxtEmailIdFlag = false;
    $("#EmailValidation").empty();
    if ($("#Email").val() == "") 
    {
        $("#EmailValidation").html(" * Email Required..!!");
    } 
    else 
    {
        if (!$("#Email").val().match($EmailIdRegEx)) 
        {
            $("#Emaildation").html(" * Invalid Email..!!");
        } 
        else 
        {
            TxtEmailIdFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Email").blur(function() 
    {
        TxtEmailIdFlag = false;
        $("#EmailValidation").empty();
        if ($(this).val() == "") 
        {
            $("#EmailValidation").html(" * Email Required..!!");
            // alert("#EmailValidation");
        } 
        else 
        {
            if (!$(this).val().match($EmailIdRegEx)) 
            {
                $("EmailValidation").html(" * Invalid Email..!!");
                // alert("#EmailValidation");
            } 
            else 
            {
                TxtEmailIdFlag = true;
            }
        }
    });
});

$("#BtnSubmit").click(function() 
{
    TxtPasswordFlag = false;
    $("#PasswordValidation").empty();
    if ($("#Password").val() == "") 
    {
        $("#PasswordValidation").html(" * Password Required..!!");
    } 
    else 
    {
        if (!$("#Password").val().match($PasswordRegEx)) 
        {
            $("#PasswordValidation").html(" * Invalid Password..!!");
        } 
        else 
        {
            TxtPasswordFlag = true;
        }
    }
});

$(document).ready(function() 
{
    $("#Password").blur(function() 
    {
        TxtPasswordFlag = false;
        $("#PasswordValidation").empty();
        if ($(this).val() == "") 
        {
            $("#PasswordValidation").html(" * Password Required..!!");
            // alert("#PasswordValidation");
        } 
        else 
        {
            if (!$(this).val().match($PasswordRegEx)) 
            {
                $("PasswordValidation").html(" * Invalid Password..!!");
                // alert("#PasswordValidation");
            } 
            else 
            {
                TxtPasswordFlag = true;
            }
        }
    });
});

$("#BtnSubmit").click(function() 
{
    TxtAddressFlag = false;
    $("#AddressValidation").empty();
    if ($("#Address").val() == "") 
    {
        $("#AddressValidation").html(" * Address Required..!!");
    } 				
});

$(document).ready(function() 
{
    $("#Address").blur(function() 
    {
        TxtAddressFlag = false;
        $("#AddressValidation").empty();
        if ($(this).val() == "") 
        {
            $("#AddressValidation").html(" * Address Required..!!");
            // alert("#AddressValidation");
        } 
    });
});

$("#BtnSubmit").click(function() 
{
    TxtDesignationFlag = false;
    $("#DesignationValidation").empty();
    if ($("#Designation").val() == "") 
    {
        $("#DesignationValidation").html(" * Designation Required..!!");
    } 
    
});

$(document).ready(function() 
{
    $("#Designation").blur(function() 
    {
        TxtDesignationFlag = false;
        $("#DesignationValidation").empty();
        if ($(this).val() == "") 
        {
            $("#DesignationValidation").html(" * Designation Required..!!");
            // alert("#DesignationValidation");
        } 
    });
});
