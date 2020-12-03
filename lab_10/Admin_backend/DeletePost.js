function anyCheckboxesSelected(form_to_check)
{
    let errs = document.getElementById("errors");
    errs.innerHTML = "";
    //form.to_del is a RadioNodeList of all checkboxes sharing the id="to_del".
    //Calling method 'checked' determines if any of the elements in the list are true and if so returns true. Otherwise it returns false.
    if (form_to_check.to_del == undefined)
    {
        errs.innerHTML = errs.innerHTML + "Error! What are you doing? There aren't any entries to delete."
        return false;
    }
    else
    {
        return true;
    }

}