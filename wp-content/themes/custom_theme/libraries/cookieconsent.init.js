'use strict';

window.cookieconsent.initialise(
	{
		"palette": {
			"popup": {
				"background": "#333333 !important",
				"text": "#cccccc !important"
			},
			"button": {
				"background": "#4d4d4d !important",
				"text": "#eeeeee !important"
			}
		},
		"theme": "edgeless",
		"position": "bottom-right",
		"content": {
			"message": cookies.disclaimer,
			"dismiss": cookies.accept_label,
			"link": cookies.more_label,
			"href": cookies.more_url
		}
	}
);
