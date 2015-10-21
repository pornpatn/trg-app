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
		
		// init menu
		$('.left-menu').html(app.menuTemplate());
		
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
			
		// init help raptors
		var imgSize = screen.width / 3;
		var blockSize = imgSize * 0.9;
		$('.help-raptor-list .ui-block-a, .help-raptor-list .ui-block-b, .help-raptor-list .ui-block-c').each(function() {
			var div = $(this),
				img = div.find('img')[0],
				m = 0;
			if (img.height > img.width) {
				// portrait
				$(img).width(imgSize);
				$(img).css('left', '-10%');
				m = (img.height - img.width) * 50 / img.width;
				$(img).css('top', '-' + m + '%');
			} else {
				// landscape
				$(img).height(imgSize);
				$(img).css('top', '-10%');
				m = (img.width - img.height) * 50 / img.height;
				$(img).css('left', '-' + m + '%');
			}
			div.height(blockSize);
		});
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
				if (species === null) {
					//alert('Data is not available in BETA version.');
					return;
				}
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
		$('.gallery-list').on('click', 'a', function(e) {
			var link = this;
			e.preventDefault();
			
			// build items array
			var items = [];
			var pi = 0;
			$.each($(this).parents('.gallery-list').find('a'), function(i, p) {
				var item = {
						src: p.attributes["href"].value,
						w: parseInt(p.attributes["data-w"].value),
						h: parseInt(p.attributes["data-h"].value),
						title: p.title
					};
					items.push(item);
					
				if (link === p) {
					pi = i;
				}
			});
				
			// Initializes and opens PhotoSwipe
			var opts = {
				index: pi,
				fullscreenEl: false,
				shareEl: false
			};
			var gallery = new PhotoSwipe( self.pswpElement, PhotoSwipeUI_Default, items, opts);
			gallery.init();
		});
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
		app.receivedEvent('deviceready');
		
		// Mock device.platform property if not available
		if (!window.device) {
			window.device = { platform: 'Browser' };
		}

		app.handleExternalURLs();
		
		StatusBar.overlaysWebView( false );
		StatusBar.backgroundColorByHexString('#2c3e50');
		StatusBar.styleLightContent();
    },
    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        //console.log('Received Event: ' + id);
    },
	
	handleExternalURLs: function() {
		// Handle click events for all external URLs
		if (device.platform.toUpperCase() === 'ANDROID') {
			$(document).on('click', 'a[href^="http"]', function (e) {
				var url = $(this).attr('href');
				navigator.app.loadUrl(url, { openExternal: true });
				e.preventDefault();
			});
		}
		else if (device.platform.toUpperCase() === 'IOS') {
			$(document).on('click', 'a[href^="http"]', function (e) {
				var url = $(this).attr('href');
				window.open(url, '_system');
				e.preventDefault();
			});
		}
		else {
			// Leave standard behaviour
		}
	}
};

app.photoDescTemplate = Handlebars.compile($("#photo-desc-tpl").html());
app.menuTemplate = Handlebars.compile($("#menu-tpl").html());