function isTextBoxNotEmpty()
{
    let t_username  = document.getElementById("username");
    let t_txt_box   = document.getElementById("post_txt");
    let errs        = document.getElementById("errors");
    errs.innerHTML = "";
    if (t_username.value == "" || t_txt_box.value == "")
    {
        if (t_username.value == "")
        {
            errs.innerHTML = errs.innerHTML + "Error! You tried to submit a new post without including your username!<br>";
            t_username.classList = "invalid";
        }
        if (t_txt_box.value == "")
        {
            errs.innerHTML = errs.innerHTML + "Error! You tried to submit a new post without writing anything!<br>";
            t_txt_box.classList = "invalid";
        }
        return false;
    }
    else
    {
        return true;
    }
}

function resetInvalid (id)
{
    let ElementToReset = document.getElementById(id);
    ElementToReset.classList.remove("invalid");
}