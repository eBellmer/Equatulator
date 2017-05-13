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
    v = math.pow(math.bignumber(v), 2.0);
    c = math.pow(math.bignumber(c), 2.0);
    var vc = math.divide(math.bignumber(v), math.bignumber(c));
    vc = math.subtract(1, math.bignumber(vc));
    vc = math.sqrt(math.bignumber(vc));
    var L = math.multiply(math.bignumber(L0), math.bignumber(vc));

	  document.getElementById("resultHeader").innerHTML = "Results:";
    document.getElementById("result").innerHTML = "Adjusted Length: " +  L + "" + units;

    if (usr !== "NULL")
    {
	    document.getElementById('btns').innerHTML += '<input class="btn btn-default" type="submit" name="submit" value="Save Result" />';
    }
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

function process()
{
  document.getElementById("hidden").value = document.getElementById("result").innerHTML;

  return true;
}