//Slideshow Javascript
let slide_arr = ["mercury.jpg","venus.jpg","earth.jpg","mars.jpg","jupiter.jpg"]
let index =0;
function changeImg(dir)
{
    target_img = document.getElementById("photo")
    if (dir == 0)
    {
        if (index == 0)
        {
            index = (slide_arr.length-1);
        }
        else
        {
            index--;
        }
    }
    else if (dir == 1)
    {
        if (index == (slide_arr.length -1))
        {
            index = 0;
        }
        else
        {
            index++;
        }
    }
    target_img.src = "slideshow_data/"+slide_arr[index];
}