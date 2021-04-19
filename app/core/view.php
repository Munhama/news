<?php

class View {
	
	function generate($content_view, $template_view, $data = null) {

		include 'app/view/'.$template_view;
	}
}
