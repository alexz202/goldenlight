
{{ content() }}

<table width="100%">
    <tr>
        <td align="left">
            {{ link_to("dtb_raise_project_basic/index", "Go Back") }}
        </td>
        <td align="right">
            {{ link_to("dtb_raise_project_basic/new", "Create ") }}
        </td>
    </tr>
</table>

<table class="browse" align="center">
    <thead>
        <tr>
            <th>Raise</th>
            <th>User</th>
            <th>Project Of Name</th>
            <th>Project Of Desc</th>
            <th>Project Of Grow Of Up</th>
            <th>Company Of Logo</th>
            <th>Aim Of Money</th>
            <th>Aim Of Equity Of Offered</th>
            <th>Already Of Equity Of Offered</th>
            <th>Already Of Money</th>
            <th>Valuation</th>
            <th>Rate Of Of Of Return</th>
            <th>Video Of Url</th>
            <th>Address1</th>
            <th>Address2</th>
            <th>Country</th>
            <th>Province</th>
            <th>Dist</th>
            <th>City</th>
            <th>Post Of Card</th>
            <th>Company</th>
            <th>Webstate</th>
            <th>Create Of Ts</th>
            <th>Public Of Ts</th>
            <th>End Of Ts</th>
            <th>Invested Of Num</th>
            <th>Currency</th>
            <th>Next Of Two Of Y Of Total Of Wage</th>
            <th>Next Of Discount</th>
            <th>Comment</th>
            <th>Status</th>
            <th>Result</th>
         </tr>
    </thead>
    <tbody>
    {% if page.items is defined %}
    {% for dtb_raise_project_basic in page.items %}
        <tr>
            <td>{{ dtb_raise_project_basic.getRaiseId() }}</td>
            <td>{{ dtb_raise_project_basic.getUserId() }}</td>
            <td>{{ dtb_raise_project_basic.getProjectName() }}</td>
            <td>{{ dtb_raise_project_basic.getProjectDesc() }}</td>
            <td>{{ dtb_raise_project_basic.getProjectGrowUp() }}</td>
            <td>{{ dtb_raise_project_basic.getCompanyLogo() }}</td>
            <td>{{ dtb_raise_project_basic.getAimMoney() }}</td>
            <td>{{ dtb_raise_project_basic.getAimEquityOffered() }}</td>
            <td>{{ dtb_raise_project_basic.getAlreadyEquityOffered() }}</td>
            <td>{{ dtb_raise_project_basic.getAlreadyMoney() }}</td>
            <td>{{ dtb_raise_project_basic.getValuation() }}</td>
            <td>{{ dtb_raise_project_basic.getRateOfReturn() }}</td>
            <td>{{ dtb_raise_project_basic.getVideoUrl() }}</td>
            <td>{{ dtb_raise_project_basic.getAddress1() }}</td>
            <td>{{ dtb_raise_project_basic.getAddress2() }}</td>
            <td>{{ dtb_raise_project_basic.getCountry() }}</td>
            <td>{{ dtb_raise_project_basic.getProvince() }}</td>
            <td>{{ dtb_raise_project_basic.getDist() }}</td>
            <td>{{ dtb_raise_project_basic.getCity() }}</td>
            <td>{{ dtb_raise_project_basic.getPostCard() }}</td>
            <td>{{ dtb_raise_project_basic.getCompany() }}</td>
            <td>{{ dtb_raise_project_basic.getWebstate() }}</td>
            <td>{{ dtb_raise_project_basic.getCreateTs() }}</td>
            <td>{{ dtb_raise_project_basic.getPublicTs() }}</td>
            <td>{{ dtb_raise_project_basic.getEndTs() }}</td>
            <td>{{ dtb_raise_project_basic.getInvestedNum() }}</td>
            <td>{{ dtb_raise_project_basic.getCurrency() }}</td>
            <td>{{ dtb_raise_project_basic.getNextTwoYTotalWage() }}</td>
            <td>{{ dtb_raise_project_basic.getNextDiscount() }}</td>
            <td>{{ dtb_raise_project_basic.getComment() }}</td>
            <td>{{ dtb_raise_project_basic.getStatus() }}</td>
            <td>{{ dtb_raise_project_basic.getResult() }}</td>
            <td>{{ link_to("dtb_raise_project_basic/edit/"~dtb_raise_project_basic.getRaiseId(), "Edit") }}</td>
            <td>{{ link_to("dtb_raise_project_basic/delete/"~dtb_raise_project_basic.getRaiseId(), "Delete") }}</td>
        </tr>
    {% endfor %}
    {% endif %}
    </tbody>
    <tbody>
        <tr>
            <td colspan="2" align="right">
                <table align="center">
                    <tr>
                        <td>{{ link_to("dtb_raise_project_basic/search", "First") }}</td>
                        <td>{{ link_to("dtb_raise_project_basic/search?page="~page.before, "Previous") }}</td>
                        <td>{{ link_to("dtb_raise_project_basic/search?page="~page.next, "Next") }}</td>
                        <td>{{ link_to("dtb_raise_project_basic/search?page="~page.last, "Last") }}</td>
                        <td>{{ page.current~"/"~page.total_pages }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
