/**
 * Created by ebell on 05/04/2017.
 */
function calculate()
{
	//var units = "m";
	var energyUnit = "MJ";
	var c = 299792458;
	var m0 = document.getElementById("rMass").value;
	var v = document.getElementById("rVelocity").value;

	m0 = parseFloat(m0);
	v = parseFloat(v);

	if (m0 !== "NaN" && m0 > 0 && v !== "NaN" && v >= 0 && v <= c)
	{
		var vc1 = math.divide(math.bignumber(v), math.bignumber(c));
		vc1 = math.multiply(vc1, 100);
		v = math.pow(math.bignumber(v), 2.0);
		c = math.pow(math.bignumber(c), 2.0);
		var E0 = math.multiply(math.bignumber(m0), c);

		var vc = math.divide(math.bignumber(v), math.bignumber(c));
		vc = math.subtract(1, math.bignumber(vc));
		vc = math.sqrt(math.bignumber(vc));
		var E = math.divide(math.bignumber(E0), math.bignumber(vc));

		var EE0 = math.divide(math.bignumber(E), math.bignumber(E0));

		document.getElementById("result").innerHTML = "Rest mass energy E0: " +  E0 + "" + energyUnit + "<br>" +
			"Relativistic mass energy E: " +  E + "" + energyUnit + "<br>" +
			"Mass energy rate E/E0: " +  EE0 + "<br>" +
			"Velocity ratio to light v/c: " + vc1 + "%";
		//document.getElementById("result").innerHTML = "Relativistic mass energy E: " +  E + "" + energyUnit;

	}
	else if(m0 <= 0)
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