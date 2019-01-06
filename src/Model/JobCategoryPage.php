<?php

namespace SSCareers;

use SSCareers\JobPage;

/**
 * JobCategoryPage
 *
 * @package SSCareers
 * @author Kong Jin Jie <jinjie@swiftdev.sg>
 */

class JobCategoryPage extends \Page
{
    private static $table_name = 'JobCategoryPage';

    private static $allowed_children = array(
        JobPage::class,
    );
}
