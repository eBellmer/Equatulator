/**
 * Created by ebell on 05/04/2017.
 */
function calculate()
{
	var percentUnits = "%";
	var energyUnit = "MJ";
	var c = 299792458;
	var m = document.getElementById("rMass").value;
	var v = document.getElementById("rVelocity").value;

	m = parseFloat(m);
	v = parseFloat(v);

	if (m !== "NaN" && m > 0 && v !== "NaN" && v >= 0 && v <= c)
	{
		var vc1 = math.divide(math.bignumber(v), math.bignumber(c));
		vc1 = math.multiply(vc1, 100);
		v = math.pow(math.bignumber(v), 2.0);
		c = math.pow(math.bignumber(c), 2.0);
		var E = math.multiply(math.bignumber(m), c);

		var vc = math.divide(math.bignumber(v), math.bignumber(c));
		vc = math.subtract(1, math.bignumber(vc));
		vc = math.sqrt(math.bignumber(vc));
		var E0 = math.divide(math.bignumber(E), math.bignumber(vc));

		var EE0 = math.divide(math.bignumber(E0), math.bignumber(E));

		document.getElementById("resultHeader").innerHTML = "Results:";
		document.getElementById("result").innerHTML =
			"Rest mass energy E: " +  E + "" + energyUnit + "<br>" +
			"Relativistic mass energy E0: " +  E0 + "" + energyUnit + "<br>" +
			"Mass energy rate E0/E: " +  EE0 + "<br>" +
			"Velocity ratio to light v/c: " + vc1 + percentUnits;

	}
	else if(m <= 0)
	{
		//document.getElementById("aLength").innerHTML = "Invalid Input!";
		document.getElementById("error-msg").innerHTML = "Invalid Input! m";
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