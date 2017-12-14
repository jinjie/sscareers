<h1>{$Title}</h1>

<table class="ss-careers table">
    <thead>
        <tr>
            <th><%t SSCareers.JOBTITLE 'Job Title' %></th>
            <th><%t SSCareers.JOBREFERENCE 'Job Reference' %></th>
            <th><%t SSCareers.PUBLISHEDDATE 'Published Date' %></th>
        </tr>
    </thead>
    <tbody>
        <% loop $Children %>
            <tr>
                <td><a href="{$Link}" title="View more about {$Title.XML}">{$Title.XML}</a></td>
                <td>{$JobReference}</td>
                <td>{$Created.Format('j M Y')}</td>
            </tr>
        <% end_loop %>
    </tbody>
</table>