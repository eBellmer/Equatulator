math.config(
  {
    number: 'BigNumber',  // Default type of number:
                          // 'number' (default), 'BigNumber', or 'Fraction'
    precision: 20         // Number of significant digits for BigNumbers
  }
);

function calculate()
{ 
  var units = "s";
  var c = 299792458;
  var v = document.getElementById("rVelocity").value;
  var dt = document.getElementById("aTime").value;
  
  v = math.pow(v, 2.0);
  c = math.pow(c, 2.0);
  var vc = math.divide(v, c);
  vc = math.subtract(1, vc);
  vc = math.sqrt(vc);
  var dta = math.divide(dt, vc);
  
  document.getElementById("result").innerHTML = dta + "" + units;
}