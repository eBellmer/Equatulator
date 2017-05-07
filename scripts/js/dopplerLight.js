/**
 * Created by ebell on 11/04/2017.
 */
function calculate()
{
	var percentUnits = "%";
	var freqUnit = "GHz";
	var wavelengthUnits = "nm";
	var c = 299792458;
	var l0 = document.getElementById("wLight").value;
	var v0 = document.getElementById("rVelocity").value;
	var t0 = document.getElementById("fAngle").value;

	l0 = parseFloat(l0);
	v0 = parseFloat(v0);
	t0 = parseFloat(t0);

	if (l0 !== "NaN" && l0 > 0 && v0 !== "NaN" && v0 >= 0 && v0 <= c && t0 !== "NaN" && t0 > 0 && t0 <= 180)
	{
		//INCORRECT RESULTS

		// 1 - v/c cos0
		var vc1 = math.divide(math.bignumber(v0), math.bignumber(c));
		var cosT = math.cos(math.bignumber(t0));
		var vcCos = math.multiply(math.bignumber(vc1), math.bignumber(cosT));
		vcCos = math.subtract(1, math.bignumber(vcCos));



		// c squared and v squared
		var v02 = math.pow(math.bignumber(v0), 2.0);
		c = math.pow(math.bignumber(c), 2.0);

		// sqrt: 1 - v2/c2
		var vc = math.divide(math.bignumber(v02), math.bignumber(c));
		vc = math.subtract(1, math.bignumber(vc));
		vc = math.sqrt(math.bignumber(vc));

		//
		var lambda = math.divide(math.bignumber(vcCos), math.bignumber(vc));
		lambda = math.multiply(l0, math.bignumber(lambda));

		//
		var freq = math.divide(math.bignumber(vc), math.bignumber(vcCos));
		freq = math.multiply(math.bignumber(v0), math.bignumber(lambda));

		vc1 = math.multiply(math.bignumber(vc1), 100);
		document.getElementById("resultHeader").innerHTML = "Result:";
		document.getElementById("result").innerHTML =
			"Wavelength of light : " +  lambda + "" + wavelengthUnits + "<br>" +
			"Frequency of light : " +  freq + "" + freqUnit + "<br>" +
			"Velocity ratio to light v/c: " + vc1 + percentUnits;

		if (usr !== "NULL")
		{
			document.getElementById('btns').innerHTML = '<button type="button" class="btn btn-default" onclick="calculate()">Calculate</button> ' +
				'<input class="btn btn-default" type="submit" name="submit" value="Save Result" />';
		}
	}
	else if(l0 <= 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! L";
		if(v0 >= 0 && v0 <= c)
		{
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + ", v,";
			if(t0 > 0)
			{
				document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + " & v";
			}
		}
	}
	else if(v > c || v < 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! v";
	}
}

function process()
{
	document.getElementById("hidden").value = document.getElementById("result").innerHTML;

	return true;
}
