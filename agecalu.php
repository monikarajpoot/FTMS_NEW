<script type="text/javascript">	
function showAge(dobYear, dobMonth, dobDay) {
	var bthDate, curDate, days;
	var ageYears, ageMonths, ageDays;
	bthDate = new Date(dobYear, dobMonth-1, dobDay);
	curDate = new Date();
	if (bthDate>curDate) return;
	days = Math.floor((curDate-bthDate)/(1000*60*60*24));
	ageYears = Math.floor(days/365);
	ageMonths = Math.floor((days%365)/31);
	ageDays = days - (ageYears*365) - (ageMonths*31);
	if (ageYears>0) {
		document.write(ageYears+" year");
		if (ageYears>1) document.write("s"); 
		if ((ageMonths>0)||(ageDays>0)) document.write(", ");
	}
	if (ageMonths>0) {
		document.write(ageMonths+" month");
		if (ageMonths>1) document.write("s");
		if (ageDays>0) document.write(", ");
	}
	if (ageDays>0) {
		document.write(ageDays+" day");
		if (ageDays>1) document.write("s");
	}
} document.write(showAge(2009,03,22));
</script>