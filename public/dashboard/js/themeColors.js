
'use strict'

//
const handleThemeUpdate = (cssVars) => {
	const root = document.querySelector(':root');
	const keys = Object.keys(cssVars);
	keys.forEach(key => {
		root.style.setProperty(key, cssVars[key]);
	});
}

function dynamicPrimaryColor(primaryColor) {
	primaryColor.forEach((item) => {
		item.addEventListener('input', (e) => {
			const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
			const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
			const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
			const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
			const cssPropName8 = `--darkprimary-${e.target.getAttribute('data-id8')}`;
			const cssPropName3 = `--dark-${e.target.getAttribute('data-id3')}`;
			handleThemeUpdate({
				[cssPropName]: e.target.value,
				// 95 is used as the opacity 0.95
				[cssPropName1]: e.target.value + 95,
				[cssPropName2]: e.target.value,
				[cssPropName3]: e.target.value,
				[cssPropName7]: e.target.value + 20,
				[cssPropName8]: e.target.value + 20,
			});
		});
	});
}

$(function () {
	// Light theme color picker
	const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
	dynamicPrimaryColor(dynamicPrimaryLight);

	// dark theme color picker
	const DarkDynamicPrimaryLight = document.querySelectorAll('input.color-primary-dark');
	dynamicPrimaryColor(DarkDynamicPrimaryLight);

	localStorageBackup();

	$('#myonoffswitch1').on('click', function () {
		document.querySelector('body')?.classList.remove('dark-theme');
		$('#myonoffswitch1').prop('checked', true);

		localStorage.setItem('milightMode', true);
		localStorage.removeItem('midarkMode');
	})
	$('#myonoffswitch2').on('click', function () {
		document.querySelector('body')?.classList.remove('light-theme');
		$('#myonoffswitch2').prop('checked', true);

		localStorage.setItem('midarkMode', true);
		localStorage.removeItem('milightMode');
	})
});

