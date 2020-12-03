/**
 * @class
 */

function Product (inp_name, inp_price)
{
    let p_name;
    let p_price;
    if (!this.setName(inp_name))
    {
        throw "Invalid Name";
    }
    if (!this.setPrice(inp_price))
    {
        throw "Invalid Price";
    }
}

Product.prototype.setName = function (new_name)
{
    if (new_name != "")
    {
        p_name    = new_name;
        return    true;
    }
    else
    {
        return    false;
    }
}

Product.prototype.setPrice = function (new_price)
{
    if (new_price >=0)
    {
        p_price   = new_price;
        return    true;
    }
    else
    {
        return    false;
    }
}

Product.prototype.getName = function ()
{
    return p_name;
}

Product.prototype.getPrice = function ()
{
    return p_price;
}