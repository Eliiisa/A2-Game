<?php
	
class theme {

		protected $id;
		protected $nom;
		protected $background;
		protected $objet;
		protected $easteregg;
		protected $animeau1;
		protected $animeau2;
		protected $animeau3;
		
		
		
		
		
		
		public function getId() {
			return $this->id;
		}
		public function setId($id) {
			$this->id = $id;
		}
		public function getNom() {
			return $this->nom;
		}
		public function setNom($nom) {
			$this->nom = $nom;
		}
		public function getBackGround() {
			return $this->background;		
		}
		public function setBackGround($background) {
			$this->background = $background;
		}
		public function getObjet() {
			return $this->objet;
		}
		public function setObjet($objet) {
			$this->objet = $objet;
		}
		public function getEasterEgg() {
			return $this->easteregg;
		}
		public function setEasterEgg($easteregg) {
			$this->easteregg = $easteregg;
		}
		public function getAnimeau1() {
			return $this->animeau1;
		}
		public function setAnimeau1($animeau1) {
			$this->animeau1 = $animeau1;
		}
		public function getAnimeau2() {
			return $this->animeau2;
		}
		public function setAnimeau2($animeau2) {
			$this->animeau2 = $animeau2;
		}
		public function getAnimeau3() {
			return $this->animeau3;
		}
		public function setAnimeau3($animeau3) {
			$this->animeau3 = $animeau3;
		}
	}