/**
 * Created by ebell on 11/04/2017.
 */
function calculate()
{
	var freqUnit = "Hz";
	var t = document.getElementById("temperature").value;
	var v0 = document.getElementById("observerVelocity").value;
	var vs = document.getElementById("soundVelocity").value;
	var f0 = document.getElementById("frequency").value;

	t = parseFloat(t);
	v0 = parseFloat(v0);
	vs = parseFloat(vs);
	f0 = parseFloat(f0);

	if (t !== "NaN" && v0 !== "NaN" && v0 >= 0 && vs !== "NaN" && vs >= 0 && f0 !== "NaN" && f0 >= 0)
	{
		//INCORRECT RESULTS
		// 331.5+0.61T
		t = math.multiply(0.61, t);
		var v = 331.5;
		v = math.add(v, t);

		var vv0 = math.subtract(v, v0);
		var vvs = math.subtract(v, vs);
		var f = math.divide(vv0, vvs);
		f = math.multiply(f0, f);

		document.getElementById("resultHeader").innerHTML = "Results:";
		document.getElementById("result").innerHTML =
			"At Observer:" + "<br>" + "Frequency of Sound : " +  f + "" + freqUnit + "<br>";
	}

	else if(t === "NaN")
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! T";
		if(v0 === "NaN" || v0 < 0)
		{
			document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + ", v0";
			if(vs === "NaN" || vs < 0)
			{
				document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + ", Vs";
				if(f0 === "NaN" || f0 < 0)
				{
					document.getElementById("error-msg").innerHTML = document.getElementById("error-msg").value + ", & F0";
				}
			}
		}
	}
	else if(v0 === "NaN" || v0 < 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! v0";
	}
	else if(vs === "NaN" || vs < 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! Vs";
	}
	else if(f0 === "NaN" || f0 < 0)
	{
		document.getElementById("error-msg").innerHTML = "Invalid Input! F0";
	}
}
