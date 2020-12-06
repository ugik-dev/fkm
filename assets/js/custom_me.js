
function intToDay(val) {
	switch (val) {
		case 0:
			return "Minggu";
		case 1:
			return "Senin";
		case 2:
			return "Selasa";
		case 3:
			return "Rabu";
		case 4:
			return "Kamis";
		case 5:
			return "Jum'at";
		case 6:
			return "Sabtu";
	}
}

function empty(str) {
	if (str == null || str.trim() == "") {
		return true;
	} else {
		return false;
	}
}

function buttonLoading(btn) {
	if (btn.prop("disabled")) {
		return;
	}
	btn.data("original-text", btn.html());
	btn.html(
		'<span class="loading open-circle"></span> ' + btn.data("loading-text")
	);
	btn.prop("disabled", true);
}


function buttonIdle(btn) {
	if (!btn.prop("disabled")) {
		return;
	}
	btn.html(btn.data("original-text"));
	btn.prop("disabled", false);
}

MONTHS = [
	"Januari",
	"Februari",
	"Maret",
	"April",
	"Mei",
	"Juni",
	"Juli",
	"Agustus",
	"September",
	"Oktober",
	"November",
	"Desember",
];


MONTHSEN = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December", 
];
function renderDate(date) {
    var date = new Date(date);
    var jam = date.getHours();
    var menit = date.getMinutes();
	return `${date.getDate()} ${MONTHS[date.getMonth()]} ${date.getFullYear()}, ${date.getHours()}:${date.getMinutes()} `;
}

function renderDateEn(date){
    var date = new Date(date);
    return `${date.getDate()} ${MONTHSEN[date.getMonth()]} ${date.getFullYear()}, ${date.getHours()}:${date.getMinutes()} `;

}

function findAssociative(arr, field, value) {
	for (var key in arr) {
		var v = arr[key];
		if (v[field] && v[field] == value) {
			return v;
		}
	}
	return null;
}

function filterAssociative(arr, field, value) {
	var ret = [];
	for (var key in arr) {
		var v = arr[key];
		if (v[field] && v[field] == value) {
			ret.push(v);
		}
	}
	return ret;
}

function convertToRupiah(angka) {
	var rupiah = "";
	if (angka == null) return "0";
	var angkarev = angka.toString().split("").reverse().join("");
	for (var i = 0; i < angkarev.length; i++) {
		if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + ",";
	}
	rupiah = rupiah
		.split("", rupiah.length - 1)
		.reverse()
		.join("");
	return rupiah.length < 1 ? "0" : rupiah;
}

function convertToRupiahV2(value, fixed) {
	return (
		"Rp" +
		parseFloat(value)
			.toFixed(fixed)
			.replace(".", ",")
			.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.")
	);
}
