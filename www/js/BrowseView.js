var BrowseView = function(app) {

    this.initialize = function() {

    };

    this.render = function() {
        app.store.browseSpecies(function(species) {
            $('#browsePage .species-list').html(BrowseView.liTemplate(species));
			//$.mobile.navigate('#browsePage');
        });
    };

    this.initialize();

}

BrowseView.liTemplate = Handlebars.compile($("#species-li-tpl").html());