function localStorageBackup() {
	'use strict'
	// if there is a value stored, update color picker and background color
	// Used to retrive the data from local storage
	if (localStorage.miprimaryColor) {
		if(document.getElementById('colorID')){
			document.getElementById('colorID').value = localStorage.miprimaryColor;
		}
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.miprimaryColor);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.miprimaryHoverColor);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.miprimaryBorderColor);
		document.querySelector('html').style.setProperty('--primary-transparentcolor', localStorage.miprimaryTransparent);
		document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');

		
	}

	if (localStorage.midarkPrimary) {
		if(document.getElementById('darkPrimaryColorID')){
			document.getElementById('darkPrimaryColorID').value = localStorage.midarkPrimary;
		}
		document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.midarkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.midarkPrimary);
		document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.midarkPrimary);
		document.querySelector('html').style.setProperty('--dark-primary', localStorage.midarkPrimary);
		document.querySelector('html').style.setProperty('--darkprimary-transparentcolor', localStorage.midarkprimaryTransparent);
		document.querySelector('body')?.classList.add('dark-theme');
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');

		$('#myonoffswitch2').prop('checked', true);
		$('#myonoffswitch5').prop('checked', true);
		$('#myonoffswitch8').prop('checked', true);
	}

	if (localStorage.milightMode) {
		document.querySelector('body')?.classList.add('light-theme');
		document.querySelector('body')?.classList.remove('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		$('#myonoffswitch1').prop('checked', true);
		$('#myonoffswitch3').prop('checked', true);
		$('#myonoffswitch6').prop('checked', true);
	}

	if (localStorage.midarkMode) {
		document.querySelector('body')?.classList.remove('light-theme');
		document.querySelector('body')?.classList.add('dark-theme');
		document.querySelector('body')?.classList.remove('transparent-theme');
		$('#myonoffswitch2').prop('checked', true);
		$('#myonoffswitch5').prop('checked', true);
		$('#myonoffswitch8').prop('checked', true);
	}

	if (localStorage.mirtl) {
		$('body').addClass('rtl');
		$('#myonoffswitch20').prop('checked', true);
	}
	if (localStorage.mihorizontalmenu) {
		$('body').addClass('horizontalmenu');
		$('#myonoffswitch02').prop('checked', true);
	}
	if (localStorage.mihorizontalmenuhover) {
		$('body').addClass('horizontalmenu-hover');
		$('#myonoffswitch03').prop('checked', true);
	}
	if (localStorage.milightmenu) {
		$('body').addClass('light-menu');
		$('#myonoffswitch3').prop('checked', true);
	}
	if (localStorage.midarkmenu) {
		$('body').addClass('dark-menu');
		$('#myonoffswitch5').prop('checked', true);
	}
	if (localStorage.micolormenu) {
		$('body').addClass('color-menu');
		$('#myonoffswitch4').prop('checked', true);
	}
	if (localStorage.milightheader) {
		$('body').addClass('header-light');
		$('#myonoffswitch6').prop('checked', true);
	}
	if (localStorage.midarkheader) {
		$('body').addClass('header-dark');
		$('#myonoffswitch8').prop('checked', true);
	}
	if (localStorage.micolorheader) {
		$('body').addClass('color-header');
		$('#myonoffswitch7').prop('checked', true);
	}
	if (localStorage.miboxed) {
		$('body').addClass('layout-boxed');
		$('#myonoffswitch10').prop('checked', true);
	}
	if (localStorage.mifullwidth) {
		$('body').addClass('layout-fullwidth');
		$('#myonoffswitch9').prop('checked', true);
	}
	if (localStorage.mifixed) {
		$('body').addClass('fixed-layout');
		$('#myonoffswitch11').prop('checked', true);
	}
	if (localStorage.miscrollable) {
		$('body').addClass('scrollable-layout');
		$('#myonoffswitch12').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.midefaultmenu) {
		$('body').addClass('default-menu');
		$('#myonoffswitch13').prop('checked', true);
	}
	if (localStorage.miicontext) {
		$('body').addClass('icontext-menu');
		$('#myonoffswitch14').prop('checked', true);
	}
	if (localStorage.miiconoverlay) {
		$('body').addClass('icon-overlay');
		$('#myonoffswitch15').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.miclosed) {
		$('body').addClass('closed-leftmenu');
		$('#myonoffswitch16').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.mihoversubmenu) {
		$('body').addClass('hover-submenu');
		$('#myonoffswitch17').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
	if (localStorage.mihoversubmenustyle1) {
		$('body').addClass('hover-submenu1');
		$('#myonoffswitch18').prop('checked', true);
		$('body').addClass('main-sidebar-hide');
	}
}


// triggers on changing the color picker
function changePrimaryColor() {
	'use strict'
	$('#myonoffswitch3').prop('checked', true);
	$('#myonoffswitch6').prop('checked', true);

	var userColor = document.getElementById('colorID').value;
	localStorage.setItem('miprimaryColor', userColor);
	// to store value as opacity 0.95 we use 95
	localStorage.setItem('miprimaryHoverColor', userColor + 95);
	localStorage.setItem('miprimaryBorderColor', userColor);
	localStorage.setItem('miprimaryTransparent', userColor + 20);

	// removing dark theme properties
	localStorage.removeItem('midarkPrimary')
	localStorage.removeItem('mitransparentBgColor');
	localStorage.removeItem('mitransparentThemeColor');
	localStorage.removeItem('mitransparentPrimary');
	localStorage.removeItem('mitransparentprimaryTransparent');
	localStorage.removeItem('midarkprimaryTransparent');
	document.querySelector('body')?.classList.add('light-theme');
	document.querySelector('body')?.classList.remove('dark-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');
	localStorage.removeItem('miBgImage');
	document.querySelector('body')?.classList.add('dark-menu');

	$('#myonoffswitch1').prop('checked', true);

	names()

	localStorage.setItem('milightMode', true);
	localStorage.removeItem('midarkMode');
	localStorage.removeItem('mitransparentMode');

}

function darkPrimaryColor() {
	'use strict'
	var userColor = document.getElementById('darkPrimaryColorID').value;
	localStorage.setItem('midarkPrimary', userColor);
	localStorage.setItem('midarkprimaryTransparent', userColor + 20);
	$('#myonoffswitch5').prop('checked', true);
	$('#myonoffswitch8').prop('checked', true);


	// removing light theme data
	localStorage.removeItem('miprimaryColor')
	localStorage.removeItem('miprimaryHoverColor')
	localStorage.removeItem('miprimaryBorderColor')
	localStorage.removeItem('miprimaryTransparent');

	localStorage.removeItem('mitransparentBgColor');
	localStorage.removeItem('mitransparentThemeColor');
	localStorage.removeItem('mitransparentPrimary');
	localStorage.removeItem('mitransparentprimaryTransparent');
	localStorage.removeItem('mitransparentBgImgPrimary');
	localStorage.removeItem('mitransparentBgImgprimaryTransparent');
	localStorage.removeItem('miBgImage');

	document.querySelector('body')?.classList.remove('light-theme');
	document.querySelector('body')?.classList.add('dark-theme');
	document.querySelector('body')?.classList.remove('transparent-theme');

	$('#myonoffswitch2').prop('checked', true);
	names()
	localStorage.setItem('midarkMode', true);
	localStorage.removeItem('milightMode');
	localStorage.removeItem('mitransparentMode');
}

// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
// convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
// get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
	if (typeof a !== "undefined") { return a / 255 }
	if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
		return 1
	}
	return alpha
}
// convertion of hex code to rgba code
function hexToRgba(hexValue, alpha) {
	if (!isValidHex(hexValue)) { return null }
	const chunkSize = Math.floor((hexValue.length - 1) / 3)
	const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
	const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
	return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}

