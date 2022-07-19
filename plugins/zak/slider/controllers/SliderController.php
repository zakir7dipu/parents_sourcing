<?php namespace Zak\Slider\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class SliderController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'slider_access' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zak.Slider', 'main-menu-item');
    }
}
