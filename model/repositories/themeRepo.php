<?php

  class themeRepository
  {
    public function getAll($pdo, $ID_THEME){

	  $req = $pdo->query('SELECT THE_ID, THE_NOM, THE_BACKGROUND, THE_OBJET, THE_EASTEREGGS, THE_ANIMEAU1, THE_ANIMEAU2, THE_ANIMEAU3 FROM THEME WHERE THE_ID = '.$ID_THEME);
      $req->setFetchMode(PDO::FETCH_OBJ);

      $listImgTheme = array();

      while ($obj = $req->fetch()){

        $theme = new theme();
		$theme->setId($obj->THE_ID);
		$theme->setNom($obj->THE_NOM);
		$theme->setBackGround($obj->THE_BACKGROUND); 
		$theme->setObjet($obj->THE_OBJET);
		$theme->setEasterEgg($obj->THE_EASTEREGGS);
		$theme->setAnimeau1($obj->THE_ANIMEAU1);
		$theme->setAnimeau2($obj->THE_ANIMEAU2);
		$theme->setAnimeau3($obj->THE_ANIMEAU3);


        $listImgTheme[] = $theme;


      }

      return $listImgTheme;
    }
  }