<h1>{$Title}</h1>

<div class="job-reference">Job Reference: {$JobReference}</div>
<div class="job-posted">Job Posted: {$Created.Format('d MMM Y')}</div>

<div class="job-content">
    <h2><% _t("SSCareers.JOBDESCRIPTION", "Description") %></h2>

    {$Description}

    <h2><% _t("SSCareers.JOBRESPONSIBILITIES", "Responsibilities") %></h2>

    {$Responsibilities}

    <h2><% _t("SSCareers.JOBQUALIFICATIONS", "Qualifications") %></h2>

    {$Qualifications}
</div>

{$Form}