/**
 * Created by ebell on 07/04/2017.
 */
function calculate()
{
	var units = "\u03A9";
	var r1 = document.getElementById("resistor1").value;
	var r2 = document.getElementById("resistor2").value;

	r1 = parseFloat(r1);
	r2 = parseFloat(r2);

	if (r1 !== "NaN" && r1 > 0 && r2 !== "NaN" && r2 >= 0)
	{
		var Rs = math.add(r1, r2);

		var R1aR2 = Rs;
		var R1R2 = math.multiply(r1, r2);
		var Rp = math.divide(R1R2, R1aR2);

		document.getElementById("resultHeader").innerHTML = "Results:";
		document.getElementById("result").innerHTML =
			"Series Resistance: " +  Rs + "" + units + "<br>" +
			"Parallel Resistance: " + Rp + "" + units;

		if (usr !== "NULL")
		{
			document.getElementById('btns').innerHTML = '<button type="button" class="btn btn-default" onclick="calculate()">Calculate</button> ' +
				'<input class="btn btn-default" type="submit" name="submit" value="Save Result" />';
		}
	}
	else if(r1 <= 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! R1";
		if(r2 < 0)
		{
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & R2";
		}
	}
	else if(r2 > 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! R2";
	}
}

function process()
{
	document.getElementById("hidden").value = document.getElementById("result").innerHTML;

	return true;
}
