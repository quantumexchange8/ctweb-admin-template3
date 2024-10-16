<?php namespace App\Controllers;

class ComponentController extends BaseController
{
	public function index()
	{
		//index method
	}

	public function ui_alerts(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alerts']),
			'page_title' => view('partials/page-title', ['title' => 'Alerts', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-alerts', $data);
	}

	public function ui_buttons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Buttons']),
			'page_title' => view('partials/page-title', ['title' => 'Buttons', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-buttons', $data);
	}

	public function ui_cards(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cards']),
			'page_title' => view('partials/page-title', ['title' => 'Cards', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-cards', $data);
	}

	public function ui_carousel(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Carousel']),
			'page_title' => view('partials/page-title', ['title' => 'Carousel', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-carousel', $data);
	}

	public function ui_dropdowns(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dropdowns']),
			'page_title' => view('partials/page-title', ['title' => 'Dropdowns', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-dropdowns', $data);
	}

	public function ui_grid(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Grid']),
			'page_title' => view('partials/page-title', ['title' => 'Grid', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-grid', $data);
	}

	public function ui_images(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Images']),
			'page_title' => view('partials/page-title', ['title' => 'Images', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-images', $data);
	}

	public function ui_modals(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Modals']),
			'page_title' => view('partials/page-title', ['title' => 'Modals', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-modals', $data);
	}

	public function ui_offcanvas(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Offcanvas']),
			'page_title' => view('partials/page-title', ['title' => 'Offcanvas', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-offcanvas', $data);
	}

	public function ui_placeholders(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Placeholders']),
			'page_title' => view('partials/page-title', ['title' => 'Placeholders', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-placeholders', $data);
	}

	public function ui_progressbars(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Progress Bars']),
			'page_title' => view('partials/page-title', ['title' => 'Progress Bars', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-progressbars', $data);
	}

	public function ui_tabs_accordions(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tabs & Accordions']),
			'page_title' => view('partials/page-title', ['title' => 'Tabs & Accordions', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-tabs-accordions', $data);
	}

	public function ui_typography(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typography']),
			'page_title' => view('partials/page-title', ['title' => 'Typography', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-typography', $data);
	}

	public function ui_video(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Video']),
			'page_title' => view('partials/page-title', ['title' => 'Video', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-video', $data);
	}

	public function ui_general(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'General']),
			'page_title' => view('partials/page-title', ['title' => 'General', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-general', $data);
	}

	public function ui_colors(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colors']),
			'page_title' => view('partials/page-title', ['title' => 'Colors', 'pagetitle' => 'UI Elements'])
		];
		return view('ui-colors', $data);
	}

	public function extended_lightbox(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lightbox']),
			'page_title' => view('partials/page-title', ['title' => 'Lightbox', 'pagetitle' => 'Extended'])
		];
		return view('extended-lightbox', $data);
	}
	public function extended_rangeslider(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Range Slider']),
			'page_title' => view('partials/page-title', ['title' => 'Range Slider', 'pagetitle' => 'Extended'])
		];
		return view('extended-rangeslider', $data);
	}
	public function extended_sweet_alert(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'SweetAlert 2']),
			'page_title' => view('partials/page-title', ['title' => 'SweetAlert 2', 'pagetitle' => 'Extended'])
		];
		return view('extended-sweet-alert', $data);
	}
	public function extended_rating(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Rating']),
			'page_title' => view('partials/page-title', ['title' => 'Rating', 'pagetitle' => 'Extended'])
		];
		return view('extended-rating', $data);
	}
	public function extended_notifications(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Notifications']),
			'page_title' => view('partials/page-title', ['title' => 'Notifications', 'pagetitle' => 'Extended'])
		];
		return view('extended-notifications', $data);
	}

	public function form_elements(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Basic Elements']),
			'page_title' => view('partials/page-title', ['title' => 'Basic Elements', 'pagetitle' => 'Forms'])
		];
		return view('form-elements', $data);
	}

	public function form_validation(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Validation']),
			'page_title' => view('partials/page-title', ['title' => 'Validation', 'pagetitle' => 'Forms'])
		];
		return view('form-validation', $data);
	}

	public function form_advanced(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Advanced Plugins']),
			'page_title' => view('partials/page-title', ['title' => 'Advanced Plugins', 'pagetitle' => 'Forms'])
		];
		return view('form-advanced', $data);
	}

	public function form_editors(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Editors']),
			'page_title' => view('partials/page-title', ['title' => 'Editors', 'pagetitle' => 'Forms'])
		];
		return view('form-editors', $data);
	}

	public function form_uploads(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'File Upload']),
			'page_title' => view('partials/page-title', ['title' => 'File Upload', 'pagetitle' => 'Forms'])
		];
		return view('form-uploads', $data);
	}

	public function form_wizard(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Wizard']),
			'page_title' => view('partials/page-title', ['title' => 'Wizard', 'pagetitle' => 'Forms'])
		];
		return view('form-wizard', $data);
	}

	public function form_mask(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Mask']),
			'page_title' => view('partials/page-title', ['title' => 'Mask', 'pagetitle' => 'Forms'])
		];
		return view('form-mask', $data);
	}

	public function tables_basic(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Bootstrap Basic']),
			'page_title' => view('partials/page-title', ['title' => 'Bootstrap Basic', 'pagetitle' => 'Tables'])
		];
		return view('tables-basic', $data);
	}

	public function tables_advanced(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Advance Tables']),
			'page_title' => view('partials/page-title', ['title' => 'Advance Tables', 'pagetitle' => 'Tables'])
		];
		return view('tables-advanced', $data);
	}

	public function charts_apex(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Apex Charts']),
			'page_title' => view('partials/page-title', ['title' => 'Apex Charts', 'pagetitle' => 'Charts'])
		];
		return view('charts-apex', $data);
	}

	public function charts_chartjs(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chartjs']),
			'page_title' => view('partials/page-title', ['title' => 'Chartjs', 'pagetitle' => 'Charts'])
		];
		return view('charts-chartjs', $data);
	}

	public function icons_feather(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Feather']),
			'page_title' => view('partials/page-title', ['title' => 'Feather', 'pagetitle' => 'Icons'])
		];
		return view('icons-feather', $data);
	}

	public function icons_boxicons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxicons']),
			'page_title' => view('partials/page-title', ['title' => 'Boxicons', 'pagetitle' => 'Icons'])
		];
		return view('icons-boxicons', $data);
	}

	public function icons_materialdesign(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Material Design']),
			'page_title' => view('partials/page-title', ['title' => 'Material Design', 'pagetitle' => 'Icons'])
		];
		return view('icons-materialdesign', $data);
	}

	public function icons_dripicons(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dripicons']),
			'page_title' => view('partials/page-title', ['title' => 'Dripicons', 'pagetitle' => 'Icons'])
		];
		return view('icons-dripicons', $data);
	}

	public function icons_fontawesome(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Font Awesome 5']),
			'page_title' => view('partials/page-title', ['title' => 'Font Awesome 5', 'pagetitle' => 'Icons'])
		];
		return view('icons-fontawesome', $data);
	}

	public function maps_google(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Google']),
			'page_title' => view('partials/page-title', ['title' => 'Google', 'pagetitle' => 'Maps'])
		];
		return view('maps-google', $data);
	}

	public function maps_vector(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vector']),
			'page_title' => view('partials/page-title', ['title' => 'Vector', 'pagetitle' => 'Maps'])
		];
		return view('maps-vector', $data);
	}

	public function maps_leaflet(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Leaflet']),
			'page_title' => view('partials/page-title', ['title' => 'Leaflet', 'pagetitle' => 'Maps'])
		];
		return view('maps-leaflet', $data);
	}

	//--------------------------------------------------------------------

}
