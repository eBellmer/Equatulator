/**
 * Created by ebell on 29/03/2017.
 */
function calculate()
{
	var units = "NaN";
	var c = 299792458;
	var g = document.getElementById("gravConstant").value;
	var m = document.getElementById("objectMass").value;

	g = parseFloat(g);
	m = parseFloat(m);

	//CORRECT THIS CODE:
	if (g !== "NaN" && m !== "NaN" && m >= 0)
	{
		c = math.pow(c, 2.0);
		var gm = math.multiply(g, m);
		gm = math.multiply(gm, 2);
		var rs = math.divide(gm, c);

		document.getElementById("result").innerHTML = "Swartzschild Radius: " +  rs + "" + units;
	}
	else if(g <= 0)
	{
		//document.getElementById("aLength").innerHTML = "Invalid Input!";
		document.getElementById("error-msg").innerHTML = "Invalid Input! G";
		if(m < 0)
		{
			//document.getElementById("rVelocity").innerHTML = "Invalid Input!";
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & M";
		}
	}
	else if(m < 0)
	{
		//document.getElementById("rVelocity").innerHTML = "Invalid Input!";
		document.getElementById("error-msg").innerHTML = "Invalid Input! M";
	}
}