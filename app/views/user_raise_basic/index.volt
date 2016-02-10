
{{ content() }}

<div align="right">
    {{ link_to("dtb_raise_project_basic/new", "Create dtb_raise_project_basic") }}
</div>

{{ form("dtb_raise_project_basic/search", "method":"post", "autocomplete" : "off") }}

<div align="center">
    <h1>Search dtb_raise_project_basic</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="raise_id">Raise</label>
        </td>
        <td align="left">
            {{ text_field("raise_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="user_id">User</label>
        </td>
        <td align="left">
            {{ text_field("user_id", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="project_name">Project Of Name</label>
        </td>
        <td align="left">
            {{ text_field("project_name", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="project_desc">Project Of Desc</label>
        </td>
        <td align="left">
            {{ text_field("project_desc", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="project_grow_up">Project Of Grow Of Up</label>
        </td>
        <td align="left">
            {{ text_field("project_grow_up", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="company_logo">Company Of Logo</label>
        </td>
        <td align="left">
            {{ text_field("company_logo", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="aim_money">Aim Of Money</label>
        </td>
        <td align="left">
            {{ text_field("aim_money", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="aim_equity_offered">Aim Of Equity Of Offered</label>
        </td>
        <td align="left">
            {{ text_field("aim_equity_offered", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="already_equity_offered">Already Of Equity Of Offered</label>
        </td>
        <td align="left">
            {{ text_field("already_equity_offered", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="already_money">Already Of Money</label>
        </td>
        <td align="left">
            {{ text_field("already_money", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="valuation">Valuation</label>
        </td>
        <td align="left">
            {{ text_field("valuation", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="rate_of_return">Rate Of Of Of Return</label>
        </td>
        <td align="left">
            {{ text_field("rate_of_return", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="video_url">Video Of Url</label>
        </td>
        <td align="left">
            {{ text_field("video_url", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="address1">Address1</label>
        </td>
        <td align="left">
            {{ text_field("address1", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="address2">Address2</label>
        </td>
        <td align="left">
            {{ text_field("address2", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="country">Country</label>
        </td>
        <td align="left">
            {{ text_field("country", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="province">Province</label>
        </td>
        <td align="left">
            {{ text_field("province", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="dist">Dist</label>
        </td>
        <td align="left">
            {{ text_field("dist", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="city">City</label>
        </td>
        <td align="left">
            {{ text_field("city", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="post_card">Post Of Card</label>
        </td>
        <td align="left">
            {{ text_field("post_card", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="company">Company</label>
        </td>
        <td align="left">
            {{ text_field("company", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="webstate">Webstate</label>
        </td>
        <td align="left">
            {{ text_field("webstate", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="create_ts">Create Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("create_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="public_ts">Public Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("public_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="end_ts">End Of Ts</label>
        </td>
        <td align="left">
            {{ text_field("end_ts", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="invested_num">Invested Of Num</label>
        </td>
        <td align="left">
            {{ text_field("invested_num", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="currency">Currency</label>
        </td>
        <td align="left">
            {{ text_field("currency", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="next_two_y_total_wage">Next Of Two Of Y Of Total Of Wage</label>
        </td>
        <td align="left">
            {{ text_field("next_two_y_total_wage", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="next_discount">Next Of Discount</label>
        </td>
        <td align="left">
            {{ text_field("next_discount", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="comment">Comment</label>
        </td>
        <td align="left">
            {{ text_field("comment", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="status">Status</label>
        </td>
        <td align="left">
            {{ text_field("status", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="result">Result</label>
        </td>
        <td align="left">
            {{ text_field("result", "type" : "numeric") }}
        </td>
    </tr>

    <tr>
        <td></td>
        <td>{{ submit_button("Search") }}</td>
    </tr>
</table>

</form>
