<?php

  /*
   * To change this template, choose Tools | Templates
   * and open the template in the editor.
   */

  /**
   * Description of merchant
   *
   * @author Sandy Haryono<sandy@indopay.com><sandyharyono@gmail.com>
   */
  class ModelCatalogMerchant extends Model {
    
       
       public function getMerchants($data = array()) {
	 		$sql = "SELECT * FROM merchant"; 		 
			$query = $this->db->query($sql);		
			return $query->rows;
		
	}
        
        
	
  }

?>
