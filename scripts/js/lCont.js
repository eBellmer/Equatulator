math.config(
  {
    //math.config is currently non-functional and needs to be addressed.
    number: 'BigNumber',  // Default type of number: 'number' (default), 'BigNumber', or 'Fraction'
    precision: 50         // Number of significant digits for BigNumbers
  }
);

function calculate()
{
  var units = "m";
  var c = 299792458;
  var L0 = document.getElementById("aLength").value;
  var v = document.getElementById("rVelocity").value;

  L0 = parseFloat(L0);
  v = parseFloat(v);
  
  if (L0 !== "NaN" && L0 > 0 && v !== "NaN" && v >= 0 && v <= c)
  {
    v = math.pow(v, 2.0);
    c = math.pow(c, 2.0);
    var vc = math.divide(v, c);
    vc = math.subtract(1, vc);
    vc = math.sqrt(vc);
    var L = math.multiply(L0, vc);

    document.getElementById("result").innerHTML = "Adjusted Length: " +  L + "" + units;
  }
  else if(L0 <= 0)
  {
    //document.getElementById("aLength").innerHTML = "Invalid Input!";
    document.getElementById("error-msg").innerHTML = "Invalid Input! L0";
    if(v > c || v < 0)
    {
        //document.getElementById("rVelocity").innerHTML = "Invalid Input!";
        document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & v";
    }
  }
  else if(v > c || v < 0)
  {
    //document.getElementById("rVelocity").innerHTML = "Invalid Input!";
    document.getElementById("error-msg").innerHTML = "Invalid Input! v";
  }
}