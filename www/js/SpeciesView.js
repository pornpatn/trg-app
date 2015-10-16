var SpeciesView = function(species) {

    this.initialize = function() {
    };

    this.render = function() {
		$('#birdsPage .species-detail').html(SpeciesView.template(species)).trigger( "create" );
		$.mobile.navigate('#birdsPage', { transition: 'slide' });
    };

    this.initialize();

}

SpeciesView.template = Handlebars.compile($("#species-tpl").html());

Handlebars.registerHelper('renderStatus', function(code) {
	if (code === 1) {
		return "ประชากรส่วนใหญ่อพยพย้ายถิ่นตามฤดูกาล complete migrant";
	}
	if (code === 2) {
		return "ประจำถิ่น resident";
	}
	if (code === 3) {
		return "อพยพบางส่วน มีประชากรประจำถิ่นในประเทศไทย partial migrant";
	}
	return "";
});
Handlebars.registerHelper('renderConservation', function(code) {
	if (code === 'LC') {
		return "น่าเป็นห่วงน้อย Least concern";
	}
	if (code === 'NT') {
		return "ใกล้ถูกคุกคาม Near-threaned";
	}
	if (code === 'VU') {
		return "มีแนวโน้มจะสูญพันธุ์ Vulnerable";
	}
	if (code === 'EN') {
		return "ใกล้สูญพันธุ์ Endangered";
	}
	if (code === 'CR') {
		return "ใกล้สูญพันธุ์ขั้นวิกฤติ Critically endangered";
	}
	if (code === 'EX') {
		return "สูญพันธุ์แล้ว Extinct";
	}
	return "";
});