<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kc_state_select_list {

    public function us_state_list() {
		
		$state_list = array(
			'AL'=>"Alabama",  
			'AK'=>"Alaska",  
			'AZ'=>"Arizona",  
			'AR'=>"Arkansas",  
			'CA'=>"California",  
			'CO'=>"Colorado",  
			'CT'=>"Connecticut",  
			'DE'=>"Delaware",  
			'DC'=>"District Of Columbia",  
			'FL'=>"Florida",  
			'GA'=>"Georgia",  
			'HI'=>"Hawaii",  
			'ID'=>"Idaho",  
			'IL'=>"Illinois",  
			'IN'=>"Indiana",  
			'IA'=>"Iowa",  
			'KS'=>"Kansas",  
			'KY'=>"Kentucky",  
			'LA'=>"Louisiana",  
			'ME'=>"Maine",  
			'MD'=>"Maryland",  
			'MA'=>"Massachusetts",  
			'MI'=>"Michigan",  
			'MN'=>"Minnesota",  
			'MS'=>"Mississippi",  
			'MO'=>"Missouri",  
			'MT'=>"Montana",
			'NE'=>"Nebraska",
			'NV'=>"Nevada",
			'NH'=>"New Hampshire",
			'NJ'=>"New Jersey",
			'NM'=>"New Mexico",
			'NY'=>"New York",
			'NC'=>"North Carolina",
			'ND'=>"North Dakota",
			'OH'=>"Ohio",  
			'OK'=>"Oklahoma",  
			'OR'=>"Oregon",  
			'PA'=>"Pennsylvania",  
			'RI'=>"Rhode Island",  
			'SC'=>"South Carolina",  
			'SD'=>"South Dakota",
			'TN'=>"Tennessee",  
			'TX'=>"Texas",  
			'UT'=>"Utah",  
			'VT'=>"Vermont",  
			'VA'=>"Virginia",  
			'WA'=>"Washington",  
			'WV'=>"West Virginia",  
			'WI'=>"Wisconsin",  
			'WY'=>"Wyoming");
	
		
		$output = '<select name="">';
		foreach($state_list as $key => $value) {
			$output .= '<option value="'.$key.'">'.$value.'</option>';
		}
		$output .= '</select>';
		
		return $output;
	}
	
	public function ca_provinces() {
		$provinces = array(
			'ON' => 'Ontario',
			'QC' => 'Quebec',
			'NS' => 'Nova Scotia',
			'NB' => 'New Brunswick',
			'MB' => 'Manitoba',
			'BC' => 'British Columbia',
			'PE' => 'Prince Edward Island',
			'SK' => 'Saskatchewan',
			'AB' => 'Alberta',
			'NL' => 'Newfoundland and Labrador',
			'YT' => 'Yukon Territory',
			'NWT' => 'Northwest Territories',
			'NVT' => 'Nunavut'
		);
		
		$output = '<select name="">';
		foreach($provinces as $key => $value) {
			$output .= '<option value="'.$key.'">'.$value.'</option>';
		}
		$output .= '</select>';
		
		return $output;
		
		
	}
}

/* End of file pi.plugin_name.php */
/* Location: ./system/user/addons/plugin_name/pi.plugin_name.php */