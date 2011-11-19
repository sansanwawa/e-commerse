<?php

  
  /**
   * Description of merchant
   *
   * @author Sandy Haryono<sandy@indopay.com><sandyharyono@gmail.com>
   * ControllerCatalogMerchant
   */
  class ControllerCatalogMerchant extends Controller {
       
        private $error = array(); 
     
  	public function index() {
          $this->load->language('catalog/merchant');
          $this->load->model('catalog/merchant');
          $this->getList();
  	}
        
        
        private function getList(){
             
             $this->data['breadcrumbs'][] = array(
                         'text' => $this->language->get('text_home'),
			 'href' => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
                         'separator' => false
   		);
             
              $this->data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('catalog/merchant', 'token=' . $this->session->data['token'] . $url, 'SSL'),
                'separator' => ' :: '
               );


             $results = $this->model_catalog_merchant->getMerchants();
             
             foreach ($results as $result) {
                  
                  $this->data['merchants'][] = array(
				'merchant_id' => $result['merchant_id'],
				'merchant_name'       => $result['merchant_name']
				 
			);
                  
             }
             
             
             $this->template = 'catalog/merchant_list.tpl';
             $this->children = array(
			'common/header',
			'common/footer',
		);
             $this->response->setOutput($this->render());
        }
   
        
        
        
  }

?>
