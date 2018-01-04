<?php
/*	Project:	PDH Readmodule Generator
 *	Package:	PDH Readmodule Generator
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

define('EQDKP_INC', true);
$eqdkp_root_path = './';
include_once($eqdkp_root_path . 'common.php');

class repo_signer_all extends gen_class {
	public static $shortcuts = array('db');
	
	public function __construct() {
		$strCoreKey = "";
		$strPackageKey = "";
	
		//==================================================================
	
		$objPackages = $this->db->query("SELECT * FROM __repo_packages WHERE category");
		if ($objPackages){
			while($row = $objPackages->fetchAssoc()){
				if (intval($row['category']) == 8){
					$privateKey = $strCoreKey;
				} else {
					$privateKey = $strPackageKey;
				}
				
				if($row['filehash'] != ""){
					$strHash = $row['filehash'];
				// fetch private key from file and ready it
				
				$strKey = "file://".$privateKey;
				$pkeyid = openssl_pkey_get_private($strKey);
				
				// compute signature
				openssl_sign($strHash, $signature, $pkeyid, "sha1WithRSAEncryption");
				
				// free the key from memory
				openssl_free_key($pkeyid);
				$signature = base64_encode($signature);
				
				echo "UPDATE eqdkp20_repo_packages SET signature = '".$signature."' WHERE id=".$row['id']."; ";
				
				}

			}
		}
		
	}
	
}
registry::register('repo_signer_all');
?>