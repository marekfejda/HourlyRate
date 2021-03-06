<?php

namespace Kanboard\Plugin\HourlyRate;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('board/task_footer', 'HourlyRate:board/task_footer');
        $this->template->setTemplateOverride('task/details', 'HourlyRate:task/details');
        $this->template->setTemplateOverride('task_list/task_subtasks', 'HourlyRate:task_list/task_subtasks');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'HourlyRate';
    }

    public function getPluginDescription()
    {
        return t('Set hourly rate and estimated task time. Display final task price.');
    }

    public function getPluginAuthor()
    {
        return 'Marek Fejda';
    }

    public function getPluginVersion()
    {
        return '1.0.7';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/marekfejda/HourlyRate';
    }
}

