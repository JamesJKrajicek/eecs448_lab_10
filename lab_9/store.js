/**
 * @class
 */

 function Store ()
 {
     product_arr_length =0;
    this.product_arr = new Array ();
    product_arr_length= this.product_arr.push(new Product("iPhone", 532.52));
    product_arr_length= this.product_arr.push(new Product("iPad", 799.34));
    product_arr_length= this.product_arr.push(new Product("iMac", 1232.45));
    product_arr_length= this.product_arr.push(new Product("iPod", 140.45));
    console.log(product_arr_length);
 }

 Store.prototype.checkInputValidity = function ()
 {
    return true;
 }
