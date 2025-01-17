function calculate()
{ 
  var units = "s";
  var c = 299792458;
  var v = document.getElementById("rVelocity").value;
  var dt = document.getElementById("aTime").value;

  v = parseFloat(v);
  dt = parseFloat(dt);

  if (v != "NaN" && v >= 0 && v <= c && dt != "NaN" && dt > 0)
  {
    v = math.pow(v, 2.0);
    c = math.pow(c, 2.0);
    var vc = math.divide(v, c);
    vc = math.subtract(1, vc);
    vc = math.sqrt(vc);
    var dta = math.divide(dt, vc);

	  document.getElementById("resultHeader").innerHTML = "Results:";
    document.getElementById("result").innerHTML =
	    "Adjusted Time Interval: " + dta + "" + units;

	  if (usr !== "NULL")
	  {
		  document.getElementById('btns').innerHTML = '<button type="button" class="btn btn-default" onclick="calculate()">Calculate</button> ' +
			  '<input class="btn btn-default" type="submit" name="submit" value="Save Result" />';
	  }
  }
  else if(v <= 0 || v > c)
  {
	  document.getElementById("error-msg").innerHTML = "Invalid Input! V";
	  if(dt < 0)
	  {
      document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & DT";
	  }
  }
  else if(dt < 0)
  {
		document.getElementById("error-msg").innerHTML = "Invalid Input! DT";
  }
}

function process()
{
	document.getElementById("hidden").value = document.getElementById("result").innerHTML;

	return true;
}