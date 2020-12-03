function checkInputValidity ()
{
    valid_form = true;
    usr_email        = document.getElementById("usr_email");
    usr_pass         = document.getElementById("usr_pass");
    iphone_quantity  = document.getElementById("iphone");
    ipad_quantity    = document.getElementById("ipad");
    imac_quantity    = document.getElementById("imac");
    errs             = document.getElementById("errs");
    errs.innerHTML   = "";
    if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(usr_email.value)))
    {
        valid_form = false;
        t_old_txt = errs.innerHTML;
        usr_email.className = "invalid";
        errs.innerHTML = t_old_txt+"! Invalid email format.<br>";
         
    }
    else
    {
        usr_email.className = "";
    }
    if (usr_pass.value === "")
    {
        valid_form = false;
        t_old_txt = errs.innerHTML;
        usr_pass.className = "invalid";
        errs.innerHTML = t_old_txt+"! You must include a password.<br>";
    }
    else
    {
        usr_pass.className = "";
    }
    if (iphone_quantity.value<0 || iphone_quantity.value == "")
    {
        valid_form = false;
        iphone_quantity.className = "invalid";
        errs.innerHTML = errs.innerHTML+"! iPhone quantity must be an positive integer.<br>";
    }
    else
    {
        iphone_quantity.className = "";
    }

    if (ipad_quantity.value<0 || ipad_quantity.value == "")
    {
        valid_form = false;
        ipad_quantity.className = "invalid";
        errs.innerHTML = errs.innerHTML+"! iPad quantity must be an positive integer.<br>";
    }
    else
    {
        ipad_quantity.className = "";
    }

    if (imac_quantity.value<0 || imac_quantity.value == "")
    {
        valid_form = false;
        imac_quantity.className = "invalid";
        errs.innerHTML = errs.innerHTML+"! iMac quantity must be an positive integer.<br>";
    }
    else
    {
        imac_quantity.className = "";
    }

    if(document.querySelector('input[name="shipping"]:checked') == null)
    {
        valid_form = false;
        errs.innerHTML = errs.innerHTML+"! You must select a shipping option.<br>";
    }

    if (!valid_form)
    {
        return false;
    }
    else
    {
        return true;
    }


    return false;
}
