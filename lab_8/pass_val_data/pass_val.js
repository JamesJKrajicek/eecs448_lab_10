//Pass Val Javascript Functions.

function checkPass()
{
    field1 = document.getElementById("base_pass");
    field2 = document.getElementById("compare_pass");

    if (field1.value.length < 8)
    {
        alert("Your password choice is too short (8 char min)")
    }
    else if (field1.value != field2.value)
    {
        alert("The passwords do not match.")
    }
    else
    {
        field1.value="";
        field2.value="";
        alert("Passwords match!");
    }
}