<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    // 1. Packing & Unpacking
    function packingUnpacking()
    {
        $data['title'] = "Best Packing & Unpacking Services | " . $this->comp['company3'];
        $data['description'] = "Get professional household packing and unpacking services from " . $this->comp['company3'] . ". High-quality bubble wraps and custom cartons for safe damage-free relocation.";
        $data['module'] = "services";
        $data['view_file'] = "packing_unpacking";
        echo Modules::run('template/layout2', $data);
    }

    // 2. Loading & Unloading
    function loadingUnloading()
    {
        $data['title'] = "Safe Loading & Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Secure loading and unloading services from " . $this->comp['company3'] . ". Expert handlers and modern lifting equipment for scratch-free heavy items handling.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    // 3. Household Shifting
    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    // 4. Office Shifting
    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ". Minimize downtime with our experienced office relocation experts.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    // 5. Industrial Shifting
    function industrial()
    {
        $data['title'] = "Industrial Shifting & Machinery Transport | " . $this->comp['company3'];
        $data['description'] = "Reliable industrial shifting and heavy cargo transport by " . $this->comp['company3'] . ". Complete heavy industrial relocation with certified safety measures.";
        $data['module'] = "services";
        $data['view_file'] = "industrial_shifting";
        echo Modules::run('template/layout2', $data);
    }

    // 6. Local Shifting
    function local()
    {
        $data['title'] = "Fast Local Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Affordable and quick local home & office shifting services by " . $this->comp['company3'] . ". Experienced local moving team and cargo carriers.";
        $data['module'] = "services";
        $data['view_file'] = "local_shifting";
        echo Modules::run('template/layout2', $data);
    }

    // 7. Car Transportation
    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ". On-time and damage-free vehicle delivery across India.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    // 8. General Insurance
    function insurance()
    {
        $data['title'] = "General Transit Insurance Services | " . $this->comp['company3'];
        $data['description'] = "Protect your household goods with comprehensive transit and general insurance from " . $this->comp['company3'] . ". Fast and hassle-free claim handling.";
        $data['module'] = "services";
        $data['view_file'] = "general_insurance";
        echo Modules::run('template/layout2', $data);
    }

    // 9. Bike Transportation
    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ". We ensure scratch-free and timely delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }
}
