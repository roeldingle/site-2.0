<?php

class Config{

	function getSkillsdata(){

		return $aData = array(
                array("label"=>"Html/Css", "desc" => "Layout Design, Twitter Bootstrap.css"),
				array("label"=>"Javascript", "desc" => "JQuery, Backbone.js, Bootstrap.js"),
				array("label"=>"PHP", "desc" => "Codeigniter, Smarty(template engine), OOP, API's, Curl "),
				array("label"=>"Database", "desc" => "MySql, Redis"),
				array("label"=>"Linux", "desc" => "Command line, Shell scripting"),
				array("label"=>"CMS", "desc" => "Wordpress, Joomla"),
				array("label"=>"Version Control", "desc" => "Git, SVN")
            );


	}

	function getSocialData(){
		return $aData = array(
                array(
                    "link" => "https://www.facebook.com/roel.dingle",
                    "image" => "icon-fb"
                ),
                 array(
                    "link" => "https://twitter.com/w3bh3ro",
                    "image" => "icon-tw"
                ),
				
				array(
                    "link" => "https://vimeo.com/roelmdingle",
                    "image" => "icon-vm"
                ),
                 
                 array(
                    "link" => "http://roeldingle.wordpress.com/",
                    "image" => "icon-wp"
                ),
				array(
                    "link" => "https://github.com/roeldingle",
                    "image" => "icon-gt"
                ),
				
				array(
                    "link" => "http://www.linkedin.com/pub/roel-dingle/52/a30/711",
                    "image" => "icon-ln"
                )
            );

	}
	
	function getWorksData(){

		return $aData = array(
                array(
                    "title" => "Selenium Automation (Wordpress project)",
					"category" => "Uncategories",
                    "desc" => "Uses Selenium Rc to auto-install freshly downloaded Wordpress sites. It also auto-post any number of items on the site.",
                    "git" => "https://github.com/roeldingle/selenium",
                    "image1" => array(
                        "label" => "Install",
                        "src" => "selenium-auto installation(wordress).jpg"
                        ),
                    "image2" => array(
                        "label" => "Post",
                        "src" => "selenium-auto post(wordpress).png"
                        )
                    ),
                  array(
                    "title" => "Product review (C-store app)",
					"category" => "Mini Apps",
                    "desc" => "C-store application to display/preview products and its reviews.",
                    "git" => "https://github.com/roeldingle/productreview",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "c-store(productreview - admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front (gallery)",
                        "src" => "c-store(productreview - front-gallery).png"
                        )
                    ),
                  array(
                    "title" => "Event banner (C-store app)",
					"category" => "Mini Apps",
                    "desc" => "C-store application to create banner type widget that will scroll images corresponding to the site events.",
                    "git" => "https://github.com/roeldingle/banner",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "c-store(banner - admin1).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "c-store(banner - front2).png"
                        )
                    ),
                   array(
                    "title" => "PHMAN (Phil. brach management)",
					"category" => "Web Systems",
                    "desc" => "Office operational systems includes - HR Mngt, Stock Mngt, Expense Mngt etc..",
                    "git" => "https://github.com/roeldingle/phman",
                    "image1" => array(
                        "label" => "Dashboard",
                        "src" => "system-phman.png"
                        ),
                    "image2" => array(
                        "label" => "Admin",
                        "src" => "system-phman2.png"
                        )
                    ),
                   array(
                    "title" => "LMS (language management system)",
					"category" => "Web Systems",
                    "desc" => "A management system for online language e-learning.",
                    "git" => "https://github.com/roeldingle/lms",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "system-lms(admin1).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "system-lms(front).png"
                        )
                    ),
                    array(
                    "title" => "Applicant form (HR applicant system)",
					"category" => "Web Systems",
                    "desc" => "System used by HR staff to document applicant data.",
                    "git" => "https://github.com/roeldingle/applicationform",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "system-simplex.hr-applicationform(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "system-simplex.hr-applicationform(front).png"
                        )
                    ),
                   array(
                    "title" => "Truliamap (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that uses Trulia API and Google maps API to implement a search for real estate info and locate it in a map.",
                    "git" => "https://github.com/roeldingle/truliamap",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-truliamap(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-truliamap(front).png"
                        )
                    ),
                   array(
                    "title" => "Social slider (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that serves as your social linker it follows and stays in your browser as you scroll.",
                    "git" => "https://github.com/roeldingle/socialslider",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-socialslider(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-socialslider(front).png"
                        )
                    ),
                   array(
                    "title" => "Googlemapmarker (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that uses Google maps API which lets you set location markers on your widget map.",
                    "git" => "https://github.com/roeldingle/googlemapmarker",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-googlemapmarker(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-googlemapmarker(front).png"
                        )
                    ),
                   array(
                    "title" => "Skypestatus (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that uses Skype feed to keep you updated on your skype friends status.",
                    "git" => "https://github.com/roeldingle/skypestatus",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-skypestatus(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-skypestatus(front).png"
                        )
                    ),
                   array(
                    "title" => "Application form (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that serves as a mini application like form displayed in you site.",
                    "git" => "https://github.com/roeldingle/skypestatus",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-applicationform(admin1).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-applicationform(front).png"
                        )
                    ),
                   array(
                    "title" => "Mapquestmap (SDK app)",
					"category" => "Mini Apps",
                    "desc" => "SDK - app that uses Mapquest API to use a simple Mapquest map and set markers, routes etc.",
                    "git" => "https://github.com/roeldingle/mapquestmap",
                    "image1" => array(
                        "label" => "Admin",
                        "src" => "sdk-mapquest(admin).png"
                        ),
                    "image2" => array(
                        "label" => "Front",
                        "src" => "sdk-mapquest(front).png"
                        )
                    ),

                );
	}
}