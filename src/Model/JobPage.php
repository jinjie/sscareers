<?php

namespace SSCareers;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

/**
 * JobPage
 *
 * @package SSCareers
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

class JobPage extends \Page
{
    private static $table_name = 'JobPage';

    private static $db = [
        'JobReference'      => 'Varchar(20)',
        'Description'       => 'HTMLText',
        'Responsibilities'  => 'HTMLText',
        'Qualifications'    => 'HTMLText',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
    
        $fields->removeByName('Content');
    
        $fields->fieldByName('Root.Main.Title')->setTitle('Job Title');

        $fields->addFieldToTab('Root.Main', TextField::create('JobReference', _t("SSCareers.JOBREFERENCE", "Job Reference")), 'Metadata');
        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Description', _t('SSCareers.JOBDESCRIPTION', 'Job Description')), 'Metadata');
        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Responsibilities', _t('SSCareers.JOBRESPONSIBILITIES', 'Job Responsibilities')), 'Metadata');
        $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Qualifications', _t('SSCareers.JOBQUALIFICATIONS', 'Job Qualifications')), 'Metadata');
    
        return $fields;
    }
}
