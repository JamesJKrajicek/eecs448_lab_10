function changeBorder()
{
    let border_to_mod = document.getElementById("test_para");
    let n_red   = document.getElementById("b_red").value;
    let n_green = document.getElementById("b_green").value;
    let n_blue  = document.getElementById("b_blue").value;
    border_to_mod.style.borderColor = "rgb("+n_red+","+n_green+','+n_blue+")";
    let n_width = document.getElementById("b_width").value;
    border_to_mod.style.borderWidth = n_width+"px";
    
}

function changeTextColor()
{
    let para_to_mod = document.getElementById("test_para");
    let n_red   = document.getElementById("back_red").value;
    let n_green = document.getElementById("back_green").value;
    let n_blue  = document.getElementById("back_blue").value;
    para_to_mod.style.backgroundColor = "rgb("+n_red+","+n_green+','+n_blue+")";
}