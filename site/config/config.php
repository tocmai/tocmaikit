<?php

return [
	'languages' => true,
	'debug' => false,
	'date.handler'  => 'intl',

	"panel" => [
		"vue" => [
			"compiler" => false
		]
	],
	
	// https://getkirby.com/docs/reference/system/options/thumbs
	'thumbs' => [
		'presets' => [
			'full' => [ 
				'width' => 2000, 
				'format' => 'jpg', 
				'quality' => 90 
			],
			'full-portrait' => [ 
				'height' => 2000, 
				'format' => 'jpg', 
				'quality' => 90 
			],
			'large' => [ 
				'width' => 1200, 
				'format' => 'jpg', 
				'quality' => 90 
			],
			'large-portrait' => [ 
				'height' => 1200, 
				'format' => 'jpg', 
				'quality' => 90 
			],
			'medium' => [ 
				'width' => 800, 
				'format' => 'jpg', 
				'quality' => 90 
			],
			'medium-portrait' => [ 
				'width' => 800, 
				'format' => 'jpg', 
				'quality' => 90 
			],
		],
		'srcsets' => [
			'default' => [
				'2000w' => [ 'width' => 2000, 'format' => 'jpg', 'quality' => 90 ],
				'1200w' => [ 'width' => 1200, 'format' => 'jpg', 'quality' => 90 ],
				'800w' => [ 'width' => 800, 'format' => 'jpg', 'quality' => 90 ]
			],
			'avif' => [
				'2000w' => [ 'width' => 2000, 'format' => 'avif', 'quality' => 90 ],
				'1200w' => [ 'width' => 1200, 'format' => 'avif', 'quality' => 90 ],
				'800w' => [ 'width' => 800, 'format' => 'avif', 'quality' => 90 ]
			],
			'webp' => [
				'2000w' => [ 'width' => 2000, 'format' => 'webp', 'quality' => 90 ],
				'1200w' => [ 'width' => 1200, 'format' => 'webp', 'quality' => 90 ],
				'800w' => [ 'width' => 800, 'format' => 'webp', 'quality' => 90 ]
			]
		],
		'autoOrient' => true
	]
];
