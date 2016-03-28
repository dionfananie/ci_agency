<?php
	class Dionco_data extends CI_Model{

		function __construct(){
			
			parent::__construct();
		}

		function getJudul(){
			return 'Dionco';
			
		}

		function getNavbar(){
			$navbar = array('services', 'portfolio', 'about', 'team', 'contact' );
			return $navbar;
		}

		function getServiceName(){
			$servname = array('E-Commerce'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
			 				  'Responsive Design' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
			 				  'Web Security'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.');
			return $servname;
		}
		function getPortfolio(){
			$portfolio = array(
				array(
					'Round Icons',
					'dionco/img/portfolio/roundicons.png',
					'Graphic Design'
					),
				 array(
				 	'Startup Framework',
					'dionco/img/portfolio/startup-framework.png',
					'Website Design'
					),
				 array(
				 	'Treehouse',
					'dionco/img/portfolio/treehouse.png',
					'Website Design'
					),
				 array(
				 	'Golden',
					'dionco/img/portfolio/golden.png',
				 	'Website Design'),
				 array(
				 	'Escape',
					'dionco/img/portfolio/escape.png',
					'Website Design'
					),
				 array(
				 	'Dreams',
					'dionco/img/portfolio/dreams.png',
					'Website Design')
				);
			return $portfolio;
		}

		function getAbout(){
			$about = array(
				array(
					'dionco/img/about/1.jpg',
					'2009-2011',
					'Our Humble Beginnings',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'
					),
				 array(
					'dionco/img/about/2.jpg',
				 	'March 2011',
					'An Agency is Born'
					),
				 array(
					'dionco/img/about/3.jpg',
				 	'December 2012',
					'Transition to Full Service'
					),
				 array(
					'dionco/img/about/4.jpg',
				 	'July 2014',
				 	'Phase Two Expansion')
				
				);
			return $about;

		}

		function getTeam(){
			$team = array(
				array(
					'dionco/img/team/1.jpg',
					'Kay Garland',
					'Lead Designer'
					),
				array(
					'dionco/img/team/2.jpg',
					'Larry Parker',
					'Lead Marketer'
					
					),
				array(
					'dionco/img/team/3.jpg',
					'Diana Pertersen',
					'Lead Developer'
					
					)
				);
			return $team;
		}

		function getClient(){
			$client = array(
				'dionco/img/logos/envato.jpg',
				'dionco/img/logos/designmodo.jpg', 
				'dionco/img/logos/themeforest.jpg', 
				'dionco/img/logos/creative-market.jpg'
				 );
			return $client;
		}
	}




