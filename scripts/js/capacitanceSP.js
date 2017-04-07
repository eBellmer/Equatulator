/**
 * Created by ebell on 07/04/2017.
 */
function calculate()
{
	var units = "F";
	var c1 = document.getElementById("capacitor1").value;
	var c2 = document.getElementById("capacitor2").value;

	c1 = parseFloat(c1);
	c2 = parseFloat(c2);

	if (c1 !== "NaN" && c1 > 0 && c2 !== "NaN" && c2 >= 0)
	{
		var Cp = math.add(c1, c2);

		var C1aC2 = Cp;
		var C1C2 = math.multiply(c1, c2);
		var Cs = math.divide(C1C2, C1aC2);

		document.getElementById("result").innerHTML =
			"Series Capacitance: " +  Cs + "" + units + "<br>" +
			"Parallel Capacitance: " + Cp + "" + units;
	}
	else if(c1 <= 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! C1";
		if(c2 < 0)
		{
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & C2";
		}
	}
	else if(c2 > 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! C2";
	}
}