<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us - Professional Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our " . $this->comp['experience'] . " legacy of trust, infrastructure, expert team, mission, and vision in the packing and moving industry.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us for Relocation | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced home shifting, vehicle transportation, and corporate relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Shifting FAQs - Packers and Movers Queries | " . $this->comp['company3'];
        $data['description'] = "Get answers to common questions about packing & shifting charges, transit insurance, delivery timelines, shipment tracking, and relocation policies at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Verified Customer Reviews & Shifting Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client reviews and testimonials about " . $this->comp['company3'] . " home shifting, bike/car transportation, and office relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function moving_tips()
    {
        $data['title'] = "Home Shifting & Packing Tips for Easy Relocation | " . $this->comp['company3'];
        $data['description'] = "Expert packers and movers tips for a smooth, stress-free home relocation. Learn how to plan, declutter, pack, and transition to your new home easily with " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "moving_tips";
        echo Modules::run('template/layout2', $data);
    }
}

