<?php
/**
 * Copyright 2007-2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2007-2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * I18nCountry Class
 */
class I18nCountry extends Object {

/**
 * Translated country names
 *
 * @var array
 */
	protected $_translated = array();

/**
 * Settings
 *
 * @var array
 */
	public $settings = array(
		'key' => 'iso',
		'return' => 'printableName');

/**
 * Default settings
 *
 * @var array
 */
	protected $_defaults = array(
		'key' => 'iso',
		'returnKey' => 'printableName',
		'push' => null);

/**
 * Constructor
 *
 * @todo add default language of the country
 * @todo add default currency? http://www.xe.com/iso4217.php
 * @param array Options
 * @return object Country
 */
	public function __construct($options = array()) {
		$this->settings = array_merge($this->_defaults, $options);

		if (!in_array($this->settings['key'], array('iso', 'iso3', 'numcode', 'name', 'printableName'))) {
			throw new InvalidArgumentException(__d( 'i18n', 'Invalid setting for key: Use iso, name, iso3, numcode or printableName.'));
		}

		$this->_translated = array(
			array('iso' => 'AF', 'name' => 'AFGHANISTAN', 'printableName' => __d( 'i18n', 'Afghanistan'), 'iso3' => 'AFG', 'numcode' => '4'),
			array('iso' => 'AL', 'name' => 'ALBANIA', 'printableName' => __d( 'i18n', 'Albania'), 'iso3' => 'ALB', 'numcode' => '8'),
			array('iso' => 'DZ', 'name' => 'ALGERIA', 'printableName' => __d( 'i18n',  'Algeria'), 'iso3' => 'DZA', 'numcode' => '12'),
			array('iso' => 'AS', 'name' => 'AMERICAN SAMOA', 'printableName' => __d( 'i18n',  'American Samoa'), 'iso3' => 'ASM', 'numcode' => '16'),
			array('iso' => 'AD', 'name' => 'ANDORRA', 'printableName' => __d( 'i18n', 'Andorra'), 'iso3' => 'AND', 'numcode' => '20'),
			array('iso' => 'AO', 'name' => 'ANGOLA', 'printableName' => __d( 'i18n', 'Angola'), 'iso3' => 'AGO', 'numcode' => '24'),
			array('iso' => 'AI', 'name' => 'ANGUILLA', 'printableName' => __d( 'i18n', 'Anguilla'), 'iso3' => 'AIA', 'numcode' => '660'),
			array('iso' => 'AQ', 'name' => 'ANTARCTICA', 'printableName' => __d( 'i18n', 'Antarctica'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'AG', 'name' => 'ANTIGUA AND BARBUDA', 'printableName' => __d( 'i18n', 'Antigua and Barbuda'), 'iso3' => 'ATG', 'numcode' => '28'),
			array('iso' => 'AR', 'name' => 'ARGENTINA', 'printableName' => __d( 'i18n', 'Argentina'), 'iso3' => 'ARG', 'numcode' => '32'),
			array('iso' => 'AM', 'name' => 'ARMENIA', 'printableName' => __d( 'i18n', 'Armenia'), 'iso3' => 'ARM', 'numcode' => '51'),
			array('iso' => 'AW', 'name' => 'ARUBA', 'printableName' => __d( 'i18n', 'Aruba'), 'iso3' => 'ABW', 'numcode' => '533'),
			array('iso' => 'AU', 'name' => 'AUSTRALIA', 'printableName' => __d( 'i18n', 'Australia'), 'iso3' => 'AUS', 'numcode' => '36'),
			array('iso' => 'AT', 'name' => 'AUSTRIA', 'printableName' => __d( 'i18n', 'Austria'), 'iso3' => 'AUT', 'numcode' => '40'),
			array('iso' => 'AZ', 'name' => 'AZERBAIJAN', 'printableName' => __d( 'i18n', 'Azerbaijan'), 'iso3' => 'AZE', 'numcode' => '31'),
			array('iso' => 'BS', 'name' => 'BAHAMAS', 'printableName' => __d( 'i18n', 'Bahamas'), 'iso3' => 'BHS', 'numcode' => '44'),
			array('iso' => 'BH', 'name' => 'BAHRAIN', 'printableName' => __d( 'i18n', 'Bahrain'), 'iso3' => 'BHR', 'numcode' => '48'),
			array('iso' => 'BD', 'name' => 'BANGLADESH', 'printableName' => __d( 'i18n', 'Bangladesh'), 'iso3' => 'BGD', 'numcode' => '50'),
			array('iso' => 'BB', 'name' => 'BARBADOS', 'printableName' => __d( 'i18n', 'Barbados'), 'iso3' => 'BRB', 'numcode' => '52'),
			array('iso' => 'BY', 'name' => 'BELARUS', 'printableName' => __d( 'i18n', 'Belarus'), 'iso3' => 'BLR', 'numcode' => '112'),
			array('iso' => 'BE', 'name' => 'BELGIUM', 'printableName' => __d( 'i18n', 'Belgium'), 'iso3' => 'BEL', 'numcode' => '56'),
			array('iso' => 'BZ', 'name' => 'BELIZE', 'printableName' => __d( 'i18n', 'Belize'), 'iso3' => 'BLZ', 'numcode' => '84'),
			array('iso' => 'BJ', 'name' => 'BENIN', 'printableName' => __d( 'i18n', 'Benin'), 'iso3' => 'BEN', 'numcode' => '204'),
			array('iso' => 'BM', 'name' => 'BERMUDA', 'printableName' => __d( 'i18n', 'Bermuda'), 'iso3' => 'BMU', 'numcode' => '60'),
			array('iso' => 'BT', 'name' => 'BHUTAN', 'printableName' => __d( 'i18n', 'Bhutan'), 'iso3' => 'BTN', 'numcode' => '64'),
			array('iso' => 'BO', 'name' => 'BOLIVIA', 'printableName' => __d( 'i18n', 'Bolivia'), 'iso3' => 'BOL', 'numcode' => '68'),
			array('iso' => 'BA', 'name' => 'BOSNIA AND HERZEGOVINA', 'printableName' => __d( 'i18n', 'Bosnia and Herzegovina'), 'iso3' => 'BIH', 'numcode' => '70'),
			array('iso' => 'BW', 'name' => 'BOTSWANA', 'printableName' => __d( 'i18n', 'Botswana'), 'iso3' => 'BWA', 'numcode' => '72'),
			array('iso' => 'BV', 'name' => 'BOUVET ISLAND', 'printableName' => __d( 'i18n', 'Bouvet Island'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'BR', 'name' => 'BRAZIL', 'printableName' => __d( 'i18n', 'Brazil'), 'iso3' => 'BRA', 'numcode' => '76'),
			array('iso' => 'IO', 'name' => 'BRITISH INDIAN OCEAN TERRITORY', 'printableName' => __d( 'i18n', 'British Indian Ocean Territory'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'BN', 'name' => 'BRUNEI DARUSSALAM', 'printableName' => __d( 'i18n', 'Brunei Darussalam'), 'iso3' => 'BRN', 'numcode' => '96'),
			array('iso' => 'BG', 'name' => 'BULGARIA', 'printableName' => __d( 'i18n', 'Bulgaria'), 'iso3' => 'BGR', 'numcode' => '100'),
			array('iso' => 'BF', 'name' => 'BURKINA FASO', 'printableName' => __d( 'i18n', 'Burkina Faso'), 'iso3' => 'BFA', 'numcode' => '854'),
			array('iso' => 'BI', 'name' => 'BURUNDI', 'printableName' => __d( 'i18n', 'Burundi'), 'iso3' => 'BDI', 'numcode' => '108'),
			array('iso' => 'KH', 'name' => 'CAMBODIA', 'printableName' => __d( 'i18n', 'Cambodia'), 'iso3' => 'KHM', 'numcode' => '116'),
			array('iso' => 'CM', 'name' => 'CAMEROON', 'printableName' => __d( 'i18n', 'Cameroon'), 'iso3' => 'CMR', 'numcode' => '120'),
			array('iso' => 'CA', 'name' => 'CANADA', 'printableName' => __d( 'i18n', 'Canada'), 'iso3' => 'CAN', 'numcode' => '124'),
			array('iso' => 'CV', 'name' => 'CAPE VERDE', 'printableName' => __d( 'i18n', 'Cape Verde'), 'iso3' => 'CPV', 'numcode' => '132'),
			array('iso' => 'KY', 'name' => 'CAYMAN ISLANDS', 'printableName' => __d( 'i18n', 'Cayman Islands'), 'iso3' => 'CYM', 'numcode' => '136'),
			array('iso' => 'CF', 'name' => 'CENTRAL AFRICAN REPUBLIC', 'printableName' => __d( 'i18n', 'Central African Republic'), 'iso3' => 'CAF', 'numcode' => '140'),
			array('iso' => 'TD', 'name' => 'CHAD', 'printableName' => __d( 'i18n', 'Chad'), 'iso3' => 'TCD', 'numcode' => '148'),
			array('iso' => 'CL', 'name' => 'CHILE', 'printableName' => __d( 'i18n', 'Chile'), 'iso3' => 'CHL', 'numcode' => '152'),
			array('iso' => 'CN', 'name' => 'CHINA', 'printableName' => __d( 'i18n', 'China'), 'iso3' => 'CHN', 'numcode' => '156'),
			array('iso' => 'CX', 'name' => 'CHRISTMAS ISLAND', 'printableName' => __d( 'i18n', 'Christmas Island'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'CC', 'name' => 'COCOS (KEELING) ISLANDS', 'printableName' => __d( 'i18n', 'Cocos (Keeling) Islands'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'CO', 'name' => 'COLOMBIA', 'printableName' => __d( 'i18n', 'Colombia'), 'iso3' => 'COL', 'numcode' => '170'),
			array('iso' => 'KM', 'name' => 'COMOROS', 'printableName' => __d( 'i18n', 'Comoros'), 'iso3' => 'COM', 'numcode' => '174'),
			array('iso' => 'CG', 'name' => 'CONGO', 'printableName' => __d( 'i18n', 'Congo'), 'iso3' => 'COG', 'numcode' => '178'),
			array('iso' => 'CD', 'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'printableName' => __d( 'i18n', 'Congo, the Democratic Republic of the'), 'iso3' => 'COD', 'numcode' => '180'),
			array('iso' => 'CK', 'name' => 'COOK ISLANDS', 'printableName' => __d( 'i18n', 'Cook Islands'), 'iso3' => 'COK', 'numcode' => '184'),
			array('iso' => 'CR', 'name' => 'COSTA RICA', 'printableName' => __d( 'i18n', 'Costa Rica'), 'iso3' => 'CRI', 'numcode' => '188'),
			array('iso' => 'CI', 'name' => 'COTE D\'IVOIRE', 'printableName' => __d( 'i18n', 'Cote D\'Ivoire'), 'iso3' => 'CIV', 'numcode' => '384'),
			array('iso' => 'HR', 'name' => 'CROATIA', 'printableName' => __d( 'i18n', 'Croatia'), 'iso3' => 'HRV', 'numcode' => '191'),
			array('iso' => 'CU', 'name' => 'CUBA', 'printableName' => __d( 'i18n', 'Cuba'), 'iso3' => 'CUB', 'numcode' => '192'),
			array('iso' => 'CY', 'name' => 'CYPRUS', 'printableName' => __d( 'i18n', 'Cyprus'), 'iso3' => 'CYP', 'numcode' => '196'),
			array('iso' => 'CZ', 'name' => 'CZECH REPUBLIC', 'printableName' => __d( 'i18n', 'Czech Republic'), 'iso3' => 'CZE', 'numcode' => '203'),
			array('iso' => 'DK', 'name' => 'DENMARK', 'printableName' => __d( 'i18n', 'Denmark'), 'iso3' => 'DNK', 'numcode' => '208'),
			array('iso' => 'DJ', 'name' => 'DJIBOUTI', 'printableName' => __d( 'i18n', 'Djibouti'), 'iso3' => 'DJI', 'numcode' => '262'),
			array('iso' => 'DM', 'name' => 'DOMINICA', 'printableName' => __d( 'i18n', 'Dominica'), 'iso3' => 'DMA', 'numcode' => '212'),
			array('iso' => 'DO', 'name' => 'DOMINICAN REPUBLIC', 'printableName' => __d( 'i18n', 'Dominican Republic'), 'iso3' => 'DOM', 'numcode' => '214'),
			array('iso' => 'EC', 'name' => 'ECUADOR', 'printableName' => __d( 'i18n', 'Ecuador'), 'iso3' => 'ECU', 'numcode' => '218'),
			array('iso' => 'EG', 'name' => 'EGYPT', 'printableName' => __d( 'i18n', 'Egypt'), 'iso3' => 'EGY', 'numcode' => '818'),
			array('iso' => 'SV', 'name' => 'EL SALVADOR', 'printableName' => __d( 'i18n', 'El Salvador'), 'iso3' => 'SLV', 'numcode' => '222'),
			array('iso' => 'GQ', 'name' => 'EQUATORIAL GUINEA', 'printableName' => __d( 'i18n', 'Equatorial Guinea'), 'iso3' => 'GNQ', 'numcode' => '226'),
			array('iso' => 'ER', 'name' => 'ERITREA', 'printableName' => __d( 'i18n', 'Eritrea'), 'iso3' => 'ERI', 'numcode' => '232'),
			array('iso' => 'EE', 'name' => 'ESTONIA', 'printableName' => __d( 'i18n', 'Estonia'), 'iso3' => 'EST', 'numcode' => '233'),
			array('iso' => 'ET', 'name' => 'ETHIOPIA', 'printableName' => __d( 'i18n', 'Ethiopia'), 'iso3' => 'ETH', 'numcode' => '231'),
			array('iso' => 'FK', 'name' => 'FALKLAND ISLANDS (MALVINAS)', 'printableName' => __d( 'i18n', 'Falkland Islands (Malvinas)'), 'iso3' => 'FLK', 'numcode' => '238'),
			array('iso' => 'FO', 'name' => 'FAROE ISLANDS', 'printableName' => __d( 'i18n', 'Faroe Islands'), 'iso3' => 'FRO', 'numcode' => '234'),
			array('iso' => 'FJ', 'name' => 'FIJI', 'printableName' => __d( 'i18n', 'Fiji'), 'iso3' => 'FJI', 'numcode' => '242'),
			array('iso' => 'FI', 'name' => 'FINLAND', 'printableName' => __d( 'i18n', 'Finland'), 'iso3' => 'FIN', 'numcode' => '246'),
			array('iso' => 'FR', 'name' => 'FRANCE', 'printableName' => __d( 'i18n', 'France'), 'iso3' => 'FRA', 'numcode' => '250'),
			array('iso' => 'GF', 'name' => 'FRENCH GUIANA', 'printableName' => __d( 'i18n', 'French Guiana'), 'iso3' => 'GUF', 'numcode' => '254'),
			array('iso' => 'PF', 'name' => 'FRENCH POLYNESIA', 'printableName' => __d( 'i18n', 'French Polynesia'), 'iso3' => 'PYF', 'numcode' => '258'),
			array('iso' => 'TF', 'name' => 'FRENCH SOUTHERN TERRITORIES', 'printableName' => __d( 'i18n', 'French Southern Territories'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'GA', 'name' => 'GABON', 'printableName' => __d( 'i18n', 'Gabon'), 'iso3' => 'GAB', 'numcode' => '266'),
			array('iso' => 'GM', 'name' => 'GAMBIA', 'printableName' => __d( 'i18n', 'Gambia'), 'iso3' => 'GMB', 'numcode' => '270'),
			array('iso' => 'GE', 'name' => 'GEORGIA', 'printableName' => __d( 'i18n', 'Georgia'), 'iso3' => 'GEO', 'numcode' => '268'),
			array('iso' => 'DE', 'name' => 'GERMANY', 'printableName' => __d( 'i18n', 'Germany'), 'iso3' => 'DEU', 'numcode' => '276'),
			array('iso' => 'GH', 'name' => 'GHANA', 'printableName' => __d( 'i18n', 'Ghana'), 'iso3' => 'GHA', 'numcode' => '288'),
			array('iso' => 'GI', 'name' => 'GIBRALTAR', 'printableName' => __d( 'i18n', 'Gibraltar'), 'iso3' => 'GIB', 'numcode' => '292'),
			array('iso' => 'GR', 'name' => 'GREECE', 'printableName' => __d( 'i18n', 'Greece'), 'iso3' => 'GRC', 'numcode' => '300'),
			array('iso' => 'GL', 'name' => 'GREENLAND', 'printableName' => __d( 'i18n', 'Greenland'), 'iso3' => 'GRL', 'numcode' => '304'),
			array('iso' => 'GD', 'name' => 'GRENADA', 'printableName' => __d( 'i18n', 'Grenada'), 'iso3' => 'GRD', 'numcode' => '308'),
			array('iso' => 'GP', 'name' => 'GUADELOUPE', 'printableName' => __d( 'i18n', 'Guadeloupe'), 'iso3' => 'GLP', 'numcode' => '312'),
			array('iso' => 'GU', 'name' => 'GUAM', 'printableName' => __d( 'i18n', 'Guam'), 'iso3' => 'GUM', 'numcode' => '316'),
			array('iso' => 'GT', 'name' => 'GUATEMALA', 'printableName' => __d( 'i18n', 'Guatemala'), 'iso3' => 'GTM', 'numcode' => '320'),
			array('iso' => 'GN', 'name' => 'GUINEA', 'printableName' => __d( 'i18n', 'Guinea'), 'iso3' => 'GIN', 'numcode' => '324'),
			array('iso' => 'GW', 'name' => 'GUINEA-BISSAU', 'printableName' => __d( 'i18n', 'Guinea-Bissau'), 'iso3' => 'GNB', 'numcode' => '624'),
			array('iso' => 'GY', 'name' => 'GUYANA', 'printableName' => __d( 'i18n', 'Guyana'), 'iso3' => 'GUY', 'numcode' => '328'),
			array('iso' => 'HT', 'name' => 'HAITI', 'printableName' => __d( 'i18n', 'Haiti'), 'iso3' => 'HTI', 'numcode' => '332'),
			array('iso' => 'HM', 'name' => 'HEARD ISLAND AND MCDONALD ISLANDS', 'printableName' => __d( 'i18n', 'Heard Island and Mcdonald Islands'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'VA', 'name' => 'HOLY SEE (VATICAN CITY STATE)', 'printableName' => __d( 'i18n', 'Holy See (Vatican City State)'), 'iso3' => 'VAT', 'numcode' => '336'),
			array('iso' => 'HN', 'name' => 'HONDURAS', 'printableName' => __d( 'i18n', 'Honduras'), 'iso3' => 'HND', 'numcode' => '340'),
			array('iso' => 'HK', 'name' => 'HONG KONG', 'printableName' => __d( 'i18n', 'Hong Kong'), 'iso3' => 'HKG', 'numcode' => '344'),
			array('iso' => 'HU', 'name' => 'HUNGARY', 'printableName' => __d( 'i18n', 'Hungary'), 'iso3' => 'HUN', 'numcode' => '348'),
			array('iso' => 'IS', 'name' => 'ICELAND', 'printableName' => __d( 'i18n', 'Iceland'), 'iso3' => 'ISL', 'numcode' => '352'),
			array('iso' => 'IN', 'name' => 'INDIA', 'printableName' => __d( 'i18n', 'India'), 'iso3' => 'IND', 'numcode' => '356'),
			array('iso' => 'ID', 'name' => 'INDONESIA', 'printableName' => __d( 'i18n', 'Indonesia'), 'iso3' => 'IDN', 'numcode' => '360'),
			array('iso' => 'IR', 'name' => 'IRAN, ISLAMIC REPUBLIC OF', 'printableName' => __d( 'i18n', 'Iran, Islamic Republic of'), 'iso3' => 'IRN', 'numcode' => '364'),
			array('iso' => 'IQ', 'name' => 'IRAQ', 'printableName' => __d( 'i18n', 'Iraq'), 'iso3' => 'IRQ', 'numcode' => '368'),
			array('iso' => 'IE', 'name' => 'IRELAND', 'printableName' => __d( 'i18n', 'Ireland'), 'iso3' => 'IRL', 'numcode' => '372'),
			array('iso' => 'IL', 'name' => 'ISRAEL', 'printableName' => __d( 'i18n', 'Israel'), 'iso3' => 'ISR', 'numcode' => '376'),
			array('iso' => 'IT', 'name' => 'ITALY', 'printableName' => __d( 'i18n', 'Italy'), 'iso3' => 'ITA', 'numcode' => '380'),
			array('iso' => 'JM', 'name' => 'JAMAICA', 'printableName' => __d( 'i18n', 'Jamaica'), 'iso3' => 'JAM', 'numcode' => '388'),
			array('iso' => 'JP', 'name' => 'JAPAN', 'printableName' => __d( 'i18n', 'Japan'), 'iso3' => 'JPN', 'numcode' => '392'),
			array('iso' => 'JO', 'name' => 'JORDAN', 'printableName' => __d( 'i18n', 'Jordan'), 'iso3' => 'JOR', 'numcode' => '400'),
			array('iso' => 'KZ', 'name' => 'KAZAKHSTAN', 'printableName' => __d( 'i18n', 'Kazakhstan'), 'iso3' => 'KAZ', 'numcode' => '398'),
			array('iso' => 'KE', 'name' => 'KENYA', 'printableName' => __d( 'i18n', 'Kenya'), 'iso3' => 'KEN', 'numcode' => '404'),
			array('iso' => 'KI', 'name' => 'KIRIBATI', 'printableName' => __d( 'i18n', 'Kiribati'), 'iso3' => 'KIR', 'numcode' => '296'),
			array('iso' => 'KP', 'name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'printableName' => __d( 'i18n', 'Korea, Democratic People\'s Republic of'), 'iso3' => 'PRK', 'numcode' => '408'),
			array('iso' => 'KR', 'name' => 'KOREA, REPUBLIC OF', 'printableName' => __d( 'i18n', 'Korea, Republic of'), 'iso3' => 'KOR', 'numcode' => '410'),
			array('iso' => 'KW', 'name' => 'KUWAIT', 'printableName' => __d( 'i18n', 'Kuwait'), 'iso3' => 'KWT', 'numcode' => '414'),
			array('iso' => 'KG', 'name' => 'KYRGYZSTAN', 'printableName' => __d( 'i18n', 'Kyrgyzstan'), 'iso3' => 'KGZ', 'numcode' => '417'),
			array('iso' => 'LA', 'name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'printableName' => __d( 'i18n', 'Lao People\'s Democratic Republic'), 'iso3' => 'LAO', 'numcode' => '418'),
			array('iso' => 'LV', 'name' => 'LATVIA', 'printableName' => __d( 'i18n', 'Latvia'), 'iso3' => 'LVA', 'numcode' => '428'),
			array('iso' => 'LB', 'name' => 'LEBANON', 'printableName' => __d( 'i18n', 'Lebanon'), 'iso3' => 'LBN', 'numcode' => '422'),
			array('iso' => 'LS', 'name' => 'LESOTHO', 'printableName' => __d( 'i18n', 'Lesotho'), 'iso3' => 'LSO', 'numcode' => '426'),
			array('iso' => 'LR', 'name' => 'LIBERIA', 'printableName' => __d( 'i18n', 'Liberia'), 'iso3' => 'LBR', 'numcode' => '430'),
			array('iso' => 'LY', 'name' => 'LIBYAN ARAB JAMAHIRIYA', 'printableName' => __d( 'i18n', 'Libyan Arab Jamahiriya'), 'iso3' => 'LBY', 'numcode' => '434'),
			array('iso' => 'LI', 'name' => 'LIECHTENSTEIN', 'printableName' => __d( 'i18n', 'Liechtenstein'), 'iso3' => 'LIE', 'numcode' => '438'),
			array('iso' => 'LT', 'name' => 'LITHUANIA', 'printableName' => __d( 'i18n', 'Lithuania'), 'iso3' => 'LTU', 'numcode' => '440'),
			array('iso' => 'LU', 'name' => 'LUXEMBOURG', 'printableName' => __d( 'i18n', 'Luxembourg'), 'iso3' => 'LUX', 'numcode' => '442'),
			array('iso' => 'MO', 'name' => 'MACAO', 'printableName' => __d( 'i18n', 'Macao'), 'iso3' => 'MAC', 'numcode' => '446'),
			array('iso' => 'MK', 'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'printableName' => __d( 'i18n', 'Macedonia, the Former Yugoslav Republic of'), 'iso3' => 'MKD', 'numcode' => '807'),
			array('iso' => 'MG', 'name' => 'MADAGASCAR', 'printableName' => __d( 'i18n', 'Madagascar'), 'iso3' => 'MDG', 'numcode' => '450'),
			array('iso' => 'MW', 'name' => 'MALAWI', 'printableName' => __d( 'i18n', 'Malawi'), 'iso3' => 'MWI', 'numcode' => '454'),
			array('iso' => 'MY', 'name' => 'MALAYSIA', 'printableName' => __d( 'i18n', 'Malaysia'), 'iso3' => 'MYS', 'numcode' => '458'),
			array('iso' => 'MV', 'name' => 'MALDIVES', 'printableName' => __d( 'i18n', 'Maldives'), 'iso3' => 'MDV', 'numcode' => '462'),
			array('iso' => 'ML', 'name' => 'MALI', 'printableName' => __d( 'i18n', 'Mali'), 'iso3' => 'MLI', 'numcode' => '466'),
			array('iso' => 'MT', 'name' => 'MALTA', 'printableName' => __d( 'i18n', 'Malta'), 'iso3' => 'MLT', 'numcode' => '470'),
			array('iso' => 'MH', 'name' => 'MARSHALL ISLANDS', 'printableName' => __d( 'i18n', 'Marshall Islands'), 'iso3' => 'MHL', 'numcode' => '584'),
			array('iso' => 'MQ', 'name' => 'MARTINIQUE', 'printableName' => __d( 'i18n', 'Martinique'), 'iso3' => 'MTQ', 'numcode' => '474'),
			array('iso' => 'MR', 'name' => 'MAURITANIA', 'printableName' => __d( 'i18n', 'Mauritania'), 'iso3' => 'MRT', 'numcode' => '478'),
			array('iso' => 'MU', 'name' => 'MAURITIUS', 'printableName' => __d( 'i18n', 'Mauritius'), 'iso3' => 'MUS', 'numcode' => '480'),
			array('iso' => 'YT', 'name' => 'MAYOTTE', 'printableName' => __d( 'i18n', 'Mayotte'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'MX', 'name' => 'MEXICO', 'printableName' => __d( 'i18n', 'Mexico'), 'iso3' => 'MEX', 'numcode' => '484'),
			array('iso' => 'FM', 'name' => 'MICRONESIA, FEDERATED STATES OF', 'printableName' => __d( 'i18n', 'Micronesia, Federated States of'), 'iso3' => 'FSM', 'numcode' => '583'),
			array('iso' => 'MD', 'name' => 'MOLDOVA, REPUBLIC OF', 'printableName' => __d( 'i18n', 'Moldova, Republic of'), 'iso3' => 'MDA', 'numcode' => '498'),
			array('iso' => 'MC', 'name' => 'MONACO', 'printableName' => __d( 'i18n', 'Monaco'), 'iso3' => 'MCO', 'numcode' => '492'),
			array('iso' => 'MN', 'name' => 'MONGOLIA', 'printableName' => __d( 'i18n', 'Mongolia'), 'iso3' => 'MNG', 'numcode' => '496'),
			array('iso' => 'MS', 'name' => 'MONTSERRAT', 'printableName' => __d( 'i18n', 'Montserrat'), 'iso3' => 'MSR', 'numcode' => '500'),
			array('iso' => 'MA', 'name' => 'MOROCCO', 'printableName' => __d( 'i18n', 'Morocco'), 'iso3' => 'MAR', 'numcode' => '504'),
			array('iso' => 'MZ', 'name' => 'MOZAMBIQUE', 'printableName' => __d( 'i18n', 'Mozambique'), 'iso3' => 'MOZ', 'numcode' => '508'),
			array('iso' => 'MM', 'name' => 'MYANMAR', 'printableName' => __d( 'i18n', 'Myanmar'), 'iso3' => 'MMR', 'numcode' => '104'),
			array('iso' => 'NA', 'name' => 'NAMIBIA', 'printableName' => __d( 'i18n', 'Namibia'), 'iso3' => 'NAM', 'numcode' => '516'),
			array('iso' => 'NR', 'name' => 'NAURU', 'printableName' => __d( 'i18n', 'Nauru'), 'iso3' => 'NRU', 'numcode' => '520'),
			array('iso' => 'NP', 'name' => 'NEPAL', 'printableName' => __d( 'i18n', 'Nepal'), 'iso3' => 'NPL', 'numcode' => '524'),
			array('iso' => 'NL', 'name' => 'NETHERLANDS', 'printableName' => __d( 'i18n', 'Netherlands'), 'iso3' => 'NLD', 'numcode' => '528'),
			array('iso' => 'AN', 'name' => 'NETHERLANDS ANTILLES', 'printableName' => __d( 'i18n', 'Netherlands Antilles'), 'iso3' => 'ANT', 'numcode' => '530'),
			array('iso' => 'NC', 'name' => 'NEW CALEDONIA', 'printableName' => __d( 'i18n', 'New Caledonia'), 'iso3' => 'NCL', 'numcode' => '540'),
			array('iso' => 'NZ', 'name' => 'NEW ZEALAND', 'printableName' => __d( 'i18n', 'New Zealand'), 'iso3' => 'NZL', 'numcode' => '554'),
			array('iso' => 'NI', 'name' => 'NICARAGUA', 'printableName' => __d( 'i18n', 'Nicaragua'), 'iso3' => 'NIC', 'numcode' => '558'),
			array('iso' => 'NE', 'name' => 'NIGER', 'printableName' => __d( 'i18n', 'Niger'), 'iso3' => 'NER', 'numcode' => '562'),
			array('iso' => 'NG', 'name' => 'NIGERIA', 'printableName' => __d( 'i18n', 'Nigeria'), 'iso3' => 'NGA', 'numcode' => '566'),
			array('iso' => 'NU', 'name' => 'NIUE', 'printableName' => __d( 'i18n', 'Niue'), 'iso3' => 'NIU', 'numcode' => '570'),
			array('iso' => 'NF', 'name' => 'NORFOLK ISLAND', 'printableName' => __d( 'i18n', 'Norfolk Island'), 'iso3' => 'NFK', 'numcode' => '574'),
			array('iso' => 'MP', 'name' => 'NORTHERN MARIANA ISLANDS', 'printableName' => __d( 'i18n', 'Northern Mariana Islands'), 'iso3' => 'MNP', 'numcode' => '580'),
			array('iso' => 'NO', 'name' => 'NORWAY', 'printableName' => __d( 'i18n', 'Norway'), 'iso3' => 'NOR', 'numcode' => '578'),
			array('iso' => 'OM', 'name' => 'OMAN', 'printableName' => __d( 'i18n', 'Oman'), 'iso3' => 'OMN', 'numcode' => '512'),
			array('iso' => 'PK', 'name' => 'PAKISTAN', 'printableName' => __d( 'i18n', 'Pakistan'), 'iso3' => 'PAK', 'numcode' => '586'),
			array('iso' => 'PW', 'name' => 'PALAU', 'printableName' => __d( 'i18n', 'Palau'), 'iso3' => 'PLW', 'numcode' => '585'),
			array('iso' => 'PS', 'name' => 'PALESTINIAN TERRITORY, OCCUPIED', 'printableName' => __d( 'i18n', 'Palestinian Territory, Occupied'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'PA', 'name' => 'PANAMA', 'printableName' => __d( 'i18n', 'Panama'), 'iso3' => 'PAN', 'numcode' => '591'),
			array('iso' => 'PG', 'name' => 'PAPUA NEW GUINEA', 'printableName' => __d( 'i18n', 'Papua New Guinea'), 'iso3' => 'PNG', 'numcode' => '598'),
			array('iso' => 'PY', 'name' => 'PARAGUAY', 'printableName' => __d( 'i18n', 'Paraguay'), 'iso3' => 'PRY', 'numcode' => '600'),
			array('iso' => 'PE', 'name' => 'PERU', 'printableName' => __d( 'i18n', 'Peru'), 'iso3' => 'PER', 'numcode' => '604'),
			array('iso' => 'PH', 'name' => 'PHILIPPINES', 'printableName' => __d( 'i18n', 'Philippines'), 'iso3' => 'PHL', 'numcode' => '608'),
			array('iso' => 'PN', 'name' => 'PITCAIRN', 'printableName' => __d( 'i18n', 'Pitcairn'), 'iso3' => 'PCN', 'numcode' => '612'),
			array('iso' => 'PL', 'name' => 'POLAND', 'printableName' => __d( 'i18n', 'Poland'), 'iso3' => 'POL', 'numcode' => '616'),
			array('iso' => 'PT', 'name' => 'PORTUGAL', 'printableName' => __d( 'i18n', 'Portugal'), 'iso3' => 'PRT', 'numcode' => '620'),
			array('iso' => 'PR', 'name' => 'PUERTO RICO', 'printableName' => __d( 'i18n', 'Puerto Rico'), 'iso3' => 'PRI', 'numcode' => '630'),
			array('iso' => 'QA', 'name' => 'QATAR', 'printableName' => __d( 'i18n', 'Qatar'), 'iso3' => 'QAT', 'numcode' => '634'),
			array('iso' => 'RE', 'name' => 'REUNION', 'printableName' => __d( 'i18n', 'Reunion'), 'iso3' => 'REU', 'numcode' => '638'),
			array('iso' => 'RO', 'name' => 'ROMANIA', 'printableName' => __d( 'i18n', 'Romania'), 'iso3' => 'ROM', 'numcode' => '642'),
			array('iso' => 'RU', 'name' => 'RUSSIAN FEDERATION', 'printableName' => __d( 'i18n', 'Russian Federation'), 'iso3' => 'RUS', 'numcode' => '643'),
			array('iso' => 'RW', 'name' => 'RWANDA', 'printableName' => __d( 'i18n', 'Rwanda'), 'iso3' => 'RWA', 'numcode' => '646'),
			array('iso' => 'SH', 'name' => 'SAINT HELENA', 'printableName' => __d( 'i18n', 'Saint Helena'), 'iso3' => 'SHN', 'numcode' => '654'),
			array('iso' => 'KN', 'name' => 'SAINT KITTS AND NEVIS', 'printableName' => __d( 'i18n', 'Saint Kitts and Nevis'), 'iso3' => 'KNA', 'numcode' => '659'),
			array('iso' => 'LC', 'name' => 'SAINT LUCIA', 'printableName' => __d( 'i18n', 'Saint Lucia'), 'iso3' => 'LCA', 'numcode' => '662'),
			array('iso' => 'PM', 'name' => 'SAINT PIERRE AND MIQUELON', 'printableName' => __d( 'i18n', 'Saint Pierre and Miquelon'), 'iso3' => 'SPM', 'numcode' => '666'),
			array('iso' => 'VC', 'name' => 'SAINT VINCENT AND THE GRENADINES', 'printableName' => __d( 'i18n', 'Saint Vincent and the Grenadines'), 'iso3' => 'VCT', 'numcode' => '670'),
			array('iso' => 'WS', 'name' => 'SAMOA', 'printableName' => __d( 'i18n', 'Samoa'), 'iso3' => 'WSM', 'numcode' => '882'),
			array('iso' => 'SM', 'name' => 'SAN MARINO', 'printableName' => __d( 'i18n', 'San Marino'), 'iso3' => 'SMR', 'numcode' => '674'),
			array('iso' => 'ST', 'name' => 'SAO TOME AND PRINCIPE', 'printableName' => __d( 'i18n', 'Sao Tome and Principe'), 'iso3' => 'STP', 'numcode' => '678'),
			array('iso' => 'SA', 'name' => 'SAUDI ARABIA', 'printableName' => __d( 'i18n', 'Saudi Arabia'), 'iso3' => 'SAU', 'numcode' => '682'),
			array('iso' => 'SN', 'name' => 'SENEGAL', 'printableName' => __d( 'i18n', 'Senegal'), 'iso3' => 'SEN', 'numcode' => '686'),
			array('iso' => 'CS', 'name' => 'SERBIA AND MONTENEGRO', 'printableName' => __d( 'i18n', 'Serbia and Montenegro'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'SC', 'name' => 'SEYCHELLES', 'printableName' => __d( 'i18n', 'Seychelles'), 'iso3' => 'SYC', 'numcode' => '690'),
			array('iso' => 'SL', 'name' => 'SIERRA LEONE', 'printableName' => __d( 'i18n', 'Sierra Leone'), 'iso3' => 'SLE', 'numcode' => '694'),
			array('iso' => 'SG', 'name' => 'SINGAPORE', 'printableName' => __d( 'i18n', 'Singapore'), 'iso3' => 'SGP', 'numcode' => '702'),
			array('iso' => 'SK', 'name' => 'SLOVAKIA', 'printableName' => __d( 'i18n', 'Slovakia'), 'iso3' => 'SVK', 'numcode' => '703'),
			array('iso' => 'SI', 'name' => 'SLOVENIA', 'printableName' => __d( 'i18n', 'Slovenia'), 'iso3' => 'SVN', 'numcode' => '705'),
			array('iso' => 'SB', 'name' => 'SOLOMON ISLANDS', 'printableName' => __d( 'i18n', 'Solomon Islands'), 'iso3' => 'SLB', 'numcode' => '90'),
			array('iso' => 'SO', 'name' => 'SOMALIA', 'printableName' => __d( 'i18n', 'Somalia'), 'iso3' => 'SOM', 'numcode' => '706'),
			array('iso' => 'ZA', 'name' => 'SOUTH AFRICA', 'printableName' => __d( 'i18n', 'South Africa'), 'iso3' => 'ZAF', 'numcode' => '710'),
			array('iso' => 'GS', 'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'printableName' => __d( 'i18n', 'South Georgia and the South Sandwich Islands'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'ES', 'name' => 'SPAIN', 'printableName' => __d( 'i18n', 'Spain'), 'iso3' => 'ESP', 'numcode' => '724'),
			array('iso' => 'LK', 'name' => 'SRI LANKA', 'printableName' => __d( 'i18n', 'Sri Lanka'), 'iso3' => 'LKA', 'numcode' => '144'),
			array('iso' => 'SD', 'name' => 'SUDAN', 'printableName' => __d( 'i18n', 'Sudan'), 'iso3' => 'SDN', 'numcode' => '736'),
			array('iso' => 'SR', 'name' => 'SURINAME', 'printableName' => __d( 'i18n', 'Suriname'), 'iso3' => 'SUR', 'numcode' => '740'),
			array('iso' => 'SJ', 'name' => 'SVALBARD AND JAN MAYEN', 'printableName' => __d( 'i18n', 'Svalbard and Jan Mayen'), 'iso3' => 'SJM', 'numcode' => '744'),
			array('iso' => 'SZ', 'name' => 'SWAZILAND', 'printableName' => __d( 'i18n', 'Swaziland'), 'iso3' => 'SWZ', 'numcode' => '748'),
			array('iso' => 'SE', 'name' => 'SWEDEN', 'printableName' => __d( 'i18n', 'Sweden'), 'iso3' => 'SWE', 'numcode' => '752'),
			array('iso' => 'CH', 'name' => 'SWITZERLAND', 'printableName' => __d( 'i18n', 'Switzerland'), 'iso3' => 'CHE', 'numcode' => '756'),
			array('iso' => 'SY', 'name' => 'SYRIAN ARAB REPUBLIC', 'printableName' => __d( 'i18n', 'Syrian Arab Republic'), 'iso3' => 'SYR', 'numcode' => '760'),
			array('iso' => 'TW', 'name' => 'TAIWAN, PROVINCE OF CHINA', 'printableName' => __d( 'i18n', 'Taiwan, Province of China'), 'iso3' => 'TWN', 'numcode' => '158'),
			array('iso' => 'TJ', 'name' => 'TAJIKISTAN', 'printableName' => __d( 'i18n', 'Tajikistan'), 'iso3' => 'TJK', 'numcode' => '762'),
			array('iso' => 'TZ', 'name' => 'TANZANIA, UNITED REPUBLIC OF', 'printableName' => __d( 'i18n', 'Tanzania, United Republic of'), 'iso3' => 'TZA', 'numcode' => '834'),
			array('iso' => 'TH', 'name' => 'THAILAND', 'printableName' => __d( 'i18n', 'Thailand'), 'iso3' => 'THA', 'numcode' => '764'),
			array('iso' => 'TL', 'name' => 'TIMOR-LESTE', 'printableName' => __d( 'i18n', 'Timor-Leste'), 'iso3' => null, 'numcode' => null),
			array('iso' => 'TG', 'name' => 'TOGO', 'printableName' => __d( 'i18n', 'Togo'), 'iso3' => 'TGO', 'numcode' => '768'),
			array('iso' => 'TK', 'name' => 'TOKELAU', 'printableName' => __d( 'i18n', 'Tokelau'), 'iso3' => 'TKL', 'numcode' => '772'),
			array('iso' => 'TO', 'name' => 'TONGA', 'printableName' => __d( 'i18n', 'Tonga'), 'iso3' => 'TON', 'numcode' => '776'),
			array('iso' => 'TT', 'name' => 'TRINIDAD AND TOBAGO', 'printableName' => __d( 'i18n', 'Trinidad and Tobago'), 'iso3' => 'TTO', 'numcode' => '780'),
			array('iso' => 'TN', 'name' => 'TUNISIA', 'printableName' => __d( 'i18n', 'Tunisia'), 'iso3' => 'TUN', 'numcode' => '788'),
			array('iso' => 'TR', 'name' => 'TURKEY', 'printableName' => __d( 'i18n', 'Turkey'), 'iso3' => 'TUR', 'numcode' => '792'),
			array('iso' => 'TM', 'name' => 'TURKMENISTAN', 'printableName' => __d( 'i18n', 'Turkmenistan'), 'iso3' => 'TKM', 'numcode' => '795'),
			array('iso' => 'TC', 'name' => 'TURKS AND CAICOS ISLANDS', 'printableName' => __d( 'i18n', 'Turks and Caicos Islands'), 'iso3' => 'TCA', 'numcode' => '796'),
			array('iso' => 'TV', 'name' => 'TUVALU', 'printableName' => __d( 'i18n', 'Tuvalu'), 'iso3' => 'TUV', 'numcode' => '798'),
			array('iso' => 'UG', 'name' => 'UGANDA', 'printableName' => __d( 'i18n', 'Uganda'), 'iso3' => 'UGA', 'numcode' => '800'),
			array('iso' => 'UA', 'name' => 'UKRAINE', 'printableName' => __d( 'i18n', 'Ukraine'), 'iso3' => 'UKR', 'numcode' => '804'),
			array('iso' => 'AE', 'name' => 'UNITED ARAB EMIRATES', 'printableName' => __d( 'i18n', 'United Arab Emirates'), 'iso3' => 'ARE', 'numcode' => '784'),
			array('iso' => 'GB', 'name' => 'UNITED KINGDOM', 'printableName' => __d( 'i18n', 'United Kingdom'), 'iso3' => 'GBR', 'numcode' => '826'),
			array('iso' => 'US', 'name' => 'UNITED STATES', 'printableName' => __d( 'i18n', 'United States'), 'iso3' => 'USA', 'numcode' => '840'),
			array('iso' => 'UY', 'name' => 'URUGUAY', 'printableName' => __d( 'i18n', 'Uruguay'), 'iso3' => 'URY', 'numcode' => '858'),
			array('iso' => 'UZ', 'name' => 'UZBEKISTAN', 'printableName' => __d( 'i18n', 'Uzbekistan'), 'iso3' => 'UZB', 'numcode' => '860'),
			array('iso' => 'VU', 'name' => 'VANUATU', 'printableName' => __d( 'i18n', 'Vanuatu'), 'iso3' => 'VUT', 'numcode' => '548'),
			array('iso' => 'VE', 'name' => 'VENEZUELA', 'printableName' => __d( 'i18n', 'Venezuela'), 'iso3' => 'VEN', 'numcode' => '862'),
			array('iso' => 'VN', 'name' => 'VIET NAM', 'printableName' => __d( 'i18n', 'Viet Nam'), 'iso3' => 'VNM', 'numcode' => '704'),
			array('iso' => 'VG', 'name' => 'VIRGIN ISLANDS, BRITISH', 'printableName' => __d( 'i18n', 'Virgin Islands, British'), 'iso3' => 'VGB', 'numcode' => '92'),
			array('iso' => 'VI', 'name' => 'VIRGIN ISLANDS, U.S.', 'printableName' => __d( 'i18n', 'Virgin Islands, U.s.'), 'iso3' => 'VIR', 'numcode' => '850'),
			array('iso' => 'WF', 'name' => 'WALLIS AND FUTUNA', 'printableName' => __d( 'i18n', 'Wallis and Futuna'), 'iso3' => 'WLF', 'numcode' => '876'),
			array('iso' => 'EH', 'name' => 'WESTERN SAHARA', 'printableName' => __d( 'i18n', 'Western Sahara'), 'iso3' => 'ESH', 'numcode' => '732'),
			array('iso' => 'YE', 'name' => 'YEMEN', 'printableName' => __d( 'i18n', 'Yemen'), 'iso3' => 'YEM', 'numcode' => '887'),
			array('iso' => 'ZM', 'name' => 'ZAMBIA', 'printableName' => __d( 'i18n', 'Zambia'), 'iso3' => 'ZMB', 'numcode' => '894'),
			array('iso' => 'ZW', 'name' => 'ZIMBABWE', 'printableName' => __d( 'i18n', 'Zimbabwe'), 'iso3' => 'ZWE', 'numcode' => '716'),
		);
	}

/**
 * Returns a list countries
 *
 * @param boolean $translate, if true will return translated country tags
 * @param string, iso, name, iso3 or numcode to return the list based on
 * @return array
 */
	public function getList() {
		$key = $this->settings['key'];
		$returnKey = $this->settings['returnKey'];

		$out = array();
		foreach ($this->_translated as $country) {
			if (empty($country[$key])) {
				continue;
			}
			if (is_null($returnKey)) {
				$out[] = $country[$key];
			} else {
				$out[$country[$key]] = $country[$returnKey];
			}
		}
		return $out;
	}

/**
 * Returns a single country based on the passed code and type
 *
 * @param string $threeLetterCode The 3 letter code you want to convert.
 * @param string, iso, name, iso3 or numcode to return the list based on
 * @return mixed string or array based on the 3rd param
 **/
	public function getBy($string = null, $full = false) {
		$string = strtolower($string);
		foreach ($this->_translated as $country) {
			if (strtolower($country[$this->settings['key']]) == $string) {
				if ($full === true) {
					return $country;
				}
				return $country[$this->settings['returnKey']];
			}
		}
		
		return null;
		throw new InvalidArgumentException(sprintf(__d( 'i18n', 'Invalid argument #1: %s is not a valid %s identifyer.'), $string, $this->settings['key']));
	}

}