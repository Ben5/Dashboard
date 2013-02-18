<?php

use Dashboard\SiteConfig;

require_once SiteConfig::REVERB_ROOT."/system/componentbase.php";

class Dashboard extends ComponentBase
{
    protected function
    Index()
    {

    }

    protected function
    GetAccessLogData()
    {
        $this->SetOnlyTemplate(true);
        $this->SetViewName('dashboard_errorlog');
    }
}
