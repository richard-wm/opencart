<?php
class ControllerModuleHTMLContent extends Controller {
	public function index($setting) {

		$data['heading_title'] = html_entity_decode($setting['heading'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
		$data['message'] = html_entity_decode($setting['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/html_content.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/html_content.tpl', $data);
		} else {
			return $this->load->view('default/template/module/html_content.tpl', $data);
		}
	}
}