let myVarVal, primaryColorVal;
function names() {

	let docStyle = getComputedStyle(document.documentElement);
	primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();

	//get variable
	myVarVal = localStorage.getItem("miprimaryColor") || localStorage.getItem("midarkPrimary") || primaryColorVal;

	if (document.querySelector('#project') !== null) {
		index();
	}

	if (document.querySelector('#bar-chart') !== null) {
		barchart();
	}

	if (document.querySelector('.forth.circle') !== null) {
		forthcircle();
	}

	if (document.querySelector('#btc_chart') !== null) {
		btcchart();
	}

	if (document.querySelector('#cryptoChart2') !== null) {
		cryptoChart2();
	}

	if (document.querySelector('#sparkline11') !== null) {
		spark1();
	}

	if (document.querySelector('#sparkline12') !== null) {
		spark2();
	}

	if (document.querySelector('#sparkline13') !== null) {
		spark3();
	}

	if (document.querySelector('#sparkline14') !== null) {
		spark4();
	}

	if (document.querySelector('#crypto-donut') !== null) {
		cryptodonut();
	}

	if (document.querySelector('#revenuechart') !== null) {
		revenuechart();
	}

	if (document.querySelector('#recentorders') !== null) {
		recentorders();
	}

	if (document.querySelector('#world-map-markers') !== null) {
		vectormap();
	}




	let colorData = hexToRgba(myVarVal || primaryColorVal, 0.05)
	document.querySelector('html').style.setProperty('--primary005', colorData);

	let colorData1 = hexToRgba(myVarVal || primaryColorVal, 0.2)
	document.querySelector('html').style.setProperty('--primary02', colorData1);

	let colorData2 = hexToRgba(myVarVal || primaryColorVal, 0.3)
	document.querySelector('html').style.setProperty('--primary03', colorData2);

	let colorData5 = hexToRgba(myVarVal || primaryColorVal, 0.5)
	document.querySelector('html').style.setProperty('--primary05', colorData5);

	let colorData3 = hexToRgba(myVarVal || primaryColorVal, 0.7)
	document.querySelector('html').style.setProperty('--primary07', colorData3);

	let colorData4 = hexToRgba(myVarVal || primaryColorVal, 0.8)
	document.querySelector('html').style.setProperty('--primary08', colorData4);

	let colorData6 = hexToRgba(myVarVal || primaryColorVal, 0.1)
	document.querySelector('html').style.setProperty('--primary01', colorData6);


}
names()