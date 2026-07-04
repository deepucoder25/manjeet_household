<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['bhopal_phone'] = '+91 9713314455';
        $this->comp['bhopal_phonehtml'] = 'tel:+919713314455';
        $this->comp['indore_phone'] = '+91 9893701992';
        $this->comp['indore_phonehtml'] = 'tel:+919893701992';
        $this->comp['indore_phone1'] = '+91 9111111593';
        $this->comp['indore_phonehtml1'] = 'tel:+919111111593';
        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['bhopal_mail'] = 'manjeetpackersandmovers@gmail.com';
        $this->comp['bhopal_mailhtml'] = "mailto:manjeetpackersandmovers@gmail.com";
        $this->comp['indore_mail'] = 'manjeetpackersindore@gmail.com';    
        $this->comp['indore_mailhtml'] = "mailto:manjeetpackersindore@gmail.com";
        $this->comp['company3'] = 'Manjeet House Hold Packers and Movers';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['bhopal_whatsapphtml'] = "https://wa.me/919713314455";
        $this->comp['indore_whatsapphtml'] = "https://wa.me/919893701992";
        $this->comp['indore_whatsapphtml1'] = "https://wa.me/919111111593";

        $this->comp['bhopal_address'] = "Shop no G-09 , balaji parisar, shopping complex, block -A, Near Trupati Abhinav homes,  Ayodhya by pass road Bhopal, Pincode -462010";
        $this->comp['bhopal_address1'] = "Shop no G-09 , balaji parisar, shopping complex, block -A, Near Trupati Abhinav homes,  Ayodhya by pass road Bhopal";
        $this->comp['bhopal_address2'] = "Near Trupati Abhinav homes,  Ayodhya by pass road Bhopal";
        $this->comp['bhopal_addressRegion'] = "Bhopal";
        $this->comp['bhopal_postalCode'] = "462010";
        $this->comp['bhopal_companystate'] = "Madhya Pradesh";

        $this->comp['indore_address'] = "Shop no-26, Scheme no-78, behind ckd, Dewas Naka, Indore, pincode-452010";
        $this->comp['indore_address1'] = "Shop no-26, Scheme no-78, behind ckd, Dewas Naka, Indore";
        $this->comp['indore_address2'] = "behind ckd, Dewas Naka, Indore, pincode-452010";
        $this->comp['indore_addressRegion'] = "Indore";
        $this->comp['indore_postalCode'] = "452010";
        $this->comp['indore_companystate'] = "Madhya Pradesh";
        $this->comp['themeColor'] = "#DF0E14";

        $this->comp['experience'] = "25+";
        $this->comp['startYear'] = "2001";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['successfulMoves'] = "35,000+";
        $this->comp['yearsExperience'] = "25+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "39850";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
