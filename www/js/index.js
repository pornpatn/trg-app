/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function() {
		var self = this;
		this.bindEvents();
		
		$.mobile.navigate('#splashPage');
		// init data store
		this.store = new MemoryStore(function() {
			new BrowseView(self).render();
			$('#AcceptButton').removeClass('ui-disabled');
			$('.splash-logo').hide();
		});
		
		// init photo gallery
		this.pswpElement = document.querySelectorAll('.pswp')[0];
		this.pswpOptions = {
				index: 0,
				fullscreenEl: false,
				shareEl: false
			};
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
		var self = this;
        document.addEventListener('deviceready', this.onDeviceReady, false);
		$(document).on('click', 'a[href="#birdsPage"]', function(e) {
			e.preventDefault();
			var id = parseInt($(this).attr('data-id'));
			self.store.findSpeciesById(id, function(species) {
				self.species = species;
                new SpeciesView(species).render();
            });
		});
		$('#birdsPage').on('click', '.view-photo', function(e) { 
			e.preventDefault();
			
			// build items array
			var tid = parseInt($(this).attr('data-tid'));
			self.store.findPhotosBySpeciesId(tid, function(photos) {
				var items = [];
				if (photos.length == 0) {
					return;
				}
				$.each(photos, function(i, p) {
					var item = {
						src: 'img/photo/' + p.path,
						w: p.width,
						h: p.height,
						title: app.photoDescTemplate(p)
					};
					items.push(item);
				});
				
				// Initializes and opens PhotoSwipe
				var gallery = new PhotoSwipe( self.pswpElement, PhotoSwipeUI_Default, items, self.pswpOptions);
				gallery.init();
            });
		});
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
		app.receivedEvent('deviceready');
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        //console.log('Received Event: ' + id);
    }
};

app.photoDescTemplate = Handlebars.compile($("#photo-desc-tpl").html());