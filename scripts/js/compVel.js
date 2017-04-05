/**
 * Created by ebell on 05/04/2017.
 */
function calculate()
{
	var units = "m/s";
	var c = 299792458;
	var vA = document.getElementById("velocityA").value;
	var vB = document.getElementById("velocityB").value;

	vA = parseFloat(vA);
	vB = parseFloat(vB);

	if (vA !== "NaN" && vA > 0 && vA < c && vB !== "NaN" && vB >= 0 && vB < c)
	{
		var vAaddB = math.add(math.bignumber(vA), math.bignumber(vB));
		var vAB = math.multiply(math.bignumber(vA), math.bignumber(vB));
		c = math.pow(math.bignumber(c), 2.0);
		var cV = math.divide(math.bignumber(vAB), math.bignumber(c));
		var v = math.divide(math.bignumber(vAaddB), math.bignumber(cV));


		document.getElementById("result").innerHTML =
			"Composition of velocities: " +  v + "" + units;

	}
	else if(vA > c || vA < 0)
	{
		//document.getElementById("aLength").innerHTML = "Invalid Input!";
		document.getElementById("error-msg").innerHTML = "Invalid Input! L0";
		if(vB > c || vB < 0)
		{
			//document.getElementById("rVelocity").innerHTML = "Invalid Input!";
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & v";
		}
	}
	else if(vB > c || vB < 0)
	{
		//document.getElementById("rVelocity").innerHTML = "Invalid Input!";
		document.getElementById("error-msg").innerHTML = "Invalid Input! v";
	}
}